@extends('layouts.app')

@section('title')
    Marcas editar
@endsection


@section('content')
<br><br>
<div class="container">
    <div class="card bg-dark text-light text-center">
        <div class="card-header">
            <h4>Editar marca</h4>
        </div>
        <form method="POST" action="{{url('mar/'.$row->id)}}">
            {{ csrf_field() }}
            @method('PATCH')
            @csrf
            <input type="hidden" name="_method" value="PATCH">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="text" hidden name="id" value="{{ $row->id }}">
            <div class=" card-body">
                <label for="marca">Marca:</label>
                <input type="text" id="marca" name="marca" value="{{$row->marca}}" class=" form-control form-inline bg-dark text-light text-center">
            </div>
                    {{ csrf_field() }}
            <div class=" card-footer">
                <button class="btn lime darken-4" style="width: 100%" type="submit" title="registrar">
                    <i class="fas fa-check"></i>
                </button>
                <a href="{{url('mar')}}" class="btn btn-block btn-danger"><i class="fas fa-check"></i></a>
            </div>
        </form>
    </div>
</div>
<br><br>
@endsection
