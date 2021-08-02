<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Semillas') }}
        </h2>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    </x-slot>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>   
    @if(session()->has('exito'))
 {!! "<script>
    Swal.fire(
        'Agregado',
        'Semilla Agregada',
        'success'
    )
 </script>"!!}
@endif
@if(session()->has('eliminado'))
 {!! "<script>
    Swal.fire(
        'Eliminado',
        'Semilla Eliminada',
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
        'Rellena todos los campos',
        'info'
      )</script>"!!}
      @endif
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg"> 
                <form action={{route('semillas.create')}}  method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class=" px-3 mb-6 md:mb-0">
                        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="company">
                          Nombre de la semilla
                        </label>
                        <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" name="txt-nombre" type="text" value="{{old('txt-nombre')}}" >
                      </div>
                      <div class=" px-3">
                        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="title">
                          Cantidad
                        </label>
                        <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" name="txt-cantidad" type="number" value="{{old('txt-cantidad')}}">
                      </div>
                      <div class=" px-3">
                        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="title">
                          Tipo
                        </label>
                        <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" name="txt-tipo" type="text" value="{{old('txt-tipo')}}">
                      </div>
                      <div class=" px-3">
                        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="title">
                          Imagen
                        </label>
                        <br>
                        <input class=" bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" name="file" type="file" accept="image/*">
                      </div>
                      <input type="number" hidden name="txt-user" value="{{Auth::user()->id}}">
                      <div class=" px-3 mb-6 md:mb-0">
                          <button type="submit" class="btn btn-primary">Añadir</button>
                          
                        </div>
                        <br>
                </form>
                  </div>
                  <br>
                  <div class="row">
                    @foreach ($getsemilla as $image)
                    <div class="card ml-2 float-left" style="width: 18rem;">
                    
                        <img src="{{asset($image->imgname)}}" class="card-img-top mt-3" >
                        <div class="card-body">
                          <h5 class="card-title">{{$image->nombre}}</h5>
                          <p class="card-text">Cantidad: {{$image->cantidad}}</p> 
                          <p class="card-text">Tipo: {{$image->tipo}}</p>
                          <div class="row">
                              <div class="col">
                                  <form action={{route('semillas.show',$image->id)}} method="POST">
                                      @csrf
                                      <button type="submit" class="m-auto btn btn-primary">Cambiar</button>
                                  </form>
                                  
                              </div>
                              <div class="col">
                                  <form action="{{route('semillas.destroy', $image->id)}}" method="POST">
                                      @csrf
                                      <input type="number" name="txt-userid" hidden value="{{$image->user_id}}">
                                      <button type="submit" class="m-auto btn btn-danger">Eliminar</button>
                                  </form>
                              </div>
                              
                          </div>
                          <br>
                          <div class="row">
                            <div class="col">
                              <form action="{{route('cultivos.create', $image->id)}}" method="POST" >
                                @csrf
                                <input type="number" name="txt-userid" hidden value="{{$image->user_id}}">
                                <center>
                                <button type="submit" class="btn btn-success m-auto">Cultivar</button>
                                </center>
                              </form>
                            </div>
                          </div>
                        </div>
                    </div> 
                    @endforeach
                    
                </div>
                  
            </div>
        </div>
    </div>
</x-app-layout>