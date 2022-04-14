@extends('layouts.app')

@section('title')
    Registro de modelo
@endsection


@section('content')
<br><br>
<div class="container">
    <div class="card bg-dark text-light text-center">
        <div class="card-header">
            <h4>Registrar modelo</h4>
        </div>
        <form method="POST" action="{{url('mod')}}">
            <div class=" card-body">
                <label for="marca">Marca: {{$row['marca']}}</label>
                <input type="text" id="marca" name="id_marca" value="{{$row['id']}}" class=" form-control form-inline bg-dark text-light text-center" required hidden>
                <br>
                <label for="modelo">Modelo:</label>
                <input type="text" id="modelo" name="modelo" value="" class=" form-control form-inline bg-dark text-light text-center" required>
            </div>
                    {{ csrf_field() }}
            <div class=" card-footer">
                <button class="btn btn-block btn-success" style="width: 100%" type="submit" title="registrar">
                    <i class="fas fa-check"></i>
                </button>
                <a href="{{url('mar/'.$row['id'])}}" class="btn btn-block btn-danger"><i class="fas fa-check"></i></a>
            </div>
        </form>
    </div>
</div>
<br><br>
@endsection
