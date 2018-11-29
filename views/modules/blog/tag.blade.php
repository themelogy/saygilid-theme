@extends('blog.layouts.index')

@section('title')
    {{ trans('tag::tags.tag') }} : {{ $tag->name }}
@endsection

@section('breadcrumbs')
    {!! Breadcrumbs::render('blog.tag') !!}
@endsection

@section('blog.content')
    @foreach($posts as $post)
        @include('blog::_post')
    @endforeach
    {!! $posts->render('blog::pagination.default') !!}
@endsection