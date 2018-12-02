@extends('layouts.master')


@section('content')
    <div id="parent-content" class="clearfix">
        <section class="blog-content-title-wrap page-head-blog">
            <div class="blog-content-title-overlay"></div>
            <div class="container">
                <div class="blog-content-title-inner block-center">
                    <div class="block-center-inner">
                        <h1>{{ $post->title }}</h1>
                        {!! Breadcrumbs::render('blog.show', $post) !!}
                    </div>
                </div>
            </div>
        </section>

        <main role="main" class="site-content-archive ">
            <div class="container clearfix">
                <div class="row clearfix">
                    @include('blog::partials.sidebar')
                    <div class="site-content-archive-inner col-md-9 site-content-archive-inner-side">
                        <div class="blog-wrap layout-container">
                            <div class="blog-inner clearfix">
                                    <article>
                                        <div class="entry-wrap clearfix">
                                            <div class="entry-thumbnail-wrap">
                                                <div class="entry-thumbnail">
                                                    <a class="entry-thumbnail_overlay" href="{{ $post->url }}" title="{{ $post->title }}">
                                                        <img alt="{{ $post->title }}" class="img-responsive" height="480" src="{{ $post->present()->firstImage(870,280,'fit',80) }}" width="870"/>
                                                    </a>
                                                    <a class="prettyPhoto" data-rel="prettyPhoto" href="{{ $post->present()->firstImage(870,480,'resize',80) }}">
                                                        <i class="fa fa-expand"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="entry-c-wrap">
                                                <div class="entry-c-top-wrap clearfix">
                                                    <div class="entry-p-format-icon">
                                                        <i class="fa fa-file-text-o"></i>
                                                    </div>
                                                    <div class="entry-c-top-right">
                                                        <h3 class="entry-title">
                                                            <a href="{{ $post->url }}" rel="bookmark" title="{{ $post->title }}">
                                                                {{ $post->title }}
                                                            </a>
                                                        </h3>
                                                        <div class="entry-p-meta-wrap">
                                                            <ul class="entry-m">
                                                                <li class="entry-m-author">
                                                                    <a href="{{ $post->url }}">
                                                                        <i class="fa fa-user"></i>
                                                                        {{ $post->author->fullname }}
                                                                    </a>
                                                                </li>
                                                                <li class="entry-m-date">
                                                                    <a href="{{ $post->url }}" rel="bookmark" title="{{ $post->title }}">
                                                                        <i class="fa fa-calendar"></i>
                                                                        {{ $post->created_at->formatLocalized('%d %B %Y') }}
                                                                    </a>
                                                                </li>
                                                                <li class="entry-m-category">
                                                                    <i class="fa fa-folder-open"></i>
                                                                    <a href="{{ $post->category->url }}" rel="category tag">
                                                                        {{ $post->category->name }}
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="entry-excerpt">
                                                    <p>{!! $post->content !!}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection