<x-app-layout>
    <x-slot name="header">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tus Cultivos') }}
        </h2>
    </x-slot>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>

    @if(session()->has('exito'))
    {!! "<script>
       Swal.fire(
           'Agregado',
           'Cultivo Agregado',
           'success'
       )
    </script>"!!}
   @endif
   @if(session()->has('finalizado'))
    {!! "<script>
       Swal.fire(
           'Finalizado',
           'Cultivo Finalizado',
           'success'
       )
    </script>"!!}
   @endif
   @if(session()->has('hecho'))
    {!! "<script>
       Swal.fire(
           'Hecho',
           'Hecho Agregado',
           'success'
       )
    </script>"!!}
   @endif
   @if(session()->has('eliminado'))
    {!! "<script>
       Swal.fire(
           'Eliminado',
           'Cultivo Eliminada',
           'success'
       )
    </script>"!!}
   @endif
   @if(session()->has('success'))
    {!! "<script>
       Swal.fire(
           'Informacion Modificada',
           'Modificado',
           'success'
       )
    </script>"!!}
   @endif
   @if($errors->any())
         {!! "<script>Swal.fire(
           'Atencion',
           'Rellena todos los campos correctamente',
           'info'
         )</script>"!!}
         @endif
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="continer">
                    <div class="row">
                        
                        <div class="col-6">
                            <div class="row m-auto">
                                <h3 class="">Estado de cultivos</h3>
                                <div class="col">
                                    <button disabled class="btn" style="background-color: rgb(248, 232, 114);">En proceso</button>
                                </div>
                                <div class="col">
                                    <button disabled="disabled" class="btn" style="background-color: rgb(121, 248, 114);">Exitoso</button>
                                </div>
                                <div class="col">
                                    <button disabled="disabled" class="btn" style="background-color: rgb(242, 91, 91);">Perdido</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="row m-auto">
                                <h3 class="">Funcionalidad</h3>
                                <div class="col">
                                    <label class="form-label">Finalizado Correctamente</label>
                                    <button disabled class="btn btn-warning m-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                            class="bi bi-check-lg" viewBox="0 0 16 16">
                                            <path
                                                d="M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="col">
                                    <label class="form-label">Finalizado Erroneamente</label>
                                    <button disabled class="btn btn-danger" data-toggle="modal" data-target="#modaledit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                            <path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z"/>
                                          </svg>
                                    </button>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <table id="cultivos" class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Tiempo en Meses</th>
                            <th scope="col">Hechos</th>
                            <th scope="col">Fecha de Siembra</th>
                            <th scope="col">Estado</th>
                          </tr>
                        </thead>
                        <tbody>

                            @foreach ($getdata as $cultivo)
                            <tr>
                                <th scope="row">{{$cultivo->id}}</th>
                                <td >{{$cultivo->nombre}}</td>
                                <td >{{$cultivo->cantidad}}</td>
                                <td >{{$cultivo->tiempo}}</td>
                                
                                @if ($cultivo->estado == 1)
                                <td  style="background-color: rgb(248, 232, 114);"  class="text-center">
                                    <form action="{{route('cultivos.edit',$cultivo->id)}}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-primary m-auto">Actualizar Hechos</button>
                                    </form>
                                   {{$cultivo->comentarios}}
                                </td>
                                @elseif($cultivo->estado == 3)
                                <td  style="background-color: rgb(242, 91, 91);"  class="text-center">
                                    {{$cultivo->comentarios}}
                                </td>
                                @else
                                <td  style="background-color: rgb(121, 248, 114);"  class="text-center">
                                    {{$cultivo->comentarios}}
                                </td>
                                @endif
                                
                                <td >{{$cultivo->Fecha}}</td>


                                @if ($cultivo->estado == 1)
                                <td  style="background-color: rgb(248, 232, 114);"  class="text-center">
                                    <form action="{{route('cultivos.finalizar',$cultivo->id)}}" method="POST">
                                        @csrf
                                        <input type="number" value="2" hidden name="txt-estado">
                                        <button type="submit" class="btn btn-warning m-auto">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                                class="bi bi-check-lg" viewBox="0 0 16 16">
                                                <path
                                                    d="M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z" />
                                            </svg>
                                        </button>
                                    </form>
                                    <br>
                                    <form action="{{route('cultivos.finalizar',$cultivo->id)}}" method="post" >
                                        @csrf
                                        <input type="number" value="3" hidden name="txt-estado">
                                        <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#modaledit">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                                <path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z"/>
                                              </svg>
                                        </button>
                                    </form>
                                   
                                </td>
                                @elseif($cultivo->estado == 3)
                                <td style="background-color: rgb(242, 91, 91);"  class="text-center">
                                    
                                </td>
                                @else
                                <td style="background-color: rgb(121, 248, 114);"  class="text-center">
                                    
                                </td>
                                @endif
                                
                            </tr>
                            @endforeach

                        </tbody>
                        </table>
                </div>
            </div>
        </div>
<script>
    $(document).ready( function () {
       $('#cultivos').DataTable({
        dom: 'Bfrtip',
        buttons: [
          'print'
        ],
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
        language: idioma
       });
      } );
      var idioma =
{
    "processing": "Procesando...",
    "lengthMenu": "Mostrar _MENU_ registros",
    "zeroRecords": "No se encontraron resultados",
    "emptyTable": "Ningún dato disponible en esta tabla",
    "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
    "infoFiltered": "(filtrado de un total de _MAX_ registros)",
    "search": "Buscar:",
    "infoThousands": ",",
    "loadingRecords": "Cargando...",
    "paginate": {
        "first": "Primero",
        "last": "Último",
        "next": "Siguiente",
        "previous": "Anterior"
    },
    "aria": {
        "sortAscending": ": Activar para ordenar la columna de manera ascendente",
        "sortDescending": ": Activar para ordenar la columna de manera descendente"
    },
    "buttons": {
        "copy": "Copiar",
        "colvis": "Visibilidad",
        "collection": "Colección",
        "colvisRestore": "Restaurar visibilidad",
        "copyKeys": "Presione ctrl o u2318 + C para copiar los datos de la tabla al portapapeles del sistema. <br \/> <br \/> Para cancelar, haga clic en este mensaje o presione escape.",
        "copySuccess": {
            "1": "Copiada 1 fila al portapapeles",
            "_": "Copiadas %d fila al portapapeles"
        },
        "copyTitle": "Copiar al portapapeles",
        "csv": "CSV",
        "excel": "Excel",
        "pageLength": {
            "-1": "Mostrar todas las filas",
            "1": "Mostrar 1 fila",
            "_": "Mostrar %d filas"
        },
        "pdf": "PDF",
        "print": "Imprimir"
    },
    "autoFill": {
        "cancel": "Cancelar",
        "fill": "Rellene todas las celdas con <i>%d<\/i>",
        "fillHorizontal": "Rellenar celdas horizontalmente",
        "fillVertical": "Rellenar celdas verticalmentemente"
    },
    "decimal": ",",
    "searchBuilder": {
        "add": "Añadir condición",
        "button": {
            "0": "Constructor de búsqueda",
            "_": "Constructor de búsqueda (%d)"
        },
        "clearAll": "Borrar todo",
        "condition": "Condición",
        "conditions": {
            "date": {
                "after": "Despues",
                "before": "Antes",
                "between": "Entre",
                "empty": "Vacío",
                "equals": "Igual a",
                "notBetween": "No entre",
                "notEmpty": "No Vacio",
                "not": "Diferente de"
            },
            "number": {
                "between": "Entre",
                "empty": "Vacio",
                "equals": "Igual a",
                "gt": "Mayor a",
                "gte": "Mayor o igual a",
                "lt": "Menor que",
                "lte": "Menor o igual que",
                "notBetween": "No entre",
                "notEmpty": "No vacío",
                "not": "Diferente de"
            },
            "string": {
                "contains": "Contiene",
                "empty": "Vacío",
                "endsWith": "Termina en",
                "equals": "Igual a",
                "notEmpty": "No Vacio",
                "startsWith": "Empieza con",
                "not": "Diferente de"
            },
            "array": {
                "not": "Diferente de",
                "equals": "Igual",
                "empty": "Vacío",
                "contains": "Contiene",
                "notEmpty": "No Vacío",
                "without": "Sin"
            }
        },
        "data": "Data",
        "deleteTitle": "Eliminar regla de filtrado",
        "leftTitle": "Criterios anulados",
        "logicAnd": "Y",
        "logicOr": "O",
        "rightTitle": "Criterios de sangría",
        "title": {
            "0": "Constructor de búsqueda",
            "_": "Constructor de búsqueda (%d)"
        },
        "value": "Valor"
    },
    "searchPanes": {
        "clearMessage": "Borrar todo",
        "collapse": {
            "0": "Paneles de búsqueda",
            "_": "Paneles de búsqueda (%d)"
        },
        "count": "{total}",
        "countFiltered": "{shown} ({total})",
        "emptyPanes": "Sin paneles de búsqueda",
        "loadMessage": "Cargando paneles de búsqueda",
        "title": "Filtros Activos - %d"
    },
    "select": {
        "1": "%d fila seleccionada",
        "_": "%d filas seleccionadas",
        "cells": {
            "1": "1 celda seleccionada",
            "_": "$d celdas seleccionadas"
        },
        "columns": {
            "1": "1 columna seleccionada",
            "_": "%d columnas seleccionadas"
        }
    },
    "thousands": ".",
    "datetime": {
        "previous": "Anterior",
        "next": "Proximo",
        "hours": "Horas",
        "minutes": "Minutos",
        "seconds": "Segundos",
        "unknown": "-",
        "amPm": [
            "am",
            "pm"
        ]
    },
    "editor": {
        "close": "Cerrar",
        "create": {
            "button": "Nuevo",
            "title": "Crear Nuevo Registro",
            "submit": "Crear"
        },
        "edit": {
            "button": "Editar",
            "title": "Editar Registro",
            "submit": "Actualizar"
        },
        "remove": {
            "button": "Eliminar",
            "title": "Eliminar Registro",
            "submit": "Eliminar",
            "confirm": {
                "_": "¿Está seguro que desea eliminar %d filas?",
                "1": "¿Está seguro que desea eliminar 1 fila?"
            }
        },
        "error": {
            "system": "Ha ocurrido un error en el sistema (<a target=\"\\\" rel=\"\\ nofollow\" href=\"\\\">Más información&lt;\\\/a&gt;).<\/a>"
        },
        "multi": {
            "title": "Múltiples Valores",
            "info": "Los elementos seleccionados contienen diferentes valores para este registro. Para editar y establecer todos los elementos de este registro con el mismo valor, hacer click o tap aquí, de lo contrario conservarán sus valores individuales.",
            "restore": "Deshacer Cambios",
            "noMulti": "Este registro puede ser editado individualmente, pero no como parte de un grupo."
        }
    },
    "info": "Mostrando de _START_ a _END_ de _TOTAL_ entradas"
} 
</x-app-layout>