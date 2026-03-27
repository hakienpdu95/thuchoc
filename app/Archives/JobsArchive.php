<?php
namespace App\Archives;

use WP_Query;
use App\Helpers\PaginationHelper;
use App\Helpers\CacheHelper;

class JobsArchive {
    public static function init(): void {
        add_action('pre_get_posts', [self::class, 'modifyQuery'], 20);
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
        $query->set('posts_per_page', 2);   // bạn đang test = 2
        $query->set('orderby', 'date');
        $query->set('order', 'DESC');
        $query->set('post_status', 'publish');
        $query->set('no_found_rows', false);
    }

    public static function ajaxLoad(): void {
        $paged = max(1, (int) ($_POST['paged'] ?? 1));

        try {
            error_log("=== [JOBS_AJAX_SAFE] BẮT ĐẦU PAGE {$paged} ===");

            $query = new WP_Query([
                'post_type'              => 'jobs',
                'paged'                  => $paged,
                'posts_per_page'         => 2,
                'orderby'                => 'date',
                'order'                  => 'DESC',
                'post_status'            => 'publish',
                'no_found_rows'          => false,
                'update_post_meta_cache' => false,
                'update_post_term_cache' => false,
                'suppress_filters'       => true,     // ← BỎ QUA HẾT FILTER KHÁC
                'ignore_sticky_posts'    => true,
            ]);

            error_log("[JOBS_AJAX_SAFE] Found posts: {$query->found_posts} | Post count: {$query->post_count} | Max pages: {$query->max_num_pages}");
            error_log("[JOBS_AJAX_SAFE] SQL: " . $query->request);

            // Render Blade
            $content    = \Roots\view('partials.content-listing', ['query' => $query])->render();
            $pagination = PaginationHelper::numberPagination($query);

            error_log("[JOBS_AJAX_SAFE] RENDER THÀNH CÔNG - Page {$paged}");

            wp_send_json_success([
                'content'    => $content,
                'pagination' => $pagination,
                'paged'      => $paged,
                'max_pages'  => $query->max_num_pages ?? 1,
                'found'      => $query->found_posts,
            ]);

        } catch (\Throwable $e) {
            error_log("[JOBS_AJAX_SAFE] ❌ FATAL ERROR: " . $e->getMessage());
            error_log("[JOBS_AJAX_SAFE] File: " . $e->getFile() . " | Line: " . $e->getLine());

            wp_send_json_error([
                'message' => 'Lỗi server: ' . $e->getMessage(),
                'debug'   => 'Xem debug.log'
            ]);
        }
    }
}