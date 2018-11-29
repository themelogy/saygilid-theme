<div class="sidebar right-sidebar col-md-3 hidden-sm hidden-xs">
    <aside id="categories-4" class="widget widget_categories">
        <h4 class="widget-title"><span>{{ trans('store::categories.title.categories') }}</span></h4>
        {!! app(\Modules\Store\Services\CategoryMenu::class)->render() !!}
    </aside>
    <aside id="tag_cloud-4" class="widget widget_tag_cloud">
        <h4 class="widget-title"><span>{{ trans('tag::tags.tags') }}</span></h4>
        <div class="tagcloud">
            @if($products)
                @foreach($products as $product)
                    @if($tag = $product->tags()->first())
                    <a class="tag-link-24" href="{{ $tag->url }}" title="3 topics">
                        {{ $tag->name }}
                    </a>
                    @endif
                @endforeach
            @endif
        </div>
    </aside>
</div>