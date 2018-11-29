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
                            <div class="contact-form p-top-bot-0">
                                <div class="content-head text-center text-uppercase">
                                    <h4>{{ trans('themes::contact.form') }}</h4>
                                </div>
                                @include('contact::form')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@stop
