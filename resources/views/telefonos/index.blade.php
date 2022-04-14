@extends('layouts.app')

@section('title')
    Listado de telefonos
@endsection
@section('content')
<br>
<div class="container text-center" >
    <div class="card bg-dark text-light">
        <div class="card-header">
            <h1 class="">Telefonos</h1>
        </div>
        <div>
            <a href="{{ url('prnttel') }}" class="btn btn-block btn-outline-info">Imprimir listado de telefonos <i class="fas fa-print"></i></a>
        </div>
        <div class="card-body">
            <table class="table responsive-table">
                <thead class="">
                    <tr>
                        <th scope="col">
                            ID
                        </th>
                        <th scope="col">
                            Marca
                        </th>
                        <th scope="col">
                            Modelo
                        </th>
                        <th scope="col">
                            Modelo(Específico)
                        </th>
                        <th scope="col">
                            MODIFICAR
                        </th>
                        <th scope="col">
                            CONSULTAR
                        </th>
                        <th scope="col">
                            BORRAR
                        </th>
                    </tr>
                </thead>
                <tbody class="grey-text text-lighten-3">
                    @forelse ($row as $registro)
                        <tr>
                            <th>
                                {{ $registro['id'] }}
                            </th>
                            <td>
                                {{ $registro->modelo->marca['marca'] }}
                            </td>
                            <td>
                                {{ $registro->modelo['modelo'] }}
                            </td>
                            <td>
                                {{ $registro['numero_modelo'] }}
                            </td>
                            <td>
                                <form action="{{ url('tel/'.$registro->id.'/edit') }}" method="GET">
                                    <input type="text" name="idm" value="{{ $registro->modelo->marca['id'] }}" hidden>
                                    <input type="text" name="idmo" value="{{ $registro->modelo['id'] }}" hidden>
                                    <input type="text" name="seccion" value="1" hidden>
                                    <button class="btn btn-block btn-outline-primary" >
                                        <i class="fas fa-user-edit"></i>
                                    </button>
                                </form>
                            </td>
                            <td>
                                <a href="{{ url('tel/'.$registro->id) }}">
                                    <button type="button" class="btn btn-block btn-outline-info"">
                                        <i class="fas fa-question"></i>
                                    </button>
                                </a>
                            </td>
                            <td>
                                <form action="{{ url('tel', $registro['id']) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button type="submit" class="btn btn-block btn-outline-danger"">
                                        <i class="fas fa-user-minus"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <p>no ai datos oiga</p>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="card-footer" style="height: 50px">
            {{$row->links()}}
        </div>
    </div>
</div>
<br>
@endsection
