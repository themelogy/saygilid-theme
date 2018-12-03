<div class="team-wrap p-top-bot-0">
    <div class="container">
        <div class="content-head text-center text-uppercase">
            <h4>{{ trans('themes::product.title') }}</h4>
        </div>
        <div class="row">
            <div id="team-wrap" class="owl-carousel owl-theme flexbox">
                @foreach($products as $product)
                    <div class="item col">
                        <div class="team-staff text-center">
                            <div class="staff-pic">
                                <a href="{{ $product->url }}">
                                    <img src="{!! $product->present()->firstImage(263, 200, 'fit', 81, 'watermark.png') !!}" class="img-responsive" alt="{{ $product->title }}"/>
                                </a>
                            </div>
                            <div class="staff-info text-uppercase">
                                <a href="{{ $product->url }}"><h3>{{ $product->title }}</h3></a>
                                <p>{{ $product->present()->category_title }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>