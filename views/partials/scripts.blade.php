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

<script src="{{ elixir('vendor/revolution/js/revolution.all.min.js', 'themes/saygilid') }}"></script>

{!! Theme::style("vendor/revolution/css/navigation.css") !!}
{!! Theme::style("vendor/revolution/css/settings.css") !!}

@stack('styles')
@stack('scripts')

{!! Theme::script("js/main.js") !!}

@stack('css_inline')
@stack('js_inline')

<script>
    jQuery(window).on('load', function(){
        jQuery('body').show();
    });
</script>

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