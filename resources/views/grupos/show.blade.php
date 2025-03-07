@extends('layouts.app')

@section('content')
    <h1>ver grupo</h1>
    <div class="row">
        <div class="col-md-4">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre"
             value="{{ $grupo->nombre }}" disabled>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label for="descrpcion" class="form-label">Descripcion</label>
            <textarea class="form-control" id="descrpcion"
             name="descrpcion" disabled>{{ $grupo->descripcion }}
            </textarea>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('grupos.index') }}" class="btn btn-primary">Regresar</a>
        </div>
    </div>
@endsection
