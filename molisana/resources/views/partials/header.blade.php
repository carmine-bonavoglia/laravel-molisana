<header>
    <div id="logo">
        <img src="{{asset('img/logo.png')}}" alt="Logo Molisana">
    </div>

    <div class="main-menu">
        <nav>
            <ul>
                <li><a class="{{(Request::route() -> getName() == 'pagina-principale') ? 'active' : ''}}" href="{{route('pagina-principale')}}">Home</a></li>
                <li><a class="{{(Request::route() -> getName() == 'pagina-prodotti') ? 'active' : ''}}" href="{{route('pagina-prodotti')}}">Prodotti</a></li>
                <li><a class="{{(Request::route() -> getName() == 'pagina-news') ? 'active' : ''}}" href="{{route('pagina-news')}}">News</a></li>
            </ul>
        </nav>
    </div>
</header>