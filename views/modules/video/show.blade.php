@extends('layouts.master')

@section('content')

    <div class="page-head overlay-wrap">
        <div class="overlay"></div>
        <div class="container text-uppercase">
            <h1>{{ $media->title }}</h1>
            {!! Breadcrumbs::renderIfExists('video.show') !!}
        </div>
    </div>

    <div class="home-profile">
        <div class="container">
            <div class="embed-responsive embed-responsive-16by9">
                {!! $media->embed['code'] ?? null !!}
            </div>
        </div>
    </div>

@endsection
