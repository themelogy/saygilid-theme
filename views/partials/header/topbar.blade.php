<div class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-md-8 tb-left hidden-xs">
                <ul class="list-inline text-uppercase">
                    <li><i class="fa fa-phone"></i> {{ setting('theme::phone') }}</li>
                    <li><i class="fa fa-envelope"></i>
                        <a style="text-transform:lowercase;" href="mailto:{!! setting('theme::email') !!}">
                            {!! setting('theme::email') !!}
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 tb-right">
                <div class="languages btn-group pull-right m-top-5" role="group" aria-label="languages">
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="flag-icon flag-icon-{{ LaravelLocalization::getCurrentLocale() == "en" ? "us" : LaravelLocalization::getCurrentLocale() }}"></span> {{ LaravelLocalization::getCurrentLocaleNativeReading() }}
                            <span class="caret"></span>
                        </button>
                        @include('partials.header.language')
                    </div>
                </div>
                @component('partials.components.socials', ['class'=>'top-social list-inline pull-right']) @endcomponent
            </div>
        </div>
    </div>
</div>