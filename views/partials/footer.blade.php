<footer class="overlay-wrap">
    <div class="overlay"></div>
    <div class="container">
        <!--
        <div class="row">
            <div class="col-md-6 col-md-push-3 text-center">
                <div class="footer-logo ">
                    <a href="{{ url(locale()) }}"> <img alt="" src="{!! Theme::url("images/logo-white.png") !!}"></a>
                </div>
            </div>
        </div>
        -->
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="footer-logo ">
                    <a href="{{ url(locale()) }}"><img class="img-responsive" alt="" src="{!! Theme::url("images/logo-white.png") !!}"></a>
                    <div class="socials m-top-20">
                        <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-google"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="footer-widget">
                    <!--<h5>{{ trans('themes::contact.contact us') }}</h5>-->
                    <ul class="footer-contact m-lft-10">
                        <li><i class="fa fa-map-marker"></i><span>{!! setting('theme::address') !!}</span></li>
                        <li><i class="fa fa-envelope-o"></i><span>{!! HTML::email(setting('theme::email')) !!}</span></li>
                        <li><i class="fa fa-phone"></i><span>{!! setting('theme::phone') !!} <br/> {!! setting('theme::phone2') !!}</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="footer-widget">
                    <h5>Tanıtım</h5>
                    <ul class="footer-links">
                        <li><a href="#">Kumlama Makinası</a></li>
                        <li><a href="#">Basında Biz</a></li>
                        <li><a href="#">Videolar</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="footer-widget">
                    <h5>{{ trans('themes::theme.newsletters') }}</h5>
                    <div class="footer-newsletter">
                        <p>{{ trans('themes::theme.newsletters title') }}</p>
                        <form>
                            <input placeholder="E-Posta Adresi" required="" type="email">
                            <button type="submit"><i class="fa fa-paper-plane">
                                </i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="row">
                <div class="col-md-8">
                    {!! Menu::render('footer', Modules\Theme\Presenters\Saygilid\FooterMenuPresenter::class) !!}
                </div>
                <div class="col-md-4">
                    <p class="pull-right text-uppercase">
                        {{ trans('themes::theme.copyrights') }} &copy; {{ Carbon::now()->format('Y') }}
                        <a href="#">{{ setting('theme::company-name') }}</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>