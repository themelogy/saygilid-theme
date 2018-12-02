@extends('layouts.master')

@section('content')
    @themeSlide()

    @pageFindByOptions('settings.show_page_home', 'home.page')

    @storeLatestProduct(6, 'home.products')

    @newsLatestPosts(6, 'home.latest')

    @if ('test'==1)

        @include('partials.pages.home.features')

        @include('partials.pages.home.info')

        @include('partials.pages.home.quotes')

    @endif
@endsection