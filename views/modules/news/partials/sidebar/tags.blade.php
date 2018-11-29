@if(Request::route()->getName() == 'news.index' || (Request::route()->getName()=='news.slug' && $post->tags()->count()>0))
<aside id="tag_cloud-4" class="widget widget_tag_cloud">
    <h4 class="widget-title">
        <span>{{ trans('themes::blog.tags') }}</span>
    </h4>
    <div class="tagcloud">
        @if(Request::route()->getName() == 'blog.index')
        @foreach(News::latest(10) as $post)
            <?php $tag = $post->tags()->first(); ?>
            @if($tag)
                <a class="tag-link-24" href="{{ route('blog.tag', [$tag->slug]) }}" title="3 topics">
                    {{ $tag->name }}
                </a>
            @endif
        @endforeach
        @else
            @if(isset($post))
                @foreach($post->tags()->get() as $tag)
                    <a class="tag-link-24" href="{{ route('blog.tag', [$tag->slug]) }}" title="3 topics">
                        {{ $tag->name }}
                    </a>
                @endforeach
            @endif
        @endif
    </div>
</aside>
@endif