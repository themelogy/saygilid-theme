<aside id="categories-4" class="widget widget_categories">
    <ul class="list-group">
        @foreach($children as $child)
            <li class="list-group-item">
                @if(collect(Request::segments())->search($child->slug))
                    <a style="font-weight: bold;" class="active" href="{{ $child->url }}">{{ $child->title }}</a>
                @else
                    <a style="color: gray;" href="{{ $child->url }}">{{ $child->title }}</a>
                @endif
            </li>
        @endforeach
    </ul>
</aside>