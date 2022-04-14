@extends('layouts.app')

@section('title')
    Registro de accesorios
@endsection


@section('content')
<br><br>
<div class="container">
    <div class="card bg-dark text-light text-center">
        <div class="card-header">
            <h4>Registrar accesorio</h4>
        </div>
        <form method="POST" action="{{url('acc')}}">
            <div class=" card-body">
                <label for="tipo">Accsesorio:</label>
                <select name="id_accesorio" id="tipo" class=" bg-dark text-light text-center" required>
                    <option value="" disabled >Seleccione el tipo de accesorio</option>
                    @foreach ($acc as $acc)
                        <option value="{{$acc['id']}}">{{$acc['tipo']}}</option>
                    @endforeach
                </select>
                <label for="modelo">Modelo:</label>
                <select name="id_modelo" id="modelo" class=" bg-dark text-light text-center" required>
                    <option value="" disabled >Seleccione el modelo</option>
                    @foreach ($mod as $mod)
                        <option value="{{$mod['id']}}">{{$mod['modelo']}}</option>
                    @endforeach
                </select>
                <br>
                <label for="nota">Nota:</label>
                <input type="text" id="nota" name="nota" value="" class=" form-control form-inline bg-dark text-light text-center" required>
                <label for="marca">Marca:</label>
                <input type="text" id="marca" name="marca_acc" value="" class=" form-control form-inline bg-dark text-light text-center" required>
                <label for="modelo">Modelo:</label>
                <input type="text" id="modelo" name="modelo_acc" value="" class=" form-control form-inline bg-dark text-light text-center" required>
            </div>
                    {{ csrf_field() }}
            <div class=" card-footer">
                <button class="btn btn-block btn-success" style="width: 100%" type="submit" title="registrar">
                    <i class="fas fa-check"></i>
                </button>
                <a href="{{url('acc')}}" class="btn btn-block btn-danger"><i class="fas fa-check"></i></a>
            </div>
        </form>
    </div>
</div>
<br><br>
@endsection
