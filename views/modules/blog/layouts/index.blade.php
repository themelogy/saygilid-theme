@extends('layouts.master')

@section('content')
    <div id="parent-content" class="clearfix">

        <section class="blog-content-title-wrap page-head-blog">
            <div class="blog-content-title-overlay"></div>
            <div class="container">
                <div class="blog-content-title-inner block-center">
                    <div class="block-center-inner">
                        <h1>@yield('title')</h1>
                        @yield('breadcrumbs')
                    </div>
                </div>
            </div>
        </section>

        <main role="main" class="site-content-archive ">
            <div class="container clearfix">
                <div class="row clearfix">
                    @include('blog::partials.sidebar')
                    <div class="site-content-archive-inner col-md-9 site-content-archive-inner-side">
                        <div class="blog-wrap layout-container">
                            <div class="blog-inner clearfix">
                                @yield('blog.content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection