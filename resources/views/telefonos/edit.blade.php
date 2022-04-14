@extends('layouts.app')

@section('title')
    Registro de modelo especifico
@endsection


@section('content')
<br><br>
<div class="container">
    <div class="card bg-dark text-light text-center">
        <div class="card-header">
            <h4>Modelo especifico</h4>
        </div>
        <form method="POST" action="{{url('tel/'.$tel['id'])}}">
            {{ csrf_field() }}
            @method('PATCH')
            @csrf
            <input type="hidden" name="_method" value="PATCH">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="text" hidden name="id" value="{{ $tel->id }}">
            <div class=" card-body">
                <input type="text" value="{{$sec}}" name="seccion" hidden>
                <h6>
                    <label>Marca: {{ $mar['marca'] }}</label>
                    <input type="text" name="id_marca" value="{{ $mar['id'] }}" disabled hidden>
                </h6>
                <h6>
                    <label>Modelo: {{$mod['modelo']}}</label>
                    <input type="text" name="id_modelo" value="{{ $mod['id'] }}" hidden>
                </h6>
                <label for="numero_modelo">Modelo(Especifico):</label>
                <input type="text" id="numero_modelo" name="numero_modelo" value="{{$tel['numero_modelo']}}" class=" form-control form-inline bg-dark text-light text-center" required>
                <label for="procesador">Procesador:</label>
                <input type="text" id="procesador" name="procesador" value="{{$tel['procesador']}}" class=" form-control form-inline bg-dark text-light text-center" required>
                <label for="rom">ROM:</label>
                <input type="text" id="rom" name="memoria_int" value="{{$tel['memoria_int']}}" class=" form-control form-inline bg-dark text-light text-center" required>
                <label for="ram">RAM:</label>
                <input type="text" id="ram" name="memoria_ram" value="{{$tel['memoria_ram']}}" class=" form-control form-inline bg-dark text-light text-center" required>
                <label for="prin">Camara(Principal):</label>
                <input type="text" id="prin" name="cam_prin" value="{{$tel['cam_prin']}}" class=" form-control form-inline bg-dark text-light text-center" required>
                <label for="fron">Camara(Frontal):</label>
                <input type="text" id="forn" name="cam_frontal" value="{{$tel['cam_frontal']}}" class=" form-control form-inline bg-dark text-light text-center" required>
            </div>
                    {{ csrf_field() }}
            <div class=" card-footer">
                <button class="btn btn-block btn-success" style="width: 100%" type="submit" title="registrar">
                    <i class="fas fa-check"></i>
                </button>
                <a href="{{url('tel')}}" class="btn btn-block btn-danger"><i class="fas fa-check"></i></a>
            </div>
        </form>
    </div>
</div>
<br><br>
@endsection

