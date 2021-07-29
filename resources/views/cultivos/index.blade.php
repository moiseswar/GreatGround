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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if(session()->has('exito'))
    {!! "<script>
       Swal.fire(
           'Agregado',
           'Cultivo Agregado',
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
                    
                </div>
            </div>
        </div>
</x-app-layout>