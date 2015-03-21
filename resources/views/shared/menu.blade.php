<div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">
        <img src="/img/logo.png" width="40" height="40" align="center"></img>
        <img src="/img/log.png"  width="125" height="20" align="center"></img>
        </a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li><a href="{{ url('/') }}">Начало</a></li>
            <li><a href="{{ url('poems') }}">Поезия</a></li>
            <li><a href="{{ url('stories') }}">Разкази</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">

            @if (Auth::guest())

                <li><a href="{{ url('/auth/login') }}">Вход</a></li>
                <li><a href="{{ url('/auth/register') }}">Регистрация</a></li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->first_name }} <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        @if(Auth::user()->role == 'administrator')
                            <li><a href="{{ url('/admin') }}">Панел</a></li>
                        @endif
                        <li><a href="{{ url('/auth/logout') }}">Изход</a></li>
                    </ul>
                </li>
            @endif
        </ul>
    </div>
</div>