@extends('layouts.app')

@section('title')
    Registro de refaccion
@endsection


@section('content')
<br><br>
<div class="container">
    <div class="card bg-dark text-light text-center">
        <div class="card-header">
            <h4>Registrar refaccion</h4>
        </div>
        <form method="POST" action="{{url('ref')}}">
            <div class=" card-body">
                <label for="nota">Nota:</label>
                <input type="text" id="nota" name="nota" value="" class=" form-control form-inline bg-dark text-light text-center" required>
                <label for="marca">Marca:</label>
                <input type="text" id="marca" name="marca_ref" value="" class=" form-control form-inline bg-dark text-light text-center" required>
                <label for="modelo">Modelo:</label>
                <input type="text" id="modelo" name="modelo_ref" value="" class=" form-control form-inline bg-dark text-light text-center" required>
                <label for="tipo">Refaccion:</label>
                <select name="id_ref" id="tipo" class=" bg-dark text-light text-center" required>
                    <option value="" disabled >Seleccione el tipo de refaccion</option>
                    @foreach ($ref as $r)
                        <option value="{{$r['id']}}">{{$r['tipo']}}</option>
                    @endforeach
                </select>
                <label for="tel">Telefono:</label>
                <select name="id_tel" id="tel" class=" bg-dark text-light text-center" required>
                    <option value="" disabled >Seleccione el modelo especifico</option>
                    @foreach ($tel as $t)
                        <option value="{{$t['id']}}">{{$t['numero_modelo']}}</option>
                    @endforeach
                </select>
            </div>
                    {{ csrf_field() }}
            <div class=" card-footer">
                <button class="btn btn-block btn-success" style="width: 100%" type="submit" title="registrar">
                    <i class="fas fa-check"></i>
                </button>
                <a href="{{url('ref')}}" class="btn btn-block btn-danger"><i class="fas fa-check"></i></a>
            </div>
        </form>
    </div>
</div>
<br><br>
@endsection
