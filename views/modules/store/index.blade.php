@extends('layouts.master')

@section('content')
    <div id="parent-content" class="clearfix">
        <section class="page-head-shop overlay-wrap">
            <div class="blog-content-title-overlay"></div>
            <div class="container">
                <div class="blog-content-title-inner block-center">
                    <div class="block-center-inner">
                        <h1>{{ trans('themes::product.title') }}</h1>
                        {!! Breadcrumbs::renderIfExists('store.index') !!}
                    </div>
                </div>
            </div>
        </section>
        <main role="main" class="site-content-archive">
            <div class="container clearfix">
                <div class="row clearfix">

                    <div class="site-content-archive-inner col-md-9">
                        <div class="prods-cnt">

                        @if($products)

                             @foreach($products as $product)
                                @include('store::_product')
                             @endforeach

                                <div class="clearfix"></div>

                                <div class="col-md-12 m-top-20">
                                    {!! $products->render('store::pagination.default') !!}
                                </div>

                            @else

                            @endif
                        </div>
                        <!-- /prods-cnt -->
                    </div>

                    @include('store::partials.sidebar')
                </div>
            </div>
        </main>
    </div>
@endsection