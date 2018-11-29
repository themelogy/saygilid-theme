<aside id="categories-4" class="widget widget_categories">
    <h4 class="widget-title">
        <span>{{ trans('themes::blog.category.title') }}</span>
    </h4>
    <ul>
        @foreach(BlogCategory::all() as $category)
            <li class="cat-item cat-item-19">
                <a href="{{ $category->url }}">{{ $category->name }}</a>
            </li>
        @endforeach
    </ul>
</aside>