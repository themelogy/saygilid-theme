<ul class="{{ $class ?? '' }}">
    {!! $slot !!}
    @foreach(
        [
            'email'     =>  'fa-envelope', 
            'facebook'  =>  'fa-facebook-f', 
            'twitter'   =>  'fa-twitter', 
            'google'    =>  'fa-google-plus-g', 
            'whatsapp'  =>  'fa-whatsapp', 
            'linkedin'  =>  'fa-linkedin', 
            'youtube'   =>  'fa-youtube-play', 
            'instagram' =>  'fa-instagram',
            'viber'     =>  'fa-phone',
            'telegramm' =>  'fa-paper-plane'
        ] as $sk => $sv)
        @if(!empty(setting('theme::'.$sk)))
            @php
                $skprefix = '';
                $value = '';
                switch ($sk) {
                    case 'email':
                        $skprefix = 'mailto:';
                        $value    = $skprefix.setting('theme::'.$sk);
                        break;
                    case 'whatsapp':
                        $skprefix = 'https://wa.me/';
                        $value    = $skprefix.intval(preg_replace('/[^0-9]+/', '', setting('theme::'.$sk)));
                        break;
                    case 'telegramm':
                        $skprefix = 'https://t.me/';
                        $value    = $skprefix.setting('theme::'.$sk);
                        break;
                    case 'viber':
                        $skprefix = 'viber://chat?number=';
                        $value    = $skprefix.'<+'.intval(preg_replace('/[^0-9]+/', '', setting('theme::'.$sk))).'>';
                        break;
                    default:
                        break;
                }
            @endphp
            @if(in_array($sk, ['whatsapp', 'telegramm', 'email', 'viber']) && locale() == 'ru')
                <li><a rel="nofollow" target="_blank" href="{{ $value }}"><i class="fa {{ $sv }}"></i></a></li>
            @elseif(locale() != 'ru')
                <li><a rel="nofollow" target="_blank" href="{{ $value }}"><i class="fa {{ $sv }}"></i></a></li>
            @endif
        @endif
    @endforeach
</ul>