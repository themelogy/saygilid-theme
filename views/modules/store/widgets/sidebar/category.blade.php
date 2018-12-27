<aside id="categories-4" class="widget widget_categories">
<h4 class="widget-title"><span>{{ trans('store::categories.title.categories') }}</span></h4>
<ul>
@foreach($categories as $category)
<li><a href="{{ $category->url }}">{{ $category->title }}</a></li>
@storeSubCategory($category,'sidebar.sub-category')
@endforeach
</ul>
</aside>
