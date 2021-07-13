<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use App\Models\semillas;

class controllarSemillas extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($iduser)
    {
        $getsemilla = DB::table('semillas')->where("user_id",$iduser)->get();
        return view('dashboard',compact('getsemilla'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request-> validate([
            'file'=> 'required',
            'txt-nombre'=> 'required',
            'txt-cantidad' => 'required',
            'txt-tipo' => 'required'
        ]);
        if($request->hasFile('file')){
            $file = $request->file('file');
            $destino = 'img/';
            $filename = time().'-'.$file->getClientOriginalName();
            $upload = $request->file('file')->move($destino, $filename);

            DB::table('semillas')->insert([
            "nombre" => $request->input('txt-nombre'),
            "imgname" => $destino.$filename,
            "user_id" => $request ->input('txt-user'),
            "tipo" => $request->input('txt-tipo'),
            "cantidad" =>$request ->input('txt-cantidad'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);
        };
        
        return redirect()->route('semillas.index',$request->input('txt-user'))->with('exito','guardado');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $getsemilla = DB::table('semillas')->where("id",$id)->first();
        return view('semilla.editarsemilla',compact('getsemilla'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $request-> validate([
            'txt-nombre'=> 'required',
            'txt-cantidad' => 'required',
            'txt-tipo' => 'required'
        ]);
        DB::table('semillas')->where('id', $id)->update([
            "nombre" => $request-> input('txt-nombre'),
            "cantidad" => $request -> input('txt-cantidad'),
            "tipo" => $request -> input('txt-tipo') ,
            "updated_at" => Carbon::now(),
        ]);
        return redirect()->route('semillas.index', $request->input('txt-userid'))->with('success','Terminado');
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
    public function destroy(Request $request)
    {
        $image = semillas::find($request->id);

        unlink($image->imgname);

        semillas::where("id", $image->id)->delete();

        return redirect()->route('semillas.index', $request->input('txt-userid'))->with('eliminado','Eliminado');
    }
}
