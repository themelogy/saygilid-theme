<div class="footer-widget">
    <h5>{{ trans('tag::tags.tags') }}</h5>
    @if(isset($page))
        @foreach($page->tags()->get() as $tag)
            <a class="label label-warning" style="color: black;" href="{{ route('page.tag', [$tag->slug]) }}">{{ $tag->name }}</a>
        @endforeach
    @endif
</div>