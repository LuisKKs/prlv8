<?php

namespace App\Http\Controllers;

use App\Models\ref;
use App\Models\refTel;
use App\Models\tel;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class refTelCont extends Controller{
    public function index(){
        $registro = reftel::simplePaginate(5);
        return view('refacciones.index',['row' => $registro]);
    }
    public function create(){
        $tel=tel::all();
        $ref=ref::all();
        $row = new reftel();
        return view('refacciones.create',['row' => $row , 'tel' => $tel , 'ref' => $ref]);
    }
    public function store(Request $request){
        $row = new refTel($request->all());
        $row->save();
        Flash::success("se ha registrado la refaccion " .$row->modelo_ref. " de forma exitosa")->important();
        $registro = reftel::simplePaginate(5);
        return view('refacciones.index',['row' => $registro]);
    }
    public function show($id){
        $row = reftel::find($id);
        return view('refacciones.info',['row' => $row]);
    }
    public function edit($id){
        $row = reftel::find($id);
        $tel= tel::all();
        $ref= ref::all();
        return view('refacciones.edit' , ['row' => $row , 'tel' => $tel , 'ref' => $ref]);
    }
    public function update(Request $request, $id){
        $row = refTel::find($id);
        Flash::warning("Se ha modificado " .$row->modelo_ref. " de forma exitosa")->important();
        $row->fill($request->all());
        $row->update();
        $registro=reftel::simplePaginate(5);
        return view('refacciones.index' , ['row'=>$registro]);
    }
    public function destroy($id){
        $row=reftel::find($id);
        Flash::error("Se ha eliminado la refaccion ".$row->modelo_ref)->important();
        $row->delete();
        $registro=reftel::simplePaginate(5);
        return view('refacciones.index' , ['row'=>$registro]);
    }
    public function imprimir(){
        $row = refTel::all();
        $pdf = PDF::loadView('pdf.listadoref',['row'=>$row])->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->stream('listado-refacciones-'.date('Ymd').'.pdf');
    }
}
