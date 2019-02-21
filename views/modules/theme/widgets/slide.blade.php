<div class="slider">
    <div id="rev_slider_204_1_wrapper" class="rev_slider fullwidthabanner revslider-initialised tp-simpleresponsive">
        <div id="rev_slider_204_1" class="rev_slider fullwidthabanner" data-version="5.1.1RC">
            <ul>
                @foreach($slides as $slide)
                    <li data-description=""
                        data-index="rs-{{ $loop->iteration }}"
                        data-masterspeed="1500"
                        data-rotate="0"
                        data-saveperformance="off"
                        data-slotamount="{{ $loop->iteration }}"
                        data-easein="Power4.easeInOut"
                        data-easeout="Power4.easeInOut"
                        data-title="{{ $slide->title ?? '' }}"
                        data-transition="slotfade-horizontal">
                        <img alt="{{ $slide->title ?? '' }}"
                             class="rev-slidebg"
                             data-bgfit="cover"
                             data-bgposition="center center"
                             data-bgrepeat="no-repeat"
                             data-no-retina=""
                             data-lazyload="{{ $slide->present()->firstImage(1280,550,'fit',70) }}">
                        @if(@$slide->title)
                            <div id="slide-{{ $loop->iteration }}-layer-1"
                                 class="tp-caption darnaverylargetextprimary tp-resizeme slide-title"
                                 data-height="auto"
                                 data-responsive_offset="on"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-start="500"
                                 data-transform_idle=""
                                 data-transform_in="x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0;sY:0;skX:0;skY:0;opacity:0;s:1000;e:easeInOutBack;"
                                 data-transform_out="x:left;skX:45px;s:500;s:500;"
                                 data-width="auto"
                                 data-x="0"
                                 data-y="-100"
                                 style="z-index: 5; white-space: nowrap; border-color: rgba(255, 255, 255, 1.00); color: {{ $slide->settings->title_color ?? '#ffffff' }}"> {{ $slide->title ?? '' }}
                            </div>
                        @endif
                        @if(@$slide->sub_title)
                            <div id="slide-{{ $loop->iteration }}-layer-2"
                                 class="tp-caption darnaverylargetext tp-resizeme slide-subtitle"
                                 data-height="auto"
                                 data-responsive_offset="on"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-start="1000"
                                 data-transform_idle=""
                                 data-transform_in="x:50;y:150;z:0;rX:0;rY:0;rZ:0;sX:0.5;sY:0.5;skX:0;skY:0;opacity:0;s:1000;e:Power3.easeInOut;"
                                 data-transform_out="x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;s:500;s:500;"
                                 data-width="auto"
                                 data-x="{{ @$slide->settings->title_position_x }}"
                                 data-y="{{ @$slide->settings->title_position_y+170 }}"
                                 style="z-index: 6; white-space: nowrap; border-color: rgba(255, 255, 255, 1.00); color: {{ $slide->settings->title_color ?? '#ffffff' }}"> {{ $slide->sub_title ?? '' }}
                            </div>
                        @endif
                        @if(@$slide->content)
                            <div id="slide-{{ $loop->iteration }}-layer-3"
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
                                 data-x="{{ @$slide->settings->content_position_x }}"
                                 data-y="{{ @$slide->settings->content_position_y+255 }}"
                                 style="z-index: 7; white-space: nowrap; border-color: rgba(255, 255, 255, 1.00); color: {{ $slide->settings->content_color ?? '#ffffff' }}"> {{ $slide->content ?? '' }}
                            </div>
                        @endif
                        @if(@$slide->link_type != 'none')
                            <div id="slide-{{ $loop->iteration }}-layer-4"
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
                                 data-x="{{ $slide->settings->link_position_x }}"
                                 data-y="{{ $slide->settings->link_position_y+300 }}"
                                 style="z-index: 8; white-space: nowrap;">
                                <a class="darna-button style1 size-md" href="{{ $slide->present()->link->url ?? null }}" style="margin-right: 10px;">
                                    {!! $slide->link_title ?? null !!}
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

@push('scripts')
    {!! Theme::script('vendor/revolution/js/revolution.all.min.js') !!}
    {!! Theme::style("vendor/revolution/css/navigation.css") !!}
    {!! Theme::style("vendor/revolution/css/settings.css") !!}
@endpush

@push('js_inline')
    <script>
        var tpj=jQuery;
        var revapi4;
        tpj(document).ready(function() {
            if(tpj("#rev_slider_204_1").revolution == undefined){
                revslider_showDoubleJqueryError("#rev_slider_204_1");
            }else{
            revapi4 = tpj("#rev_slider_204_1").show().revolution({
                sliderType: "standard",
                jsFileLocation:"vendor/revolution/js/"
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
                , responsiveLevels: [1240, 1024, 778, 480]
                , visibilityLevels: [1240, 1024, 778, 480]
                , gridwidth: [1240, 1024, 778, 480]
                , gridheight: [550, 500, 450, 400]
                , lazyType: "smart"
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
                , hideAllCaptionAtLilmit: 0,
                debugMode:false,
                fallbacks: {
                    simplifyAll:"off",
                    nextSlideOnWindowFocus:"off",
                    disableFocusListener:false,
                }
            });
            }
        });	/*ready*/
    </script>
@endpush