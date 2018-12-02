<aside class="widget widget-posts">
    <h4 class="widget-title">
        <span>{{ trans('themes::blog.last news') }}</span>
    </h4>
    <div class="widget-posts-wrap">
        @foreach($posts as $post)
            <div class="widget_posts_item clearfix">
                <div class="widget-posts-thumbnail">
                    <div class="entry-thumbnail owl-item-auto">
                        <div>
                            <a class="entry-thumbnail_overlay" href="{{ $post->url }}" title="{{ $post->title }}">
                                <img alt="{{ $post->title }}" class="img-responsive" src="{{ $post->present()->firstImage(150,150,'fit',80) }}" /> </a>
                            <a class="prettyPhoto" data-rel="prettyPhoto" href="{{ $post->present()->firstImage(500,400,'resize',80) }}">
                                <i class="fa fa-expand"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="widget-posts-content-wrap">
                    <div class="widget-posts-date">
                        {{ $post->created_at->formatLocalized('%d %B %Y') }}
                    </div>
                    <a class="widget-posts-title" href="{{ $post->url }}" rel="bookmark" title="{{ $post->title }}">
                        {{ $post->title }}
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</aside>