@extends('layouts.app')

@section('title')
    Modelos de marca
@endsection


@section('content')
<br><br>
<div class="container">
    <div class="card bg-dark text-white text-center" >
        <div class="card-header">
            <h5><h4 class="">Modelos de marca</h4></h5>
        </div>
        <div class="card-body">
            <table class="table table-responsive table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Editar</th>
                        <th>Registrar variante</th>
                        <th>Eliminar Modelo</th>
                        <th>Variantes</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mod as $mod)
                        <tr>
                            <td>{{ $row['id'] }}</td>
                            <td>{{ $row['marca'] }}</td>
                            <td>{{ $mod['modelo'] }}</td>
                            <td>
                                <a href="{{ url('mod/'.$mod->id.'/edit') }}">
                                    <button class="btn btn-block btn-outline-primary" >
                                        <i class="fas fa-user-edit"></i>
                                    </button>
                                </a>
                            </td>
                            <td>
                                <form action="{{ url('tel/create') }}" method="GET">
                                    @csrf
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="text" name="id" value="{{$mod['id']}}" hidden>
                                    <input type="text" name="id_marca" value="{{$row['id']}}" hidden>
                                    <button type="submit" class="btn btn-block btn-outline-info"">
                                        <i class="far fa-plus-square"></i>
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ url('mod', $mod['id']) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="text" name="id" value="{{$mod['id']}}" hidden>
                                    <input type="text" name="id_marca" value="{{$row['id']}}" hidden>
                                    <button type="submit" class="btn btn-block btn-outline-danger"">
                                        <i class="fas fa-user-minus"></i>
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ url('vervar') }}" method="GET">
                                    @csrf
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="text" name="id" value="{{$mod['id']}}" hidden>
                                    <input type="text" name="id_marca" value="{{$row['id']}}" hidden>
                                    <button type="submit" class="btn btn-block btn-outline-info"">
                                        <i class="far fa-plus-square"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <div>
                <h5>Registrar Modelo</h5>
                <a href="{{ url('regmod/'.$row['id']) }}" class="btn btn-success btn-block"><i class="fas fa-check"></i></a>
            </div>
            <div>
                <h5>Regresar a listado de marcas</h5>
                <a href="{{ url('mar') }}" class="btn btn-warning btn-block"><i class="fas fa-check"></i></a>
            </div>
        </div>
    </div>
</div>
<br><br>
@endsection
