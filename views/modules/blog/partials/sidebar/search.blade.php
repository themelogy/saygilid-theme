<aside id="search-4" class="widget widget_search">
    <h4 class="widget-title">
        <span>{{ trans('themes::theme.search') }}</span>
    </h4>
    {!! Form::open(['route'=>'blog.search', 'method'=>'get', 'class'=>'search-form']) !!}
    {!! Form::input('text', 's', Request::get('s'), ['id'=>'s','placeholder'=>trans('themes::theme.search')]) !!}
    <button type="submit">
        <i class="fa fa-search"></i>
    </button>
    {!! Form::close() !!}
</aside>