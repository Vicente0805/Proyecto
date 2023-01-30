@extends('layout.layout')
@section('title', 'Agregar Estrategias')
@section('content')
<br><br>

<div class="row">
    <div class="col-sm-10"><h3>Agregar Actividades</h3></div>
    <div class="col-sm-2">
        <a href="{{ route('activities.index') }}">
            <button class="btn btn-secondary">Cancelar</button>
        </a>
    </div>
</div>


<br><br>

<div class="jumbotron">

<form method="post" action="{{ route('activities.store') }}">
    @csrf

    <div>
        <label for="">Nombre</label>
        <input class ="form-control" type="text" name="nombre" id="" maxlength="50">
    </div>
    <div>
        <label for="">Valor</label>
        <input class ="form-control" type="text" name="valor" id="" maxlength="500">
    </div>
    <div>
        <label for="">Estatus</label>
        <select class ="form-control" name="estado" id="" required>
            <option value="">Seleccione el estatus</option>
            <option value="Entregado">Entregado</option>
            <option value="No entregado">No entregado</option>
        </select>
    </div>
    <br><br>    
    <input class ="btn btn-primary" type="submit" value="Guardar">

</form>
</div>


 @endsection