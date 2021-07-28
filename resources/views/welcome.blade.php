<!DOCTYPE html>
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
                        <a href="{{ route('register') }}" id="download-button"
                            class="btn-large waves-effect waves-light green">Registrate</a>
                    </div>
                    <br><br>

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
