@extends('news::layouts.index')

@section('title')
    {{ trans('themes::news.title') }}
@endsection

@section('breadcrumbs')
    {!! Breadcrumbs::renderIfExists('news') !!}
@endsection

@section('blog.content')
    @foreach($posts as $post)
        @include('news::_post', compact($post))
    @endforeach
    {!! $posts->render('news::pagination.default') !!}
@endsection