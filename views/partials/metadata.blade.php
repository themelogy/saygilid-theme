<meta charset="utf-8" />
{!! seo_helper()->render() !!}

<meta content="width=device-width, initial-scale=1.0" name="viewport">
<link href="{!! Theme::url('images/favicon.ico') !!}" rel="shortcut icon">

{!! Theme::style("css/font-awesome/css/font-awesome.css", ['media'=>'screen']) !!}
<link href="{{ elixir('css/all.min.css', 'themes/saygilid') }}" rel="stylesheet" type="text/css"/>
{!! Theme::style('css/style.min.css') !!}
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