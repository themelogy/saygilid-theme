@extends('news::layouts.index')

@section('title')
    {{ $category->name }}
@endsection

@section('breadcrumbs')
    {!! Breadcrumbs::renderIfExists('news.category') !!}
@endsection

@section('blog.content')
    @foreach($posts as $post)
        @include('news::_post', compact($post))
    @endforeach
    {!! $posts->render('news::pagination.default') !!}
@endsection