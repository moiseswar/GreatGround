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
    <link rel="shortcut icon" type="image/png" href="{!! asset('') !!}" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style type="text/css">
        
        .section {
        margin: 20px 0 20px;
        }

        .section .cities {
        display: grid;
        grid-gap: 32px 20px;
        grid-template-columns: repeat(4, 1fr);
        }

        .section .city {
        position: relative;
        padding: 10px 10%;
        border-radius: 20px;
        background: RGB(243, 244, 246);
        color: #53627c;
        }

        .section .city::after {
        content: '';
        width: 90%;
        height: 50px;
        position: absolute;
        bottom: -12px;
        left: 5%;
        z-index: -1;
        opacity: 0.3;
        border-radius: 20px;
        background: #fff;
        }

        .section figcaption {
        margin-top: 10px;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        }

        .section .city-temp {
        font-size: 5rem;
        font-weight: bold;
        margin-top: 10px;
        color: #1e2432;
        }

        .section .city sup {
        font-size: 0.5em;
        }

        .dia {
        color: Black;
        padding-bottom: 20px;
        text-align: center;
        font-weight: bold;
        }

        .section .city-name sup {
        padding: 0.2em 0.6em;
        border-radius: 30px;
        color: #fff;
        background: #ff8c00;
        }

        .section .city-icon {
        margin-top: 10px;
        width: 100px;
        height: 100px;
        }
    </style>
    <script type="text/javascript">
        // document.getElementById("demo").innerHTML = "Geolocalización no es soportada por el navegador.";
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showClima);
        } else {
            document.getElementById("demo").innerHTML = "Geolocalización no es soportada por el navegador.";
        }

        function showClima(position) {
            fetch("https://community-open-weather-map.p.rapidapi.com/forecast/daily?lat=" + position.coords.latitude + "&lon=" +
                    position.coords.longitude + "&lang=sp&units=metric&mode=JSON&cnt=4&lang=es", {
                        "method": "GET",
                        "headers": {
                            "x-rapidapi-key": "9298d3cd02msh7fcd45510b07c8fp179100jsnbc34e1aec9c5",
                            "x-rapidapi-host": "community-open-weather-map.p.rapidapi.com",
                            "Content-Type": "application/json"
                        }
                    })
                .then(response => response.json())
                .then(data => {
                    console.log(position.coords.latitude, position.coords.longitude);
                    const card = document.querySelector(".section .cities");
                    const {city, list } = data;
                    const dias = {0: "Hoy", 1: "Mañana", 2: "Día siguiente", 3: "Día siguiente"};
                    for (var i = 0; i < list.length; i++) {
                        const icon = `https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/${list[i].weather[0]["icon"]}.svg`;
                        const li = document.createElement("li");
                        li.classList.add("city");
                        const markup = `
                                        <h2 class="dia">${dias[i]}</h2>
                                        <h2 class="city-name" data-name="${city.name},${city.country}">
                                        <span>${city.name}</span>
                                        <sup>${city.country}</sup>
                                        </h2>
                                        <div class="city-temp">${Math.round(list[i].temp.day)}<sup>°C</sup></div>
                                        <figure>
                                        <img class="city-icon" src="${icon}" alt="${list[i].weather[0]["description"]}">
                                        <figcaption>${list[i].weather[0]["description"]}</figcaption>
                                        </figure>
                                    `;
                        li.innerHTML = markup;
                        card.appendChild(li);
                    }
                })
                .catch(err => {
                    console.error(err);
                });
        }
    </script>
</head>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clima') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="row">
                    <div class="col s12 s6">
                        <p id="demo"></p>
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Estes es el cima de hoy y los próximos días</h2>
                        <section class="section">
                            <div class="container">
                                <ul class="cities"></ul>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
