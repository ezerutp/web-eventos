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
            <a href="" class="nav__log">
                <i class="ri-ancient-gate-line"></i>
                <span>Temple</span>
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

        </section>
    </main>
    @vite('resources/js/main.js')
</body>
</html>