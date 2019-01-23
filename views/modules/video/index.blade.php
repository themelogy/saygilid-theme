@extends('layouts.master')

@section('content')
    <div class="page-head overlay-wrap">
        <div class="overlay"></div>
        <div class="container text-uppercase">
            <h1>{{ trans('themes::video.title.video') }}</h1>
            {!! Breadcrumbs::renderIfExists('video.index') !!}
        </div>
    </div>
    <div class="home-profile">
        <div class="container">
            @foreach($medias->chunk(3) as $chunk)
                <div class="row">
                    @foreach($chunk as $media)
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="home-info-thumb">
                                <a href="{{ $media->url }}"> <img style="width: 100%;" alt="{{ $media->title }}" class="img-responsive" src="{{ $media->present()->firstImage(600,400,'fit',80) }}"><i class="fa fa-play-circle"></i></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
            {!! $medias->render('partials.pagination') !!}
        </div>
    </div>
@endsection
