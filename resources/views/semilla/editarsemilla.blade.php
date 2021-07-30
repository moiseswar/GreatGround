<x-app-layout>
    <x-slot name="header">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg"> 
                <div class="row m-auto mb-3 ">
                  <div class="col">
                    <div class="w-50 m-auto">
                      <form action={{route('semillas.edit',$getsemilla->id)}} method="POST">
                        @csrf
                        <label for="" class="control-label" >Nombre</label>
                        <input type="text" name="txt-nombre" id="" class="form-control" value={{$getsemilla->nombre}}>
                        <label for="" class="control-label">Cantidad</label>
                        <input type="number" name="txt-cantidad" id="" class="form-control" value={{$getsemilla->cantidad}}>
                        <label for="" class="control-label">Tipo</label>
                        <input type="text" name="txt-tipo" id="" class="form-control" value={{$getsemilla->tipo}}>
                        <input type="number" name="txt-userid" id="" class="form-control" hidden value={{$getsemilla->user_id}}>
                        <br>
                        <div class="m-auto w-auto">
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                            
                        </div>
                    </form>
                  </div>
                  <div class="col ">
                    <img src="{{asset($getsemilla->imgname)}}" alt="" class="img-fluid m-auto mt-5 p-auto border border-3 rounded">
                  </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>