@if($product->related()->count()>0)
    <div class="col-lg-12">
        <div class="container">
            <div class="content-head text-center text-uppercase">
                <h4>{!! trans('themes::product.similar products') !!}</h4></div>
            <div class="prods-cnt no-overflow ">
                <div class="clear"></div>

            @foreach($product->related()->get()->take(3) as $related)
                <!-- start product box prod-box -->
                    <div class="prod-cnt prod-box  cat-2 extra-height">
                        <div class="view view-tenth">
                            <img src="{{ $related->present()->firstImage(270,270,'fit',80) }}" alt="">
                            <div class="mask">
                                <a class="info darna-button style1 view-modal" href="#">
                                    {{ trans('themes::product.quick show') }}
                                </a>
                                <a class="info darna-button style1" href="{{ $product->url }}">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                            <div aria-hidden="true" class="modal" role="dialog" tabindex="-1">
                                <div class="modal-dialog   modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button aria-hidden="true" class="close popup-close" data-dismiss="modal" type="button"><i class="fa fa-close"></i></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="col-md-4 image-container">
                                                <img alt="teste" class="img-thumbnail" src="{{ $related->present()->firstImage(270,270,'fit',80) }}">
                                            </div>
                                            <div class="col-md-8 data-container">
                                                <h2>{{ $related->title }}</h2>
                                                <div>
                                                    {!! $related->description !!}
                                                    {!! $related->technical_description !!}
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="clear"></div>
                            <a class="product-name" href="{{ $related->url }}">
                                {{ $related->title }}
                            </a>
                        </div>
                    </div>
                    <!-- end product box prod-box -->
                @endforeach
            </div>
        </div>
    </div>
@endif