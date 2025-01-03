<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.6.0/fonts/remixicon.min.css">
    @vite('resources/css/estilo.css')

    <title>Bienvenido</title>
</head>
<body>
    <header class="header" id="header">
        <nav class="nav container">
            <a href="" class="nav__logo">
                <i class="ri-ancient-gate-line"></i>
                <span>Eventos</span>
            </a>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li>
                        <a href="#" class="nav__link">Home</a>
                    </li>
                    <li>
                        <a href="#" class="nav__link">Servicios</a>
                    </li>
                    <li>
                        <a href="#" class="nav__link">Galeria</a>
                    </li>
                    <li>
                        <a href="#" class="nav__link">Contacto</a>
                    </li>
                </ul>
                <div class="nav__close" id="nav-close">
                    <i class="ri-close-large-line"></i>
                </div>
            </div>
            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-apps-line"></i>
            </div>
        </nav>
    </header>
    <main class="main">
        <section class="home">
            <img src="{{ asset('assets/img/img-bg.svg') }}" alt="img" class="home__bg">
            <div class="home__container container">
                <div class="home__data">
                    <h1 class="home__title">Bienvenido a<br> Eventos</h1>
                    <p class="home__description">
                    Organiza tus eventos en un espacio lleno de paz y armonía, 
                    ideal para bodas, reuniones y celebraciones especiales. 
                    ¡Haz de tu ocasión un momento inolvidable!
                    </p>
                    <a href="#" class="home__button">Reserva Ahora</a>
                    <img src="{{ asset('assets/img/lantern-1.svg') }}" alt="" class="home__lantern-1">
                    <img src="{{ asset('assets/img/lantern-2.svg') }}" alt="" class="home__lantern-2">
                </div>
                <div class="home__images">
                    <img src="{{ asset('assets/img/img-1.svg') }}" alt="" class="home__img-1">
                    <img src="{{ asset('assets/img/img-2.svg') }}" alt="" class="home__img-2">
                    <img src="{{ asset('assets/img/img-3.svg') }}" alt="" class="home__img-3">
                    <img src="{{ asset('assets/img/img-4.svg') }}" alt="" class="home__img-4">
                    <img src="{{ asset('assets/img/img-5.svg') }}" alt="" class="home__img-5">
                    <img src="{{ asset('assets/img/img-6.svg') }}" alt="" class="home__img-6">
                </div>
            </div>
        </section>
    </main>
    @vite('resources/js/main.js')
</body>
</html>