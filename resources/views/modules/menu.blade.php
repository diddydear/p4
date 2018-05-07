<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <a class="navbar-brand" href="#"><img src="images/mony.png" id='logo' alt='Currency Exchanger Logo'></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03"
            aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample03">
    <ul class="navbar-nav mr-auto">
        @foreach (config('app.menu') as $menu => $item)
            <li class="nav-item">
                <a href='{{ $menu }}' class='nav-link {{ Request::is(substr($menu, 1)) ? 'active' : '' }}'>{{ $item }}</a>
            </li>
        @endforeach
    </ul>
</nav>