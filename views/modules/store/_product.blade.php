@if($product->categories()->exists())
    <!-- start product box prod-box -->
    <div class="col-sm-4 col-md-4 col-xs-12 m-bot-20">
        <div class="view view-tenth">
            <img src="{{ $product->present()->firstImage(270,270,'fit',80) }}" alt="{{ $product->title }}">
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
                                <img alt="{{ $product->title }}" class="img-thumbnail" src="{{ $product->present()->firstImage(270,270,'resize',80) }}">
                            </div>
                            <div class="col-md-8 data-container">
                                <h2>{{ $product->title }}</h2>
                                <h4>{{ $product->present()->category_title }}</h4>
                                <div class="space pull-left">
                                    {!! $product->description !!}
                                    {!! $product->technical_description !!}
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
            <h4>
                <a class="product-name" href="{{ $product->url }}">
                    {{ $product->title }}
                </a>
            </h4>
        </div>
    </div>
    <!-- end product box prod-box -->
@endif