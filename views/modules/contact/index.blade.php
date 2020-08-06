@extends('layouts.master')

@section('content')
    <div class="page-head overlay-wrap">
        <div class="overlay"></div>
        <div class="container text-uppercase">
            <h1>{{ trans('contact::contacts.title.contacts') }}</h1>
            {!! Breadcrumbs::render('contact') !!}
        </div>
    </div>
    <div class="contact-container">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="contact-desc">
                        @if(locale()=="ru")
                        <h3 class="title" title="{{ setting('theme::company-name') }}"><img src="{{ Theme::url('images/logo-dark-ru.png') }}" alt="{{ setting('theme::company-name') }}" /></h3>
                        @else
                        <h3 class="title" title="{{ setting('theme::company-name') }}"><img src="{{ Theme::url('images/logo-dark.png') }}" alt="{{ setting('theme::company-name') }}" /></h3>
                        @endif
                        <ul class="no-margin">
                            <li>
                                <div class="icon-box"><i class="fa fa-map-marker"></i></div>
                                <div class="icon-content">{!! setting('theme::address') !!}</div>
                            </li>
                            <li>
                                <div class="icon-box"><i class="fa fa-phone"></i></div>
                                <div class="icon-content">
                                    <a rel="nofollow" href="tel:{!! setting('theme::phone') !!}">{!! setting('theme::phone') !!}</a><br/>
                                    <a rel="nofollow" href="tel:{!! setting('theme::phone2') !!}">{!! setting('theme::phone') !!}</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon-box"><i class="fa fa-envelope"></i></div>
                                <div class="icon-content" style="padding-top: 5px;">
                                    <a rel="nofollow" href="mailto:{!! setting('theme::email') !!}">{!! setting('theme::email') !!}</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon-box"><i class="fa fa-location-arrow"></i></div>
                                <div class="icon-content">
                                    <a target="_blank" href="https://www.google.com/maps/dir/Current+Location/{{ setting('contact::contact-map-lat') }},{{ setting('contact::contact-map-lng') }}" class="btn btn-default">{{ trans('themes::contact.buttons.navigation') }}</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-7">
                    @include('contact::form')
                </div>
            </div>
        </div>
    </div>
    @includeIf('contact::map')
@stop