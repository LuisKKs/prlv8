@extends('layouts.app')

@section('title')
    Marcas registro
@endsection


@section('content')
<br><br>
<div class="container">
    <div class="card bg-dark text-light text-center">
        <div class="card-header">
            <h4>Registrar marca</h4>
        </div>
        <form method="POST" action="{{url('mar')}}">
            <div class=" card-body">
                <label for="marca">Marca:</label>
                <input type="text" id="marca" name="marca" value="" class=" form-control form-inline bg-dark text-light text-center">
            </div>
                    {{ csrf_field() }}
            <div class=" card-footer">
                <button class="btn btn-block btn-success" style="width: 100%" type="submit" title="registrar">
                    <i class="fas fa-check"></i>
                </button>
                <a href="{{url('mar')}}" class="btn btn-block btn-danger"><i class="fas fa-check"></i></a>
            </div>
        </form>
    </div>
</div>
<br><br>
@endsection
