{!! Theme::script("js/jquery.js") !!}
<!-- bootstrap -->
{!! Theme::script("js/bootstrap.min.js") !!}
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/js/bootstrap-select.min.js"></script>
<!-- owl-carousel -->
{!! Theme::script("js/owl.carousel.min.js") !!}

<!-- counterup -->
{!! Theme::script("js/waypoints.min.js") !!}
{!! Theme::script("js/vendors/jquery.counterup.min.js") !!}
<!-- isotope -->
{!! Theme::script("js/vendors/isotope/isotope.pkgd.js") !!}

<!-- cookie js -->
{!! Theme::script("js/jquery.cookie.js") !!}
<!-- pretty Photo -->
{!! Theme::script("js/pp/js/jquery.prettyPhoto.js") !!}

<!-- jquery-ui.min -->
{!! Theme::script("js/jquery-ui.min.js") !!}

{!! Asset::styles('footer') !!}
@stack('styles')
@stack('scripts')
{!! Asset::js('footer') !!}

{!! Theme::script("js/main.js") !!}

@stack('css_inline')
@stack('js_inline')

<script type="text/javascript">
    WebFontConfig = {
        google: {
            families: [
                'Lato::latin-ext', 'Roboto::latin-ext', 'Roboto+Condensed::latin-ext', 'Oswald::latin-ext'
            ]
        }
    };
    (function () {
        var wf = document.createElement('script');
        wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
    })(); </script>


<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="afb8ec37-6adb-4f44-b41a-8b35f46f0438";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>

<style>
    .crisp-client .crisp-1rjpbb7 .crisp-1rf4xdh .crisp-ewasyx, .crisp-client .crisp-1rjpbb7 .crisp-1rf4xdh .crisp-kquevr {
        bottom: 80px !important;
    }
</style>