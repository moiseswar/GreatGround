<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use App\Models\cultivos;

class controladorCultivos extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $getdata = DB::table('semillas')->where("id",$id)->first();
        return view('cultivos.create',compact('getdata'));
    }

   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request-> validate([
            
            'txt-cantidad'=> 'required| max:txt-cantidad',
            'txt-tiempo' => 'required',
            
        ]);
        
            DB::table('Cultivos')->insert([
            "nombre" => $request ->input('txt-nombre'),
            "semilla_id" => $request ->input('txt-semillaid'),
            "user_id" => auth()->user()->id,
            "cantidad" =>$request ->input('txt-cantidad'),
            "tiempo" => $request ->input('txt-tiempo'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        $getcantidad = DB::table('semillas')
        ->select('cantidad')
        ->where("id",$request->input('txt-semillaid'))->first();
        
        $cantidadRes = $request->input('txt-cantidad');
        $catidad1 = (int)$getcantidad->cantidad;
        $cantidadAc = ( $catidad1 - $cantidadRes);
        DB::table('semillas')->where('id', $request ->input('txt-semillaid'))->update([
            "cantidad" => $cantidadAc,
            "updated_at" => Carbon::now(),
        ]);
        
        
        return redirect()->route('cultivos.show')->with('exito','guardado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $getdata = DB::table('cultivos')->where("user_id",auth()->user()->id)->get();
        return view('cultivos.index',compact('getdata'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
