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
                    <div class="page-image pull-left m-rgt-15 m-bot-15">
                        <img class="img-thumbnail img-responsive" src="{{ $page->present()->firstImage(350, 275, 'resize', 80) }}" />
                    </div>
                    {!! $page->body !!}
                </div>
            </div>
        </div>
    </div>

@stop
