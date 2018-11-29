@extends('layouts.master')

@section('content')
    <div class="page-head overlay-wrap">
        <div class="overlay"></div>
        <div class="container text-uppercase">
            <h1>{{ $page->title }}</h1>
            {!! Breadcrumbs::renderIfExists('page') !!}
        </div>
    </div>

    <main role="main" class="site-content-archive m-top-bot-30">
        <div class="container clearfix">
            <div class="row clearfix">
                <div class="sidebar right-sidebar col-md-3 hidden-sm hidden-xs">
                    <aside id="categories-4" class="widget widget_categories">
                        <ul>
                            @if($parent = $page->parent()->first())
                                @foreach($parent->children()->get() as $child)
                                    <li class="cat-item cat-item-19">
                                        <a href="{{ $child->url }}">{{ $child->title }}</a>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </aside>
                </div>
                <div class="site-content-archive-inner col-md-9 site-content-archive-inner-side">
                    <div class="blog-wrap layout-container">
                        <div class="blog-inner clearfix">
                            <div class="contact-info p-top-0">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection