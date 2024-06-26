<!-- HEADER -->
<header>

    <!-- LISTA -->
    <nav class="header">
        <div class="container d-flex justify-content-between gap-3">
        <ul class="d-flex justify-content-center gap-3">
            <li> <a class="white" href="{{ route("prodotti")}}">Prodotti</a></li>
            <li> <a class="white" href="{{ route("donna")}}">Donna </a></li>
            <li> <a class="white" href="{{ route("uomo")}}">Uomo </a></li>
        </ul>
        <!-- LISTA -->

        <!-- LOGO -->
        <div class="logo-boolean">
            <a class="white" href="{{ route("home")}}">
                <img src="{{ Vite::asset('resources/img/boolean-logo.png') }}" alt="Logo Boolando">
            </a>
        </div>
        <!-- LOGO -->

        <!-- ICONE -->
        <div class="">
            <ul class="d-flex justify-content-center gap-3">
                <li><a class="white" href=""><i class="fa-regular fa-user"></i></a>icona user</li>
                <li><a class="white" href=""><i class="fa-regular fa-heart"></i></a>cuore</li>
                <li><a class="white" href=""><i class="fa-solid fa-bag-shopping"></i></a>carrello</li>
            </ul>
        </div>
    </div>
    </nav>
</header>
<!-- /HEADER -->