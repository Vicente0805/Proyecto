@extends('layout.layout')
@section('title', 'Agregar Datos')
@section('content')
<br><br>

<div class="row">
    <div class="col-sm-10"><h3>Agregar Nuevo Seguimiento de Alumno</h3></div>
    <div class="col-sm-2">
        <a href="{{ route('principals.index') }}">
            <button class="btn btn-secondary">Cancelar</button>
        </a>
    </div>
</div>


<br><br>

<div class="jumbotron">

<form method="post" action="{{ route('principals.store')}}">
    @csrf


    <div>
        <label for="">Numero de Control</label>
        <input class ="form-control" type="text" name="numeroC" id="" maxlength="10">
    </div>
    <div>
        <label for="">Nombre</label>
        <input class ="form-control" type="text" name="nombre" id="" maxlength="50">
    </div>
    <div>
        <label for="">Apellido Paterno</label>
        <input class ="form-control" type="text" name="apeP" id="" maxlength="50">
    </div>
    <div>
        <label for="">Apellido Materno</label>
        <input class ="form-control" type="text" name="apeM" id="" maxlength="50">
    </div>
    <div>
        <label for="">1° Calificacion</label>
        <input class ="form-control" type="text" name="cal1" id="" maxlength="10">
    </div>
    <div>
        <label for="">2° Calificacion</label>
        <input class ="form-control" type="text" name="cal2" id="" maxlength="10">
    </div>
    <div>
        <label for="">3° Calificacion</label>
        <input class ="form-control" type="text" name="cal3" id="" maxlength="10">
    </div>
    <div>
        <label for="">4° Calificacion</label>
        <input class ="form-control" type="text" name="cal4" id="" maxlength="10">
    </div>
    <div>
        <label for="">5° Calificacion</label>
        <input class ="form-control" type="text" name="cal5" id="" maxlength="10">
    </div>
    <div>
        <label for="">Calificacion MOC U1</label>
        <input class ="form-control" type="text" name="U1" id="" maxlength="10">
    </div>
    <div>
        <label for="">Calificacion MOC U2</label>
        <input class ="form-control" type="text" name="U2" id="" maxlength="10">
    </div>
    <div>
        <label for="">Calificacion MOC U3</label>
        <input class ="form-control" type="text" name="U3" id="" maxlength="10">
    </div>
    <div>
        <label for="">Calificacion MOC U4</label>
        <input class ="form-control" type="text" name="U4" id="" maxlength="10">
    </div>
    <div>
        <label for="">Calificacion MOC U5</label>
        <input class ="form-control" type="text" name="U5" id="" maxlength="10">
    </div>
    <div>
        <label for="">Calificacion Final</label>
        <input class ="form-control" type="text" name="calF" id="" maxlength="10">
    </div>
    <br><br>    
    <input class ="btn btn-primary" type="submit" value="Guardar">

</form>
</div>


 @endsection