<aside class="widget widget-posts">
    <h4 class="widget-title">
        <span>{{ trans('themes::blog.last news') }}</span>
    </h4>
    <div class="widget-posts-wrap">
        @foreach(News::latest(4) as $latest)
            <div class="widget_posts_item clearfix">
                <div class="widget-posts-thumbnail">
                    <div class="entry-thumbnail owl-item-auto">
                        <div>
                            <a class="entry-thumbnail_overlay" href="{{ $latest->url }}" title="{{ $latest->title }}">
                                <img alt="{{ $latest->title }}" class="img-responsive" src="{{ $latest->present()->firstImage(150,150,'fit',80) }}" /> </a>
                            <a class="prettyPhoto" data-rel="prettyPhoto" href="{{ $latest->present()->firstImage(500,400,'resize',80) }}">
                                <i class="fa fa-expand"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="widget-posts-content-wrap">
                    <div class="widget-posts-date">
                        {{ $latest->created_at->formatLocalized('d F Y') }}
                    </div>
                    <a class="widget-posts-title" href="{{ $latest->url }}" rel="bookmark" title="{{ $latest->title }}">
                        {{ $latest->title }}
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</aside>