<ul class="dropdown-menu">
    @foreach(LaravelLocalization::getSupportedLocales() as $locale => $supportedLocale)
        <li @if($locale==LaravelLocalization::getCurrentLocale()) class="active" @endif>
            <a rel="alternate" lang="{!! $locale !!}" href="{{ url($locale) }}"><span class="flag-icon flag-icon-{{ $locale == "en" ? "gb" : $locale }}"></span> {!! $supportedLocale['native'] !!}</a>
        </li>
    @endforeach
</ul>