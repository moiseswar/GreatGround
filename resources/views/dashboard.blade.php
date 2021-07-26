<x-app-layout>
    <x-slot name="header">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="continer">
                    <div class="row">
                        <div class="col">
                            <h2 class="m-auto text-center"> Bienvenido: </h2>
                            <h3 class="m-auto text-center">{{Auth::user()->name}}</h3>
                            <p class="text-center">
                                "Sembrando lo mejor de ti"
                            </p>
                            <br>
                            <br>
                            <br>
                            <h3 class="text-center">Videos de interes</h3>
                            <div class="row m-auto p-auto">
                                <div class="col m-auto "><iframe width="560" height="315"
                                        src="https://www.youtube.com/embed/p3OyzOArGt4" title="YouTube video player"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe></div>
                                <div class="col m-auto "><iframe width="560" height="315"
                                        src="https://www.youtube.com/embed/qOetKy_HRuo" title="YouTube video player"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe></div>
                            </div>
                            <br>
                            <div class="row m-auto">
                                <div class="col m-auto "><iframe width="560" height="315"
                                        src="https://www.youtube.com/embed/R3joQKqrboo" title="YouTube video player"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe></div>
                                <div class="col m-auto "><iframe width="560" height="315"
                                        src="https://www.youtube.com/embed/G0vkXIk0TF0" title="YouTube video player"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe></div>
                            </div>

                            <br>

                        </div>

                    </div>
                    <div class="row ">
                        <h3 class="text-center">Sitios de Interes</h3>
                        <br>
                        <div class="col text-center">
                            <a href="https://smn.conagua.gob.mx/es/"><img src="images/sitios/conagua.jpg" alt=""
                                    width="200" class="m-auto"></a>

                            <a href="https://smn.conagua.gob.mx/es/" class="m-auto">Conagua</a>
                        </div>
                        <div class="col text-center">
                            <a href="https://www.gob.mx/snics"><img src="images/sitios/snics.jpg" alt="" width="200"
                                    class="m-auto"></a>
                            <a href="https://www.gob.mx/snics" class="m-auto">SNICS</a>
                        </div>
                        <div class="col text-center">
                            <a href="https://www.campo.org.mx/"><img src="images/sitios/campo.jpg" alt="" width="200"
                                    class="m-auto"></a>
                            <a href="https://www.campo.org.mx/">Campo A.C</a>
                        </div>
                        <div class="col text-center">
                            <a href="http://anec.org.mx/"><img src="images/sitios/anec.png" alt="" width="200"
                                    class="m-auto"></a>
                            <a href="http://anec.org.mx/">ANEC</a>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row ">
                        <h3 class="text-center">Informacion de Interes</h3>
                        <div class="col ml-3">
                            <h5 class="text-center">Categorías de semillas y etiquetas de certificación</h5>
                            <p class="text-justify">La calificación de semillas se clasifica en función de la calidad:
                                genética, física,
                                fisiológica y fitosanitaria de la semilla; y de acuerdo a la categoría obtenida, se
                                otorgan las etiquetas de certificación correspondientes.</p>
                            <a
                                href="https://www.gob.mx/snics/articulos/categorias-de-semillas-y-etiquetas-de-certificacion">Leer
                                Completo</a>
                        </div>
                        <div class="col">
                            <h5 class="text-center">Programa Nacional de Semillas 2020-2024</h5>
                            <p class="text-justify">El Programa, plantea cuatro objetivos prioritarios, con los que se
                                busca superar los rezagos del sector semillero.</p>
                            <a
                                href="https://www.gob.mx/snics/articulos/instrumentos-para-implementar-el-programa-nacional-de-semillas-270593?idiom=es">Leer
                                completo</a>
                        </div>
                        <div class="col">
                            <h5 class="text-center">Sequías</h5>
                            <p>La sequía es un fenómeno engañoso. Al contrario que los desastres repentinos, evoluciona
                                a lo largo del tiempo y destruye gradualmente la región afectada. En los casos agudos,
                                la sequía puede durar muchos años y causar efectos devastadores en la agricultura y las
                                reservas de agua.</p>
                            <a href="https://www.ifrc.org/es/introduccion/disaster-management/sobre-desastres/definicion--de-peligro/sequias/">Leer Completo</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>