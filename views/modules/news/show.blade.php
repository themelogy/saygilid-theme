@extends('news::layouts.index')

@section('title')
{{ $post->title }}
@endsection

@section('breadcrumbs')
    {!! Breadcrumbs::renderIfExists('news.show', $post) !!}
@endsection


@section('blog.content')
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
                                            {{ $post->created_at->formatLocalized('d F Y') }}
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
@endsection