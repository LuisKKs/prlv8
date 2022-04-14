<?php

namespace App\Http\Controllers;

use Laracasts\Flash\Flash;
use App\Models\marca;
use App\Models\modelo;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class marcaCont extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        $row = marca::simplePaginate(5);
        return view('marcas.index',['row' => $row]);
    }
    public function create(){
        return view('marcas.create');
    }
    public function store(Request $request){
        $row = new marca($request->all());
        $row->save();
        $registro = marca::simplePaginate(5);
        Flash::success("se ha registrado la marca " .$row->marca. " de forma exitosa")->important();
        return view('marcas.index',['row' => $registro]);
    }
    public function show($id){
        $row = marca::find($id);
        $mod = modelo::whereIdMarca($id)->get();
        return view('marcas.info',['row'=>$row, 'mod'=>$mod]);
    }
    public function edit($id){
        $registro = marca::find($id);
        return view('marcas.edit' , ['row'=>$registro]);
    }
    public function update(Request $request, $id){
        $row = marca::find($id);
        $row->fill($request->all());
        $row->update();
        $registro=marca::simplePaginate(5);
        Flash::warning("se ha modificado " .$row->marca. " de forma exitosa")->important();
        return view('marcas.index' , ['row'=>$registro]);
    }
    public function destroy($id){
        $row=marca::find($id);
        Flash::error("Se ha eliminado la marca ".$row->marca)->important();
        $row->delete();
        $registro=marca::simplePaginate(5);
        return view('marcas.index' , ['row'=>$registro]);
    }
    public function registroModeloV($id){
        $row = marca::find($id);
        return view('modelos.create' , ['row'=>$row]);
    }
    public function imprimir(){
        $row = marca::all();
        $pdf = PDF::loadView('pdf.listadomarca',['row'=>$row])->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->stream('listado-marcas-'.date('Ymd').'.pdf');
    }
}
