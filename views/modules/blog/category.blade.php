@extends('blog::layouts.index')

@section('title')
    {{ $category->name }}
@endsection

@section('breadcrumbs')
    {!! Breadcrumbs::render('blog.category') !!}
@endsection

@section('blog.content')
    @foreach($posts as $post)
        @include('blog::_post')
    @endforeach
    {!! $posts->render('blog::pagination.default') !!}
@endsection