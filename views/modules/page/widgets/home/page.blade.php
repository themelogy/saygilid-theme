<div class="home-process m-top-bot-0 p-top-bot-0">
    <div class="container">
        <div class="row row-height">
            @foreach($pages as $page)
            <div class="col-md-4 col-sm-6">
                <div class="process-box text-center bg-theme-color">
                    <i class="{{ $page->settings->icon ?? '' }}"></i>
                    <h2 class="text-uppercase">
                        <a href="{{ $page->url }}">{{ $page->settings->sub_title->{locale()} ?? $page->title }}</a>
                    </h2>
                    <span>{{ $page->settings->slogan->{locale()} ?? '' }}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>