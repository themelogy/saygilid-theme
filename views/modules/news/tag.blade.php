@extends('news::layouts.index')

@section('title')
    {{ trans('tag::tags.tag') }} : {{ $tag->name }}
@endsection

@section('breadcrumbs')
    {!! Breadcrumbs::renderIfExists('blog.tag') !!}
@endsection

@section('blog.content')
    @foreach($posts as $post)
        @include('news::_post', compact($post))
    @endforeach
    {!! $posts->render('news::pagination.default') !!}
@endsection