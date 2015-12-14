@extends('master')
@section('title', 'Crea un nuevo Estudio')

@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">

            <form class="form-horizontal" method="post">

                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <input type="hidden" name="_token" value="{!! csrf_token() !!}">

                <fieldset>
                    <legend>Crea un nuevo estudio</legend>

                    <!-- Nombre -->
                    <div class="form-group">
                        <label for="nombre" class="col-lg-2 control-label">Nombre</label>
                        <div class="col-lg-10">
                            <input type="name" class="form-control" id="nombre" name="nombre">
                        </div>
                    </div>
                    <!-- Nombre -->
                    <!-- Observaciones -->
                    <div class="form-group">
                        <label for="observaciones" class="col-lg-2 control-label">Observaciones</label>
                        <div class="col-lg-10">
                            <input type="textarea" class="form-control" id="observaciones" name="observaciones">
                        </div>
                    </div>

                    
                    <!-- Observaciones -->
                    <button type="button" id="tombo">+ campos</button>
                    <hr>
                    <div class="form-group" style="display:none;" id="campos">
                        <label for="select" class="col-lg-2 control-label">Campo</label>

                        <div class="col-lg-10">
                            <select class="form-control" id="camposbase" name="campobase[]">
                                @foreach($camposbase as $campobase)
                                    <option value="{!! $campobase->id !!}"  >{!! $campobase->nombre !!} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div id="cont">
                        
                    </div>
                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button type="reset" class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-primary">Guardar Datos</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>

    <script>


    </script>
@endsection 