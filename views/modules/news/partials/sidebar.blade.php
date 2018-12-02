<div class="sidebar right-sidebar col-md-3 hidden-sm hidden-xs">
    @include('news::partials.sidebar.search')
    @include('news::partials.sidebar.category')
    @newsLatestPosts(4, 'sidebar.latest')
    @include('news::partials.sidebar.tags')
</div>