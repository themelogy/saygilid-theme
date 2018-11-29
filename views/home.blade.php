@extends('layouts.master')

@section('content')
    @include('partials.pages.home.slider')

    @include('partials.pages.home.process')

    @include('partials.pages.home.products')

    @include('partials.pages.home.news')

    @if ('test'==1)

        @include('partials.pages.home.features')

        @include('partials.pages.home.info')

        @include('partials.pages.home.quotes')

    @endif
@endsection