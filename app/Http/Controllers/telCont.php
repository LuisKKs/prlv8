<?php

namespace App\Http\Controllers;

use App\Models\marca;
use App\Models\modelo;
use App\Models\tel;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class telCont extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        $registro = tel::simplePaginate(5);
        return view('telefonos.index',['row' => $registro]);
    }
    public function create(Request $request){
        $mod = modelo::find($request['id']);
        $mar = marca::find($request['id_marca']);
        return view('telefonos.create',['mod'=>$mod , 'mar'=>$mar]);
    }
    public function store(Request $request){
        $row = new tel($request->all());
        $row->save();
        Flash::success("se ha registrado el modelo " .$row->numero_modelo. " de forma exitosa")->important();
        $registro = tel::simplePaginate(5);
        return view('telefonos.index',['row' => $registro]);
    }
    public function show($id){
        $row = tel::find($id);
        return view('telefonos.info',['row' => $row]);
    }
    public function edit(Request $re, $id){
        $pro = $re['seccion'];
        $tel = tel::find($id);
        $mar = marca::whereId($re['idm'])->first(['id','marca']);
        $mod = modelo::whereId($re['idmo'])->first(['id','modelo']);
        return view('telefonos.edit',['mar'=>$mar, 'mod'=>$mod, 'tel'=>$tel, 'sec'=>$pro]);
    }
    public function update(Request $request, $id){
        if ($request['seccion']==1) {
            $tel = tel::find($id);
            $tel->fill($request->all());
            $tel->update();
            Flash::warning("se ha modificado " .$tel->numero_modelo. " de forma exitosa")->important();
            $registro = tel::simplePaginate(5);
            return view('telefonos.index',['row' => $registro]);
        } else {
            $tel = tel::find($id);
            $tel->fill($request->all());
            $tel->update();
            Flash::warning("se ha modificado " .$tel->numero_modelo. " de forma exitosa")->important();
            $row = tel::whereIdModelo($request['id_modelo'])->get();
            return view('modelos.variantes',['row'=>$row]);
        }
    }
    public function destroy($id){
        $row=tel::find($id);
        Flash::error("Se ha eliminado el telefono ".$row->numero_modelo)->important();
        $row->delete();
        $registro=tel::simplePaginate(5);
        return view('telefonos.index' , ['row'=>$registro]);
    }
    public function destroyVar(Request $re ,$id){
        $row = tel::find($id);
        Flash::error("Se ha eliminado el telefono ".$row->numero_modelo)->important();
        $row->delete();
        $row = tel::whereIdModelo($re['id_modelo'])->get();
        return view('modelos.variantes',['row'=>$row]);
    }
    public function imprimir(){
        $row = tel::all();
        $pdf = PDF::loadView('pdf.listadotelefonos',['row'=>$row])->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->stream('listado-telefonos-'.date('Ymd').'.pdf');
    }
}
