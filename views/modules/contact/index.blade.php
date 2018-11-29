@extends('layouts.master')

@section('content')
    <div class="page-head overlay-wrap">
        <div class="overlay"></div>
        <div class="container text-uppercase">
            <h1>{{ trans('contact::contacts.title.contacts') }}</h1>
            {!! Breadcrumbs::render('contact') !!}
        </div>
    </div>
    <div class="contact-info">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="text-center"><i class="fa fa-road"></i>
                        <h3><a href="#">{{ trans('themes::contact.address') }}</a></h3>
                        <p>{!! setting('theme::address') !!}</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="text-center"><i class="fa fa-phone"></i>
                        <h3><a href="#">{{ trans('themes::contact.phone') }}</a></h3>
                        <p>
                            {!! setting('theme::phone') !!}<br/>
                            {!! setting('theme::phone2') !!}
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="text-center"><i class="fa fa-envelope"></i>
                        <h3><a href="#">{{ trans('themes::contact.email') }}</a></h3>
                        <p>{!! HTML::email(setting('theme::email')) !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="google-map">
        @gmap('300px', '16', 'images/marker.png')
    </div>
    <div class="contact-form">
        <div class="container">
            <div class="col-md-12">
                @include('contact::form')
            </div>
        </div>
    </div>
@stop