@extends('layouts.master')

@section('content')
    <div id="parent-content" class="clearfix">
        <section class="page-head-shop overlay-wrap">
            <div class="overlay"></div>
            <div class="container">
                <div class="blog-content-title-inner block-center">
                    <div class="block-center-inner">
                        <h1 style="margin-bottom: 10px;">{{ $product->title }}</h1>
                        {!! Breadcrumbs::renderIfExists('store.product') !!}
                    </div>
                </div>
            </div>
        </section>
        <main role="main" class="site-content-archive">
            <div class="col-md-6   text-center">
                <div id="owl-item" class="item-slider">
                    @foreach($product->present()->images(865, null, 'resize', 69, 'watermark.png') as $image)
                        <div><img src="{{ $image }}" alt=""/></div>
                    @endforeach
                    @if(!empty($product->video))
                        <div>{!! $product->present()->video(870,480) !!}</div>
                    @endif
                </div>
            </div>
            <div class="col-md-6  ">
                <div class="col-md-8 data-container">
                    <h2><strong>{{ $product->title }}</strong></h2>
                    <h4 class="m-bot-20"><a href="{{ $product->present()->category_url }}">{{ $product->present()->category_title }}</a></h4>
                    <div class="space pull-left">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#desc" data-toggle="tab">{{ trans('store::stores.tabs.description') }}</a></li>
                            @if(!empty($product->technical_description))
                                <li><a href="#tech" data-toggle="tab">{{ trans('store::stores.tabs.tech') }}</a></li>
                            @endif
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="desc">
                                {!! $product->description !!}
                            </div>
                            @if(!empty($product->technical_description))
                                <div class="tab-pane" id="tech">
                                    {!! $product->technical_description !!}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>

            @include('store::_related')

        </main>
    </div>
@endsection

@push('js_inline')
<script>
    jQuery('.menu .item').tab();
</script>
@endpush