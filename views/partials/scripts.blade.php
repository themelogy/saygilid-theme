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


<!--Start of Zendesk Chat Script-->
<script type="text/javascript">
    window.$zopim||(function(d,s){var z=$zopim=function(c){
        z._.push(c)},$=z.s=
        d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
    _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
        $.src='https://v2.zopim.com/?6KRNFhOHU3Fpemdh14hRTZ5YUl1v8s1Z';z.t=+new Date;$.
            type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
</script>
<!--End of Zendesk Chat Script-->
