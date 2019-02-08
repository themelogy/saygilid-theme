<header class="header-4">
    <div class="container">
        <div class="navbar-header">
            <button class=" burger-menu easy-sidebar-toggle"></button>
            <a class="navbar-brand" href="{{ url(locale()) }}"> <img alt="" src="{!! Theme::url("images/logo-dark.png") !!}"></a>
        </div>
        <nav class="navbar navbar-default">
            <div class="container">
                <div id="navbar" class="navbar-collapse ">
                    {!! Menu::render('header', \Themes\Saygilid\Presenter\HeaderMenuPresenter::class) !!}
                </div>
                <!--/.nav-collapse -->
            </div>
            <!--/.container-fluid -->
        </nav>

    </div>
</header>

@push('menu.parts')
<div id="search">
    <button class="close" type="button"><i aria-hidden="true" class="fa fa-times"></i>
    </button>
    {!! Form::open(['route'=>'store.product.search', 'method'=>'get']) !!}
        <input placeholder="Ara" type="search" value="" name="s" />
        <button class="btn btn-primary" type="submit"><i aria-hidden="true" class="fa fa-search"></i>
        </button>
    {!! Form::close() !!}
</div>

<a class="back-to-top" href="#"> <i aria-hidden="true" class="fa fa-chevron-up"></i>
</a>

<div class="overlay hided"></div>
@endpush