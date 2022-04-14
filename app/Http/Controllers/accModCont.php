<?php

namespace App\Http\Controllers;

use App\Models\acc;
use App\Models\accMod;
use App\Models\modelo;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class accModCont extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        $registro = accMod::simplePaginate(5);
        return view('accesorios.index',['row' => $registro]);
    }
    public function create(){
        $acc = acc::all();
        $mod = modelo::all();
        return view('accesorios.create',['acc' => $acc, 'mod'=>$mod]);
    }
    public function store(Request $request){
        $row = new accMod($request->all());
        $row->save();
        Flash::success("se ha registrado el accesorio " .$row->modelo_acc. " de forma exitosa")->important();
        $registro = accmod::simplePaginate(5);
        return view('accesorios.index',['row' => $registro]);
    }
    public function show($id){
        $acm = accMod::find($id);
        return view('accesorios.info',['row'=>$acm]);
    }
    public function edit($id){
        $acm = accMod::find($id);
        $acc = acc::all();
        $mod = modelo::all();
        return view('accesorios.edit',['acc' => $acc, 'mod'=>$mod, 'acm'=>$acm]);
    }
    public function update(Request $request,  $id){
        $acc = accMod::find($id);
        $acc->fill($request->all());
        $acc->update();
        Flash::warning("se ha modificado " .$acc->modelo_acc. " de forma exitosa")->important();
        $registro = accMod::simplePaginate(5);
        return view('accesorios.index',['row' => $registro]);
    }
    public function destroy($id){
        $row=accMod::find($id);
        Flash::error("Se ha eliminado el accesorio ".$row->modelo_acc)->important();
        $row->delete();
        $registro=accMod::simplePaginate(5);
        return view('accesorios.index' , ['row'=>$registro]);
    }
    public function imprimir(){
        $row = accMod::all();
        $pdf = PDF::loadView('pdf.listadoacc',['row'=>$row])->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->stream('listado-accesorios-'.date('Ymd').'.pdf');
    }
}
