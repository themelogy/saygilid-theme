{!! $page->body !!}
@if($page->files->count()>0)
    <div class="owl-carousel owl-theme owl-auto clearfix" data-items="4">
        @foreach($page->files as $file)
            <div class="item" style="padding: 0 10px;">
                <a data-fancybox="gallery" data-caption="{{ $page->title }} #{{ $loop->iteration }}" href="{{ Imagy::getImage($file->filename, 'pageImage', ['width'=>800, 'height'=>null, 'mode'=>'resize', 'quality'=>75]) }}"><img class="img-thumbnail" src="{{ Imagy::getImage($file->filename, 'pageImageThumb', ['width'=>null, 'height'=>300, 'mode'=>'resize', 'quality'=>75]) }}"/></a>
            </div>
        @endforeach
    </div>
@endif

@push('js_inline')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.6/jquery.fancybox.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.6/jquery.fancybox.min.js"></script>
@endpush