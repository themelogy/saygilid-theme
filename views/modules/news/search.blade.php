@extends('news::layouts.index')

@section('title')
    {{ $title }}
@endsection

@section('breadcrumbs')
    {!! Breadcrumbs::renderIfExists('news.search') !!}
@endsection

@section('blog.content')
    @foreach($posts as $post)
        @include('news::_post', compact($post))
    @endforeach
@endsection