@extends('blog::layouts.index')

@section('title')
    {{ $title }}
@endsection

@section('breadcrumbs')
    {!! Breadcrumbs::renderIfExists('blog.search') !!}
@endsection

@section('blog.content')
    @foreach($posts as $post)
        @include('blog::_post', compact($post))
    @endforeach
@endsection