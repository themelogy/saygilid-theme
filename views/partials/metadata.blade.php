<meta charset="utf-8" />
{!! seo_helper()->render() !!}
<meta name="yandex-verification" content="193991868bf7134f" />

<meta content="width=device-width, initial-scale=1.0" name="viewport">
<link href="{!! Theme::url('images/favicon.ico') !!}" rel="shortcut icon">

{!! Theme::style("css/font-awesome/css/font-awesome.css", ['media'=>'screen']) !!}
<link href="{{ elixir('css/all.min.css', 'themes/saygilid') }}" rel="stylesheet" type="text/css"/>
@if(App::environment()=='production')
<link href="{{ elixir('css/style.min.css', 'themes/saygilid') }}" rel="stylesheet" type="text/css"/>
@else
{!! Theme::style('css/style.min.css') !!}
@endif
<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css" />


<!-- [if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

@push('js_inline')
<script>
    jQuery(function(){
        jQuery('.selectpicker').selectpicker();
    });
</script>
@endpush

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-98121507-10"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-98121507-10');
</script>

<!-- Global site tag (gtag.js) - Google Ads: 751136476 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-751136476"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());
	gtag('config', 'AW-751136476');
</script>
