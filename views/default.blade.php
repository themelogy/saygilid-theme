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
                    @if(isset($page->parent) && ($page->parent->settings->show_menu ?? false) && !($page->settings->full_page ?? false))
                        @include('page::partials.menu')
                    @elseif($page && ($page->settings->list_page ?? false))
                        @include('page::partials.list')
                    @elseif($page && ($page->settings->slide_gallery ?? false))
                        @include('page::partials.slide')
                    @elseif($page && !($page->settings->list_page ?? false) && !($page->parent->settings->show_menu ?? false))
                        @include('page::partials.image')
                    @endif
                </div>
            </div>
        </div>
    </div>

@stop
