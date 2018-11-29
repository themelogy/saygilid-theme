@if($news = News::latest(10))
    @if(count($news)>0)
        <div class="home-blog p-top-bot-10 m-bot-10">
            <div class="container">
                <div class="content-head text-center text-uppercase">
                    <h4>{!! trans('themes::news.title') !!}</h4>
                </div>
                <div class="row">
                    <div id="home-posts" class="owl-carousel owl-theme">
                        @foreach($news as $post)
                            <div class="item">
                                <div class="blog-post">
                                    @if($file = $post->present()->firstimage(360, 215, 'fit', 80))
                                        <div class="blog-thumb">
                                            <a class="prettyPhoto" data-rel="prettyPhoto" href="{{ $file }}">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                            <img alt="{{ $post->title }}" class="img-responsive" src="{{ $file }}"/>
                                        </div>
                                    @endif
                                    <div class="blog-excerpt">
                                        <h3 class="text-uppercase"><a href="{{ $post->url }}">{{ $post->title }}</a></h3>
                                        <div class="blog-meta text-uppercase">
                                            <i class="fa fa-calendar"></i>
                                            <span>{{ $post->created_at->formatLocalized('d F Y') }}</span>
                                            <i class="fa fa-user"></i>
                                            <span><a href="#">{{ $post->author->fullname }}</a></span>
                                        </div>
                                        <p> {!! \Str::words(strip_tags($post->intro), 10) !!}
                                            <a class="btn btn-black btn-xs" href="{{ $post->url }}">{{ trans('global.buttons.read more') }}</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif
@endif