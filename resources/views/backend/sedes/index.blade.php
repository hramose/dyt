@extends('master')
@section('title', 'Todas las sedes')
@section('content')

    <div class="container col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2> Todas las sedes </h2>
            </div>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            @if ($sedes->isEmpty())
                <p> No hay sedes creadas.</p>
            @else
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Teléfonos</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($sedes as $sede)
                        <tr>
                            <td>
                                <a href="{!! action('Admin\SedesController@edit', $sede->id) !!}">{!! $sede->nombre !!} </a>
                            </td>
                            <td>{!! $sede->telefonos !!}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>

@endsection