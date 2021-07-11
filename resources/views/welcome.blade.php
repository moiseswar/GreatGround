<!DOCTYPE html>
<<<<<<< HEAD
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
=======
<html lang="en">
<html>

<head>
    <title> GreatGround </title>
    <!-- <link href="Login.css" rel="stylesheet" type="text/css"> -->
    <meta name="theme-color" content="#b1f264" />
    <!--Optimización para movil-->
    <meta name="MobileOptimized" content="width" />
    <meta name="HandheldFriendly" content="true" />
    <!--Meta etiquetas para iOS-->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <link rel="apple-touch-icon" href="img/favicon.png" />
    <link rel="apple-touch-startup-image" href="img/favicon.png" />
    <!--Meta etiquetas para iOS-->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="shortcut icon" type="image/png" href="{!! asset('images/favicon120.png') !!}" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            M.AutoInit();
        })
    </script>
</head>

<body>
    <nav class="white" role="navigation">
        <div class="nav-wrapper">
            <img src="{!! asset('images/favicon120.png') !!}" alt="GreatGround"
                style="width: 60px; height: 60px; margin-left: 5px;" />
            <a id="logo-container" href="#" class="brand-logo blue-text">GreatGround</a>
            <ul class="right hide-on-med-and-down">
                <li><a href="#inicio" class="blue-text">Inicio</a></li>
                <li><a href="#productos" class="blue-text">Productos</a></li>
                <li><a href="#contacto" class="blue-text">Contactanos</a></li>
                <li><a href="#historia" class="blue-text">¿Quiénes somos?</a></li>
                <li><a href="{{ route('register') }}" class="blue-text">Registrarse</a></li>
                <li><a href="{{ route('login') }}" class="blue-text">Iniciar Sesión</a></li>
            </ul>

            <ul id="nav-mobile" class="sidenav">
                <li><a href="#inicio" class="black-text">Inicio</a></li>
                <li><a href="#productos" class="black-text">Productos</a></li>
                <li><a href="#contacto" class="black-text">Contactanos</a></li>
                <li><a href="#historia" class="black-text">¿Quiénes somos?</a></li>
                <li><a href="{{ route('register') }}" class="black-text">Registrarse</a></li>
                <li><a href="{{ route('login') }}" class="black-text">Iniciar Sesión</a></li>
            </ul>
            <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i
                    class="material-icons black-text">menu</i></a>
        </div>
    </nav>

    <div id="index-banner" class="parallax-container">
        <a name="inicio">
            <div class="section no-pad-bot">
                <div class="container">
                    <br><br>
                    <h1 class="header center green-text">GreatGround</h1>
                    <div class="row center">
                        <h5 class="header col s12 white-text">Sembrando lo mejor de ti.
                        </h5>
                    </div>
                    <div class="row center">
                        <a href="{{ route('login') }}" id="download-button"
                            class="btn-large waves-effect waves-light green">Registrate</a>
                    </div>
                    <br><br>

>>>>>>> efcae86a6499ca392bb5429c385d5e193e2185cf
                </div>
            </div>
            <div class="parallax"><img src="{!! asset('images/background/1.jpg') !!}"></div>
    </div>


    <div class="container">
        <div class="section">

            <!--   Icon Section   -->

            <div class="row">
                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center green-text"><i class="medium material-icons">local_florist</i></h2>
                        <h5 class="center">¿Por que?</h5>

                        <p class="light" style="text-align: justify;">"Vemos una sequía que se ha venido extendiendo y
                            profundizando. Cada quincena, desde julio de 2020, ha ido aumentando el porcentaje de área
                            afectada. En muchas regiones ha pasado de sequía severa a sequía extrema o excepcional",
                            dice a BBC Mundo Jorge Zavala Hidalgo, coordinador del Servicio Meteorológico Nacional de
                            México (SMN).Actualmente, cerca del 87,5% del territorio mexicano sufre sequía de distintas
                            intensidades.</p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center green-text"><i class="medium material-icons">wb_sunny</i></h2>
                        <h5 class="center">¿Qué es la agrotecnología? </h5>

                        <p class="light" style="text-align: justify;">La agrotecnología es la tecnología aplicada a la
                            agricultura. Brinda los métodos y la maquinaria adecuada para optimizar la producción,
                            enfocándose en los procesos utilizados en el sector para eficientizar el uso de los recursos
                            y ayudar al agricultor en sus actividades</p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center green-text"><i class="medium material-icons">group</i></h2>
                        <h5 class="center">¿Que Pretendemos?</h5>

                        <p class="light" style="text-align: justify;">Great ground es una compañía de agrotecnologia
                            enfocada la mejora de la productividad agrícola en la zona de México. El fin es llevar
                            la mayor información así como consejos, métodos y conocimiento del medio ambiente
                            indispensable para el sector agrícola.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="parallax-container valign-wrapper">
        
            <div class="container">
                <a name="contacto">
                <div class="row center">
                    <div class="col s6">
                        <br><br><br><br>
                        <h5 class="header col s12 white-text">
                            Contactanos por:
                        </h5>
                        <div class="row">
                            <ul>
                                <a href="https://www.facebook.com/" class="white-text"><i
                                        class="material-icons">face</i> Facebook</a><br>
                                <br>
                                <a href="https://www.instagram.com/ " class="white-text"><i
                                        class="material-icons">add_a_photo</i> Instagram</a><br>
                                <br>
                                <a href="https://twitter.com/" class="white-text"><i
                                        class="material-icons">favorite_border</i> Twitter</a><br>
                                <p class="white-text"><i class="material-icons">local_phone</i> 4181448068</p>
                            </ul>
                        </div>
                    </div>
                    <div class="col s6">
                        <div class="row center">
                            <br><br>
                            <h5 class=" white-text ">
                                Visitanos en:
                            </h5>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6753.790979745966!2d-100.27681611266205!3d20.543302799199356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d3452b278e7259%3A0xeb40a967d716216c!2sUniversidad%20Polit%C3%A9cnica%20de%20Quer%C3%A9taro!5e0!3m2!1ses-419!2smx!4v1625767394163!5m2!1ses-419!2smx"
                                width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                        </div>
                    </div>
                </div>
            </div>

            <div class="parallax"><img src="{!! asset('images/background/2.jpg') !!}"></div>
    </div>

    <div class="container">
        <a name="productos">
            <div class="section">

                <!--   Icon Section   -->

                <div class="row center black-text">
                    <h4>Productos</h4>
                    <div class="col s6 ">
                        <div class="icon-block">

                            <h5 class="center">GreatGround Weather Control</h5>

                            <p class="light" style="text-align: justify;">¿Tus cultivos son poco productivos? GreatGround. 
                                Bajo un estricto sistema de prevención del clima así como consejos y cuidados
                                elegidos específicamente por profesionales del sector agrícola, puede ayudarte a mejorar
                                la calidad de tus productos así como tu calidad de vida.</p>
                        </div>
                    </div>

                    <div class="col s6 ">
                        <div class="icon-block">
                            <h5 class="center">GreatGround Seeds</h5>

                            <p class="light" style="text-align: justify;">¡Obtén las mejores semillas de todo México!
                                Great ground se especializa en dar siempre el mejor producto y nuestras semillas
                                cuidadosamente elegidas y cuidadas por ingenieros agrónomos calificados, son prueba de
                                ello. </p>
                        </div>
                    </div>
                </div>
            </div>
    </div>


    <div class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">
                    <h5 class="header col s12 white-text">El que siembra generosamente cosechara alabanzas
                    </h5>
                </div>
            </div>
        </div>
        <div class="parallax"><img src="{!! asset('images/background/3.jpg') !!}"></div>
    </div>
    <div class="container">
        <a name="historia">
        <div class="section">

            <div class="row black-text">
                <div class="col s12 center">
                    <h3><i class="mdi-content-send brown-text"></i></h3>
                    <h4>Un poco de Historia</h4>
                    <p class="left-align light" style="text-align: justify;">
                        Great ground llego gracias a la ambición de 5 jóvenes universitarios que al estar al tanto y
                        prácticamente vivir en carne propia lo que las sequias pueden provocar. Dadas las necesidades
                        reales que azotaban al pías decidieron poner manos a la obra, hoy great ground ayuda a las
                        familias agrícolas al mejoramiento de sus cultivos y mejor uso de los recursos que se esta en
                        sus manos.
                    </p>
                </div>
            </div>

        </div>
    </div>

    <footer class="page-footer green">
        <div class="container">
            <div class="row">
                <div class="col  s6">
                    <h5 class="white-text">Socios</h5>
                    <ul>
                        <li><a class="white-text">José Cristian Martínez Lázaro</a></li>
                        <li><a class="white-text">Jonathan Salinas Martínez</a></li>
                        <li><a class="white-text">Luis Manuel Alvarez Garcia</a></li>
                        <li><a class="white-text">Silverio San Roman Gutierrez</a></li>
                        <li><a class="white-text">Nestor Moises Hernandez Jimenenez</a></li>
                        <li><a class="white-text">Óscar Ramirez Medina</a></li>
                        <li><a class="white-text"> Ivan Josué Aragon Hernandez</a></li>
                    </ul>
                </div>
                
                <div class="col  s6">
                    <h5 class="white-text">Redes Sociales</h5>
                    <ul>
                        <li>
                            <a href="https://www.facebook.com/" class="white-text"><i
                                    class="material-icons">face</i> Facebook</a>
                        </li>
                        
                        <li>
                            <a href="https://www.instagram.com/ " class="white-text"><i
                                    class="material-icons">add_a_photo</i> Instagram</a>
                        </li>
                        <li>
                            <a href="https://twitter.com/" class="white-text"><i
                                    class="material-icons">favorite_border</i> Twitter</a>
                        </li>
                        <li>
                            <i class="material-icons">local_phone</i> 4181448068
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container center">
                Made by <a class="white-text" href="#">&copy; GreatGround Company</a>
            </div>
        </div>
    </footer>
</body>

</html>
