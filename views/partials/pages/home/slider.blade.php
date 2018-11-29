@if($slide = Slide::findBySlug('anasayfa'))
<div class="slider">
    <div id="rev_slider_204_1_wrapper" class="rev_slider fullwidthabanner revslider-initialised tp-simpleresponsive">
        <div id="rev_slider_204_1" class="rev_slider fullwidthabanner" data-version="5.1.1RC" style="display: none;">
            <ul>
                @foreach($slide->sliders()->where('status', 1)->orderBy('ordering', 'asc')->get() as $slider)
                <li data-description=""
                    data-easein="default"
                    data-easeout="default"
                    data-index="rs-{{ $loop->index+1 }}"
                    data-masterspeed="1500"
                    data-rotate="0"
                    data-saveperformance="off"
                    data-slotamount="7"
                    data-title="Slide {{ $loop->index+1 }}"
                    data-transition="random">
                    <img alt=""
                         class="rev-slidebg"
                         data-bgfit="cover"
                         data-bgposition="center center"
                         data-bgrepeat="no-repeat"
                         data-no-retina=""
                         src="{{ \Imagy::getImage($slider->files()->first()->filename, 'anasayfa_slider', ['width' => 1910, 'height' => 600, 'mode' => 'fit', 'quality' => 100]) }}">
                    @if(!empty($slider->title))
                    <div id="slide-{{ $loop->index+1 }}-layer-1"
                         class="tp-caption darnaverylargetextprimary tp-resizeme"
                         data-height="auto"
                         data-responsive_offset="on"
                         data-splitin="none"
                         data-splitout="none"
                         data-start="500"
                         data-transform_idle=""
                         data-transform_in="x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0;sY:0;skX:0;skY:0;opacity:0;s:1000;e:easeInOutBack;"
                         data-transform_out="x:left;skX:45px;s:500;s:500;"
                         data-width="auto"
                         data-x="{{ $slider->position_x }}"
                         data-y="{{ $slider->position_y+100 }}"
                         style="z-index: 5; white-space: nowrap; border-color: rgba(255, 255, 255, 1.00);"> {{ $slider->title }}
                    </div>
                    @endif
                    @if(!empty($slider->sub_title))
                    <div id="slide-{{ $loop->index+1 }}-layer-2"
                         class="tp-caption darnaverylargetext tp-resizeme"
                         data-height="auto"
                         data-responsive_offset="on"
                         data-splitin="none"
                         data-splitout="none"
                         data-start="1000"
                         data-transform_idle=""
                         data-transform_in="x:50;y:150;z:0;rX:0;rY:0;rZ:0;sX:0.5;sY:0.5;skX:0;skY:0;opacity:0;s:1000;e:Power3.easeInOut;"
                         data-transform_out="x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;s:500;s:500;"
                         data-width="auto"
                         data-x="{{ $slider->position_x }}"
                         data-y="{{ $slider->position_y+170 }}"
                         style="z-index: 6; white-space: nowrap; border-color: rgba(255, 255, 255, 1.00);"> {{ $slider->sub_title }}
                    </div>
                    @endif
                    @if(!empty($slider->content))
                    <div id="slide-{{ $loop->index+1 }}-layer-3"
                         class="tp-caption darnamediumtext tp-resizeme"
                         data-height="auto"
                         data-responsive_offset="on"
                         data-splitin="none"
                         data-splitout="none"
                         data-start="1500"
                         data-transform_idle=""
                         data-transform_in="x:50;y:150;z:0;rX:0;rY:0;rZ:0;sX:0.5;sY:0.5;skX:0;skY:0;opacity:0;s:1000;e:Power4.easeInOut;"
                         data-transform_out="x:{-250,250};y:{-150,150};rX:{-90,90};rY:{-90,90};rZ:{-360,360};sX:0;sY:0;opacity:0;s:300;s:300;"
                         data-width="auto"
                         data-x="{{ $slider->position_x }}"
                         data-y="{{ $slider->position_y+255 }}"
                         style="z-index: 7; white-space: nowrap; border-color: rgba(255, 255, 255, 1.00);"> {{ $slider->content }}
                    </div>
                    @endif
                    @if($slider->link_type != 'none')
                    <div id="slide-{{ $loop->index+1 }}-layer-4"
                         class="tp-caption tp-resizeme"
                         data-height="auto"
                         data-responsive_offset="on"
                         data-splitin="none"
                         data-splitout="none"
                         data-start="2000"
                         data-transform_idle=""
                         data-transform_in="x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;s:500;e:Bounce.easeOut;"
                         data-transform_out="x:right;skX:-85px;s:300;s:300;"
                         data-width="auto"
                         data-x="{{ $slider->position_x }}"
                         data-y="{{ $slider->position_y+300 }}"
                         style="z-index: 8; white-space: nowrap;">
                        <a class="darna-button style1 size-md" href="{{ $slider->link->url }}" style="margin-right: 10px;">
                            {!! $slider->link->title !!}
                        </a>
                    </div>
                    @endif
                </li>
                @endforeach
            </ul>
            <div class="tp-bannertimer" style="height: 7px; background-color: rgba(255, 255, 255, 0.25);"></div>
        </div>
    </div>
</div>

@section('extra-slides')
    <li data-description=""
        data-easein="default"
        data-easeout="default"
        data-index="rs-5"
        data-masterspeed="300"
        data-rotate="0"
        data-saveperformance="off"
        data-slotamount="7"
        data-thumb="{!! Theme::url("images/revslider/slider-02-100x50.jpg") !!}"
        data-title="Slide 2"
        data-transition="random">
        <img alt=""
             class="rev-slidebg"
             data-bgfit="cover"
             data-bgposition="center top"
             data-bgrepeat="no-repeat"
             data-no-retina=""
             src="{!! Theme::url("images/revslider/slider-02.jpg") !!}">
        <div id="slide-5-layer-1"
             class="tp-caption darnalargetext tp-resizeme"
             data-height="auto"
             data-hoffset="0"
             data-responsive_offset="on"
             data-splitin="none"
             data-splitout="none"
             data-start="500"
             data-transform_idle=""
             data-transform_in="x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;s:1000;e:easeOutBounce;"
             data-transform_out="x:left;skX:45px;s:300;s:300;"
             data-width="auto"
             data-x="center"
             data-y="200"
             style="z-index: 5; white-space: nowrap; border-color: rgba(255, 255, 255, 1.00);">
            <span class="darna-slider-border-bottom">Engineering your dreams with us</span>
        </div>
        <div id="slide-5-layer-2"
             class="tp-caption darnasmalltext tp-resizeme"
             data-height="auto"
             data-hoffset="0"
             data-responsive_offset="on"
             data-splitin="none"
             data-splitout="none"
             data-start="1000"
             data-transform_idle=""
             data-transform_in="x:50;y:150;z:0;rX:0;rY:0;rZ:0;sX:0.5;sY:0.5;skX:0;skY:0;opacity:0;s:1000;e:easeInOutBack;"
             data-transform_out="x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;s:500;s:500;"
             data-width="auto"
             data-x="center"
             data-y="300"
             style="z-index: 6; white-space: nowrap; border-color: rgba(255, 255, 255, 1.00);">Creating a sustainable future through building preservation
            <br/> green architecture, and smart design
        </div>
        <div id="slide-5-layer-3"
             class="tp-caption tp-resizeme"
             data-height="auto"
             data-hoffset="0"
             data-responsive_offset="on"
             data-splitin="none"
             data-splitout="none"
             data-start="2000"
             data-transform_idle=""
             data-transform_in="x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0;sY:0;skX:0;skY:0;opacity:0;s:1000;e:easeOutBounce;"
             data-transform_out="x:200px;skX:-85px;opacity:0;s:300;s:300;"
             data-width="auto"
             data-x="center"
             data-y="382"
             style="z-index: 7; white-space: nowrap;">
            <a class="darna-button style1 size-md" href="#" style="margin-right: 10px;">Our History</a>
            <a class="darna-button style2 size-md" href="#">View Projects</a>
        </div>
    </li>
    <li data-description=""
        data-easein="default"
        data-easeout="default"
        data-index="rs-6"
        data-masterspeed="300"
        data-rotate="0"
        data-saveperformance="off"
        data-slotamount="7"
        data-thumb="{!! Theme::url("images/revslider/slider-03-100x50.jpg") !!}"
        data-title="Slide 3"
        data-transition="random">
        <img alt=""
             class="rev-slidebg"
             data-bgfit="cover"
             data-bgposition="center top"
             data-bgrepeat="no-repeat"
             data-no-retina=""
             src="{!! Theme::url("images/revslider/slider-03.jpg") !!}">
        <div id="slide-6-layer-1"
             class="tp-caption darnalargetext tp-resizeme"
             data-height="auto"
             data-hoffset="0"
             data-responsive_offset="on"
             data-splitin="none"
             data-splitout="none"
             data-start="500"
             data-transform_idle=""
             data-transform_in="y:top;s:1000;e:easeOutElastic;"
             data-transform_out="x:50;y:150;z:0;rX:0;rY:0;rZ:0;sX:0.5;sY:0.5;skX:0;skY:0;opacity:0;s:300;s:300;"
             data-width="auto"
             data-x="center"
             data-y="185"
             style="z-index: 5; white-space: nowrap; border-color: rgba(255, 255, 255, 1.00);"> welcome to darna construction
        </div>
        <div id="slide-6-layer-2"
             class="tp-caption darnalargeprimarybg tp-resizeme"
             data-elementdelay="0.1"
             data-height="auto"
             data-hoffset="0"
             data-responsive_offset="on"
             data-splitin="chars"
             data-splitout="none"
             data-start="500"
             data-transform_idle=""
             data-transform_in="x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0;sY:0;skX:0;skY:0;opacity:0;s:1000;e:easeInOutBack;"
             data-transform_out="x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;s:300;s:300;"
             data-width="auto"
             data-x="center"
             data-y="250"
             style="z-index: 6; white-space: nowrap; color: rgba(255, 255, 255, 1.00); background-color: rgba(255, 182, 0, 100.00); padding: 15px 20px 15px 20px; border-color: rgba(255, 255, 255, 1.00);"> ALWAYS DEDICATED &amp; DEVOTED
        </div>
        <div id="slide-6-layer-3"
             class="tp-caption darnasmalltext2 tp-resizeme"
             data-height="auto"
             data-hoffset="0"
             data-responsive_offset="on"
             data-splitin="none"
             data-splitout="none"
             data-start="1000"
             data-transform_idle=""
             data-transform_in="x:50;y:150;z:0;rX:0;rY:0;rZ:0;sX:0.5;sY:0.5;skX:0;skY:0;opacity:0;s:1000;e:Elastic.easeOut;"
             data-transform_out="x:{-250,250};y:{-150,150};rX:{-90,90};rY:{-90,90};rZ:{-360,360};sX:0;sY:0;opacity:0;s:300;s:300;"
             data-width="auto"
             data-x="center"
             data-y="343"
             style="z-index: 7; white-space: nowrap; border-color: rgba(255, 255, 255, 1.00);"> We aim to eliminate the task of dividing your project between different architecture and
            <br/> construction company. We are a company that offers design and build services for
            <br/> you from initial sketches to the final construction.
        </div>
        <div id="slide-6-layer-4"
             class="tp-caption tp-resizeme"
             data-height="auto"
             data-hoffset="0"
             data-responsive_offset="on"
             data-splitin="none"
             data-splitout="none"
             data-start="2000"
             data-transform_idle=""
             data-transform_in="opacity:0;s:300;e:Power3.easeInOut;"
             data-transform_out="auto:auto;s:300;"
             data-width="auto"
             data-x="center"
             data-y="430"
             style="z-index: 8; white-space: nowrap;">
            <a class="darna-button style1 size-md" href="#" style="margin-right: 10px;">Our History</a>
            <a class="darna-button style2 size-md" href="#">View Projects</a>
        </div>
    </li>
@endsection

@push('js_inline')
<script>
    var tpj = jQuery;
    var revapi204;
    tpj(document).ready(function () {
        if (tpj("#rev_slider_204_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_204_1");
        }
        else {
            revapi204 = tpj("#rev_slider_204_1").show().revolution({
                sliderType: "standard"
                , jsFileLocation: "themes/saygilid/vendor/revolution/js/"
                , sliderLayout: "fullwidth"
                , dottedOverlay: "none"
                , delay: 9000
                , navigation: {
                    keyboardNavigation: "off"
                    , keyboard_direction: "horizontal"
                    , mouseScrollNavigation: "off"
                    , onHoverStop: "off"
                    , touch: {
                        touchenabled: "on"
                        , swipe_threshold: 75
                        , swipe_min_touches: 1
                        , swipe_direction: "horizontal"
                        , drag_block_vertical: false
                    }
                    , arrows: {
                        style: "persephone"
                        , enable: true
                        , hide_onmobile: true
                        , hide_under: 0
                        , hide_onleave: false
                        , tmp: ''
                        , left: {
                            h_align: "left"
                            , v_align: "center"
                            , h_offset: 20
                            , v_offset: 0
                        }
                        , right: {
                            h_align: "right"
                            , v_align: "center"
                            , h_offset: 20
                            , v_offset: 0
                        }
                    }
                    , bullets: {
                        enable: false
                        , hide_onmobile: true
                        , hide_under: 600
                        , style: "metis"
                        , hide_onleave: true
                        , hide_delay: 200
                        , hide_delay_mobile: 1200
                        , direction: "horizontal"
                        , h_align: "center"
                        , v_align: "bottom"
                        , h_offset: 0
                        , v_offset: 30
                        , space: 5
                        , tmp: '<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title">@{{title}}</span>'
                    }
                }
                , viewPort: {
                    enable: true
                    , outof: "pause"
                    , visible_area: "80%"
                }
                , responsiveLevels: [1240, 1024, 778, 480]
                , visibilityLevels: [1240, 1024, 778, 480]
                , gridwidth: [1240, 1024, 778, 480]
                , gridheight: [550, 500, 450, 400]
                , lazyType: "none"
                , parallax: {
                    type: "mouse"
                    , origo: "slidercenter"
                    , speed: 2000
                    , levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50, 46, 47, 48, 49, 50, 55]
                    , type: "mouse"
                    ,
                }
                , shadow: 0
                , spinner: "off"
                , stopLoop: "off"
                , stopAfterLoops: -1
                , stopAtSlide: -1
                , shuffle: "off"
                , autoHeight: "off"
                , hideThumbsOnMobile: "on"
                , hideSliderAtLimit: 0
                , hideCaptionAtLimit: 0
                , hideAllCaptionAtLilmit: 0
                , debugMode: false
                , fallbacks: {
                    simplifyAll: "off"
                    , nextSlideOnWindowFocus: "off"
                    , disableFocusListener: false
                    ,
                }
            });
        }
    });
</script>
@endpush

@endif