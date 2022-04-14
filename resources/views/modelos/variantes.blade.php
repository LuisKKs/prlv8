@extends('layouts.app')

@section('title')
    Listado de variantes
@endsection
@section('content')
<br>
<div class="container" >
    <div class="card bg-dark text-center text-white">
        <div class="card-header">
            <h1 class="">Variantes</h1>
        </div>
        <div class="card-body">
            <table class="table table-responsive table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Modelo</th>
                        <th>Modelo(Específico)</th>
                        <th>Procesador</th>
                        <th>Rom</th>
                        <th>Ram</th>
                        <th>Camara principal</th>
                        <th>Selfie</th>
                        <th>MODIFICAR</th>
                        <th>CONSULTAR</th>
                        <th>BORRAR</th>
                    </tr>
                </thead>
                <tbody >
                        @forelse ($row as $te )
                            <tr>
                                <th>
                                    {{ $te['id'] }}
                                </th>
                                <td>
                                    {{ $te->modelo['modelo'] }}
                                </td>
                                <td>
                                    {{ $te['numero_modelo'] }}
                                </td>
                                <td>
                                    {{ $te['procesador'] }}
                                </td>
                                <td>
                                    {{ $te['memoria_int'] }}
                                </td>
                                <td>
                                    {{ $te['memoria_ram'] }}
                                </td>
                                <td>
                                    {{ $te['cam_prin'] }}
                                </td>
                                <td>
                                    {{ $te['cam_frontal'] }}
                                </td>
                                <td>
                                    <form action="{{ url('tel/'.$te->id.'/edit') }}" method="GET">
                                        <input type="text" name="idm" value="{{ $te->modelo->marca['id'] }}" hidden>
                                        <input type="text" name="idmo" value="{{ $te->modelo['id'] }}" hidden>
                                        <input type="text" name="seccion" value="0" hidden>
                                        <button class="btn btn-block btn-outline-primary" >
                                            <i class="fas fa-user-edit"></i>
                                        </button>
                                    </form>
                                </td>
                                <td>
                                    <a href="{{ url('tel/'.$te->id) }}">
                                        <button type="button" class="btn btn-block btn-outline-info"">
                                            <i class="fas fa-question"></i>
                                        </button>
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ url('delvar', $te['id']) }}" method="GET">
                                        @csrf
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="text" name="id" value="{{$te['id']}}" hidden>
                                        <input type="text" name="id_modelo" value="{{$te['id_modelo']}}" hidden>
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
        <div class="card-footer">
            <h4>paginador ba aki XD</h4>
            {{-- $row->links --}}
        </div>
    </div>
</div>
<br>
@endsection
