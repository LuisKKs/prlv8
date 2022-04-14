@extends('layouts.app')

@section('title')
    Editar refaccion
@endsection


@section('content')
<br><br>
<div class="container">
    <div class="card bg-dark text-light text-center">
        <div class="card-header">
            <h4>Editar refaccion</h4>
        </div>
        <form method="POST" action="{{url('ref/'.$row->id)}}">
            {{ csrf_field() }}
            @method('PATCH')
            @csrf
            <input type="hidden" name="_method" value="PATCH">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="text" hidden name="id" value="{{ $row->id }}">
            <div class=" card-body">
                <label for="nota">Nota:</label>
                <input type="text" id="nota" name="nota" value="{{ $row->nota }}" class=" form-control form-inline bg-dark text-light text-center" required>
                <label for="marca">Marca:</label>
                <input type="text" id="marca" name="marca_ref" value="{{ $row->marca_ref }}" class=" form-control form-inline bg-dark text-light text-center" required>
                <label for="modelo">Modelo:</label>
                <input type="text" id="modelo" name="modelo_ref" value="{{ $row->modelo_ref }}" class=" form-control form-inline bg-dark text-light text-center" required>
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

