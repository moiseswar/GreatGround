<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Añadir Hechos') }}
        </h2>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg"> 
                <div class="row m-auto mb-3 ">
                  <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label  class="form-label">Nombre</label>
                            <input type="text" value="{{$getdata->nombre}}" class="form-control" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Cantidad</label>
                            <input type="number" class="form-control" value="{{$getdata->cantidad}}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tiempo en meses</label>
                            <input type="number" value="{{$getdata->tiempo}}" class="form-control" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Fecha de Siembra</label>
                            <input type="date" value="{{$getdata->Fecha}}" class="form-control" readonly>
                        </div>
                        <label class="form-label">Estado</label>
                        @if ($getdata->estado = 1)
                            <input type="text" value="En proceso" class="form-control" readonly>
                        @else
                            
                        @endif
                    </div>

                    <div class="col">
                            <img src="{{asset($getimage->imgname)}}" class="img-thumbnail m-auto mt-5" alt="..." >
                    </div>
                    <div class="col">
                      <form action="{{route('cultivos.coment', $getdata->id)}}" method="post">
                        @csrf
                            <h3 class="m-auto text-center">Editar Hechos</h3>
                            <br>
                            <div class="form-floating ">
                        
                                <textarea class="form-control m-auto"  id="floatingTextarea2" name="txt-hechos"
                                    style="height: 100px">{{$getdata->comentarios}}</textarea>
                                <label for="floatingTextarea2">Hechos</label>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <button type="submit" class="btn btn-success m-auto">Enviar</button>
                                </div>
                            </form >
                                <div class="col">
                                    <a href="{{route('cultivos.show')}}" class="btn btn-danger decoration-non">Cancelar</a>
                                </div>
                            </div>
                        
                    </div>
                  </div>
            </div>
        </div>
    </div>
</x-app-layout>