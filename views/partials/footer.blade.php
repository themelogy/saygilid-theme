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
                    @if(locale()=="ru")
                    <a href="{{ url(locale()) }}"><img class="img-responsive" alt="" src="{!! Theme::url("images/logo-white-ru.png") !!}"></a>
                    @else
                    <a href="{{ url(locale()) }}"><img class="img-responsive" alt="" src="{!! Theme::url("images/logo-white.png") !!}"></a>
                    @endif
                    <div class="socials m-top-20">
                        @component('partials.components.socials', ['class'=>'list-inline']) @endcomponent
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
            @inject("menu", "\Modules\Menu\Services\MenuService")
            <div class="col-md-3 col-sm-6">
                <div class="footer-widget">
                    <h5>{{ $menu->title('kurumsal') }}</h5>
                    {!! Menu::render('kurumsal', \Themes\Saygilid\Presenter\FooterMenuLinksPresenter::class) !!}
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="footer-widget">
                    <h5>{{ $menu->title('kumlama') }}</h5>
                    {!! Menu::render('kum', \Themes\Saygilid\Presenter\FooterMenuLinksPresenter::class) !!}
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="row">
                <div class="col-md-8">
                    {!! Menu::render('footer', \Themes\Saygilid\Presenter\FooterMenuPresenter::class) !!}
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