<x-app-layout>

    <head>
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
            function getLocation() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(showPosition);
                } else {
                    document.getElementById("demo").innerHTML = "Geolocalización no es soportada por el navegador.";
                }
            }

            function showPosition(position) {
                var coords = "Latitud: " + position.coords.latitude +
                    "<br>Longitud: " + position.coords.longitude;
                document.getElementById("demo").innerHTML = coords;

                fetch("https://community-open-weather-map.p.rapidapi.com/weather?lat=" + position.coords.latitude + "&lon=" +
                        position.coords
                        .longitude, {
                            "method": "GET",
                            "headers": {
                                "x-rapidapi-key": "9298d3cd02msh7fcd45510b07c8fp179100jsnbc34e1aec9c5",
                                "x-rapidapi-host": "community-open-weather-map.p.rapidapi.com"
                            }
                        })
                    .then(response => {
                        console.log(response);
                    })
                    .catch(err => {
                        console.error(err);
                    });
            }
        </script>
    </head>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="row">
                    <div class="col s12">
                        <p>Click para obtener las coordenadas.</p>
                        <button class="btn waves-effect waves-light" onclick="getLocation()">Submit
                            <i class="material-icons right">send</i>
                        </button>
                        <p id="demo"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
