@extends('layouts.app')

@section('content')
    {{ sage_prefetch_link_posts($wp_query->posts ?? []) }}

    @php
        // FORCE ajaxurl đúng path (subfolder /thuchoc/)
        $correct_ajaxurl = admin_url('admin-ajax.php');
    @endphp
    <script>
        window.ajaxurl = "{{ esc_js($correct_ajaxurl) }}";
        window.sageData = window.sageData || {};
        window.sageData.ajaxurl = "{{ esc_js($correct_ajaxurl) }}";
        console.log('%c✅ [AJAXURL FIXED] ' + window.ajaxurl, 'color:lime;font-weight:bold');
    </script>

    <div id="jobs-archive-wrapper">
        @php global $wp_query; $query = $wp_query; @endphp

        <div id="jobs-listing-container">
            @include('partials.content-listing', ['query' => $query])
        </div>

        <div id="jobs-pagination-container" class="mt-10">
            {!! \App\Helpers\PaginationHelper::numberPagination($query) !!}
        </div>
    </div>
@endsection

@section('sidebar')
    @include('sections.sidebar')
@endsection