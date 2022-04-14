@extends('layouts.app')
@section('title')
    Edicion de modelo
@endsection
@section('content')
<br><br>
<div class="container">
    <div class="card bg-dark text-light text-center">
        <div class="card-header">
            <h4>Editar Modelo</h4>
        </div>
        <form method="POST" action="{{url('mod/'.$row->id)}}">
            {{ csrf_field() }}
            @method('PATCH')
            @csrf
            <input type="hidden" name="_method" value="PATCH">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="text" hidden name="id" value="{{ $row->id }}">
            <div class=" card-body">
                <label for="marca">Marca:</label>
                <select name="id_marca" id="marca" class="form-control form-inline bg-dark text-light text-center">
                    @foreach ($mar as $mar)
                        <option value="{{ $mar['id'] }}">{{ $mar['marca'] }}</option>
                    @endforeach
                </select>
                <!--input type="text" id="marca" name="id_marca" value="{{--$row['id']--}}" class=" form-control form-inline bg-dark text-light text-center" required-->
                <label for="modelo">Modelo:</label>
                <input type="text" id="modelo" name="modelo" value="{{$row->modelo}}" class=" form-control form-inline bg-dark text-light text-center" required>
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

