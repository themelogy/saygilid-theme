@extends('layouts.master')

@section('content')
    <div id="parent-content" class="clearfix">
        <section class="page-head-shop overlay-wrap">
            <div class="overlay"></div>
            <div class="container">
                <div class="blog-content-title-inner block-center">
                    <div class="block-center-inner">
                        <h1 style="margin-bottom: 10px;">{{ $category->title }}</h1>
                        {!! Breadcrumbs::renderIfExists('store.category') !!}
                    </div>
                </div>
            </div>
        </section>
        <main role="main" class="site-content-archive">
            <div class="container clearfix">
                <div class="row clearfix">

                    <div class="site-content-archive-inner col-md-9">
                        <div class="prods-cnt">

                            @forelse($products->chunk(3) as $chunk)
                                <div class="row">
                                    @foreach($chunk as $product)
                                        @include('store::_product')
                                    @endforeach
                                </div>
                            @empty

                            @endforelse

                            <div class="clearfix"></div>

                            <div class="col-md-12 m-top-20">
                                {!! $products->render('store::pagination.default') !!}
                            </div>
                        </div>
                        <!-- /prods-cnt -->
                    </div>

                    @include('store::partials.sidebar')
                </div>
            </div>
        </main>
    </div>

@endsection