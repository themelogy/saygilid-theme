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
            @unset($product)
        @endif
    </div>
</aside>