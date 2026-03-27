<?php
namespace App\Archives;

use WP_Query;
use App\Helpers\PaginationHelper;
use App\Helpers\CacheHelper;

class JobsArchive {
    private static $posts_per_page = 2;   // Bạn đang test = 2 (sau đổi thành 12-16)

    public static function init(): void {
        add_action('pre_get_posts', [self::class, 'modifyQuery'], 20);
        
        // === FORCE PAGINATION SAU MAIN QUERY (cách chắc chắn 100%) ===
        add_action('wp', [self::class, 'forceInjectPagination'], 5);

        add_action('wp_ajax_load_jobs_archive', [self::class, 'ajaxLoad']);
        add_action('wp_ajax_nopriv_load_jobs_archive', [self::class, 'ajaxLoad']);
    }

    public static function modifyQuery($query): void {
        if (is_admin() || !$query->is_main_query() || !is_post_type_archive('jobs')) {
            return;
        }

        if (isset($_GET['page']) && $_GET['page'] > 0) {
            $query->set('paged', max(1, (int)$_GET['page']));
        }

        $query->set('posts_per_page', self::$posts_per_page);
        $query->set('orderby', 'date');
        $query->set('order', 'DESC');
        $query->set('post_status', 'publish');
        $query->set('no_found_rows', true);           // Giữ true để siêu nhanh
        $query->set('update_post_meta_cache', false);
        $query->set('update_post_term_cache', false);
    }

    /**
     * FORCE found_posts + max_num_pages trực tiếp vào $wp_query
     * → PaginationHelper sẽ nhận đúng và hiển thị ngay
     */
    public static function forceInjectPagination(): void {
        if (!is_post_type_archive('jobs') || is_admin()) {
            return;
        }

        global $wp_query;

        $total_posts = CacheHelper::getPostTypeCount('jobs');
        $ppp         = (int) $wp_query->get('posts_per_page') ?: self::$posts_per_page;
        $max_pages   = max(1, (int) ceil($total_posts / $ppp));

        $wp_query->found_posts   = $total_posts;
        $wp_query->max_num_pages = $max_pages;

        // === DEBUG LOG (mở wp-content/debug.log để xem) ===
        if (defined('WP_DEBUG') && WP_DEBUG) {
            error_log("[JOBS_FORCE_INJECT] ✅ SUCCESS | Total jobs: {$total_posts} | Max pages: {$max_pages} | Current paged: " . $wp_query->get('paged'));
        }
    }

    public static function ajaxLoad(): void {
        $paged = max(1, (int) ($_POST['paged'] ?? 1));
        $version = CacheHelper::getDataVersion('jobs');
        $cache_key = "jobs_archive_page_{$paged}_v{$version}";

        $data = CacheHelper::remember($cache_key, 1800, function () use ($paged) {
            $total_posts = CacheHelper::getPostTypeCount('jobs');
            $max_pages   = max(1, (int) ceil($total_posts / self::$posts_per_page));

            $query = new WP_Query([
                'post_type'              => 'jobs',
                'paged'                  => $paged,
                'posts_per_page'         => self::$posts_per_page,
                'orderby'                => 'date',
                'order'                  => 'DESC',
                'post_status'            => 'publish',
                'no_found_rows'          => true,
                'update_post_meta_cache' => false,
                'update_post_term_cache' => false,
                'suppress_filters'       => true,
            ]);

            $query->found_posts   = $total_posts;
            $query->max_num_pages = $max_pages;

            $content    = \Roots\view('partials.content-listing', ['query' => $query])->render();
            $pagination = PaginationHelper::numberPagination($query, $max_pages);

            return [
                'content'    => $content,
                'pagination' => $pagination,
                'max_pages'  => $max_pages,
            ];
        });

        wp_send_json_success($data);
    }
}