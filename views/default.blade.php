@extends('layouts.master')

@section('content')

    <div class="page-head overlay-wrap">
        <div class="overlay"></div>
        <div class="container text-uppercase">
            <h1>{{ $page->title }}</h1>
            {!! Breadcrumbs::renderIfExists('page') !!}
        </div>
    </div>

    <div class="home-profile">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                {!! $page->body !!}
                </div>
            </div>
        </div>
    </div>

@stop
