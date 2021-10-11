<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link 
        rel="stylesheet" 
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" 
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" 
        crossorigin="anonymous"
    >
    <link rel="stylesheet" href="./assets/css/main.css">
</head>
<body>
    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light scrolling-navbar">
            <div class="container-fluid d-flex justify-content-around">
                <a class="navbar-brand" href="#">
                    <img src="./assets/img/logo.png" alt="logo" class="nav-logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav d-flex justify-content-center align-items-center">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                            INICIO
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                            GALERIA
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                            CONTACTO
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section class="intro d-flex justify-content-center align-items-center flex-column">
        <h1>VALÉRIE MAY</h1>
        <span>GFE BARCELONA COMPANION</span>
        <small>YOUR INKED SEDUCTRESS MUSE</small>
        <button class="btn btn-primary px-5 mt-3">Descúbreme</button>
    </section>
    <div class="d-flex flex-column flex-md-column-reverse">
        <section class="evento">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <div class="tarjeta_evento d-flex justify-content-center align-items-center flex-column">
                            <img src="./assets/img/02.webp" alt="">
                            <div class="tarjeta d-flex flex-column justify-content-center align-items-center">
                                <h4 class="titulo_evento">
                                    TOUR MADRID
                                </h4>
                                <span class="fecha_evento">
                                    20-24 de Octubre de 2021
                                </span>
                                <p class="email_evento">info: <a href="mailto:valerie_may@example.com">valerie_may@example.com</a></p>
                            </div>
                            <button class="btn_reserva btn btn-secondary">Reservas</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="presentacion">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-center py-5">PRESENTACIÓN</h2>
                        <p class="text-italic">
                        A veces, y solo a veces, tenemos la suerte de conocer a alguien que simplemente nos cautiva. 
                        No sabes muy bien porqué, pero sabes que quieres descubrir más y más de esa chica...
                        </p>
                        <p class="text-italic">
                        Es una mujer que, con mirarla, sabes que es capaz de ser dulce, cálida, sincera y tierna; 
                        y más tarde encontrarte que puede arrollarte y empujarte hacia su cama, y no querer salir 
                        nunca más de ella.
                        </p>
                        <p class="text-italic">
                        Tal vez esa persona lleve gafas, esté tatuada, te sonría a menudo y diga de sí misma 
                        que es una musa con <strong>una dualidad seductora</strong>, una ninfa que dura lo que quieras que dure, 
                        pero que es capaz de darte ese soplo de aire fresco y de erizar cada centímetro de tu piel...
                        </p>
                        <p class="text-italic mb-5 pb-5">
                        ...con tan solo besarte.
                        </p>
                        <p class="my-5 py-5">
                        Ofrezco la experiencia "girlfriend experience", porque me gusta la vida con suaves dosis de placer y con la intensidad que se despierta en los momentos previos al primer beso.
                        Si te has quedado con ganas de saber un poco más, continúa con mi galería, nuestra cita y con cada pincelada de mí que he dejado en el camino.
                        </p>
                        <p>
                        Un beso y hasta pronto
                        </p>
                        <p class="text-italic p-0 m-0 text-md-right">
                        “Somos un instante en este espacio temporal.
                        </p>
                        <p class="text-italic pb-5 mb-5 text-md-right">
                        ¿Lo compartimos?”
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <footer>
        <div class="container d-flex flex-row justify-content-around align-items-center d-md-block text-md-center">

            <a href="#">
                <i class="fab fa-linkedin px-3"></i>
            </a>
            <a href="#">
                <i class="fab fa-instagram-square px-3"></i>
            </a>
            <a href="#">
                <i class="fab fa-facebook-square px-3"></i>
            </a>

        </div>
    </footer>

    <script src="https://kit.fontawesome.com/1a78bd2af6.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>