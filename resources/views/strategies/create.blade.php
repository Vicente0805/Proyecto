@extends('layout.layout')
@section('title', 'Agregar Estrategias')
@section('content')
<br><br>

<div class="row">
    <div class="col-sm-10"><h3>Agregar Nueva Estrategia</h3></div>
    <div class="col-sm-2">
        <a href="{{ route('strategies.index') }}">
            <button class="btn btn-secondary">Cancelar</button>
        </a>
    </div>
</div>


<br><br>

<div class="jumbotron">

<form method="post" action="{{ route('strategies.store') }}">
    @csrf

    <div>
        <label for="">Materia</label>
        <input class ="form-control" type="text" name="materia" id="" maxlength="50">
    </div>
    <div>
        <label for="">Estrategias</label>
        <input class ="form-control" type="text" name="estrategias" id="" maxlength="500">
    </div>
    <br><br>    
    <input class ="btn btn-primary" type="submit" value="Guardar">

</form>
</div>


 @endsection