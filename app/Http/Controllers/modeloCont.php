<?php

namespace App\Http\Controllers;

use App\Models\marca;
use App\Models\modelo;
use App\Models\tel;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;

class modeloCont extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
    }
    public function create(){
    }
    public function store(Request $request){
        $row = new modelo($request->all());
        $row->save();
        Flash::success("se ha registrado el modelo " .$row->modelo. " de forma exitosa")->important();
        $row = marca::find($request['id_marca']);
        $mod = modelo::whereIdMarca($request['id_marca'])->get();
        return view('marcas.info',['row'=>$row, 'mod'=>$mod]);
    }
    public function show(modelo $modelo){
    }
    public function edit($id){
        $row = modelo::find($id);
        $mar = marca::all();
        return view('modelos.edit',['row'=>$row, 'mar'=>$mar]);
    }
    public function update(Request $request,  $id){
        $idm = $request['id_marca'];
        $row = marca::find($idm);
        $mod = modelo::find($id);
        $mod->fill($request->all());
        Flash::warning("se ha modificado " .$mod->modelo. " de forma exitosa")->important();
        $mod->update();
        $mod=modelo::whereIdMarca($idm)->get();
        return view('marcas.info',['row'=>$row, 'mod'=>$mod]);
    }
    public function destroy(Request $request){
        $row = modelo::find($request['id']);
        Flash::error("Se ha eliminado el modelo ".$row->modelo)->important();
        $row->delete();
        $row = marca::find($request['id_marca']);
        $mod = modelo::whereIdMarca($request['id_marca'])->get();
        return view('marcas.info',['row'=>$row, 'mod'=>$mod]);
    }
    public function variantes(Request $re){
        $row = tel::whereIdModelo($re['id'])->get();
        return view('modelos.variantes',['row'=>$row]);
    }
}
