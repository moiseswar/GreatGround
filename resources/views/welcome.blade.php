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
            <img src="{!! asset('images/favicon120.png') !!}" alt="GreatGround" style="width: 60px; height: 60px; margin-left: 5px;" />
            <a id="logo-container" href="#" class="brand-logo blue-text">GreatGround</a>
            <ul class="right hide-on-med-and-down">
                <li><a href="#" class="blue-text">Inicio</a></li>
                <li><a href="#" class="blue-text">Proyectos</a></li>
                <li><a href="#" class="blue-text">¿Quiénes somos?</a></li>
                <li><a href="{{ route('register') }}" class="blue-text">Registrarse</a></li>
                <li><a href="{{ route('login') }}" class="blue-text">Iniciar Sesión</a></li>
            </ul>

            <ul id="nav-mobile" class="sidenav">
                <li><a href="#" class="black-text">Inicio</a></li>
                <li><a href="#" class="black-text">Proyectos</a></li>
                <li><a href="#" class="black-text">¿Quiénes somos?</a></li>
                <li><a href="{{ route('register') }}" class="black-text">Registrarse</a></li>
                <li><a href="{{ route('login') }}" class="black-text">Iniciar Sesión</a></li>
            </ul>
            <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i
                    class="material-icons black-text">menu</i></a>
        </div>
    </nav>

    <div id="index-banner" class="parallax-container">
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
                        <h2 class="center green-text"><i class="medium material-icons">flash_on</i></h2>
                        <h5 class="center">Lorem Ipsum</h5>

                        <p class="light" style="text-align: justify;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                            unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center green-text"><i class="medium material-icons">group</i></h2>
                        <h5 class="center">Lorem Ipsum</h5>

                        <p class="light" style="text-align: justify;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                            unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center green-text"><i class="medium material-icons">settings</i></h2>
                        <h5 class="center">Lorem Ipsum</h5>

                        <p class="light" style="text-align: justify;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                            unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">
                    <h5 class="header col s12 white-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </h5>
                </div>
            </div>
        </div>
        <div class="parallax"><img src="{!! asset('images/background/2.jpg') !!}"></div>
    </div>

    <div class="container">
        <div class="section">

            <div class="row">
                <div class="col s12 center">
                    <h3><i class="mdi-content-send brown-text"></i></h3>
                    <h4>Lorem Ipsum</h4>
                    <p class="left-align light" style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam
                        scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna
                        fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra
                        ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam
                        eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi
                        massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non
                        tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
                        Curae;</p>
                </div>
            </div>

        </div>
    </div>


    <div class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">
                    <h5 class="header col s12 white-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </h5>
                </div>
            </div>
        </div>
        <div class="parallax"><img src="{!! asset('images/background/3.jpg') !!}"></div>
    </div>

    <footer class="page-footer green">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Integrantes</h5>
                    <ul>
                        <li><a class="white-text">Cristian Martínez</a></li>
                        <li><a class="white-text">Jonathan Salinas</a></li>
                        <li><a class="white-text">Óscar Ramíres</a></li>
                        <li><a class="white-text">Josué Aragón</a></li>
                    </ul>
                </div>
                <div class="col l3 s12">
                    <h5 class="white-text">GitHub</h5>
                    <ul>
                        <li><a class="white-text" href="#!">Link 1</a></li>
                        <li><a class="white-text" href="#!">Link 2</a></li>
                        <li><a class="white-text" href="#!">Link 3</a></li>
                        <li><a class="white-text" href="#!">Link 4</a></li>
                    </ul>
                </div>
                <div class="col l3 s12">
                    <h5 class="white-text">Redes Sociales</h5>
                    <ul>
                        <li><a class="white-text" href="#!">Link 1</a></li>
                        <li><a class="white-text" href="#!">Link 2</a></li>
                        <li><a class="white-text" href="#!">Link 3</a></li>
                        <li><a class="white-text" href="#!">Link 4</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container center">
                Made by <a class="white-text" href="#">Yo mero JAJA</a>
            </div>
        </div>
    </footer>
</body>

</html>
