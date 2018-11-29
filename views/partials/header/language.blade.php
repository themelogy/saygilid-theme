<ul class="dropdown-menu">
    @foreach(LaravelLocalization::getSupportedLocales() as $locale => $supportedLocale)
        <li @if($locale==LaravelLocalization::getCurrentLocale()) class="active" @endif>
            @php
                switch (Request::route()->getName()) {
                    case 'page':
                    $url = $page->present()->url($locale);
                    break;
                    case 'news.slug':
                    case 'blog.slug':
                    $url = $post->present()->url($locale);
                    break;
                    case 'news.category':
                    case 'blog.category':
                    $url = $category->present()->url($locale);
                    break;
                    case 'store.product.slug':
                    $url = $product->present()->url($locale);
                    break;
                    case 'store.category.slug':
                    $url = $category->present()->url($locale);
                    break;
                    default:
                    $url = null;
                    break;
                }
                $localizedUrl = LaravelLocalization::getLocalizedURL($locale, $url);
            @endphp

            <a lang="{!! $locale !!}" href="{{ $localizedUrl }}"><span class="flag-icon flag-icon-{{ $locale == "en" ? "us" : $locale }}"></span> {!! $supportedLocale['native'] !!}</a>
        </li>
    @endforeach
</ul>