@extends('blog::layouts.index')

@section('title')
    {{ trans('themes::blog.title') }}
@endsection

@section('breadcrumbs')
    {!! Breadcrumbs::render('blog') !!}
@endsection

@section('blog.content')
    @foreach($posts as $post)
        @include('blog::_post')
    @endforeach
    {!! $posts->render('blog::pagination.default') !!}
@endsection