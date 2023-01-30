@extends('layout.layout')
@section('title', 'Editar Datos')
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

<form method="post" action="{{ route('principals.update', $principal->id)}}">
    @csrf
    @method('PUT')


    <div>
        <label for="">Numero de Control</label>
        <input class ="form-control" type="text" value="{{ $principal->numeroC }}" name="numeroC" id="" maxlength="10">
    </div>
    <div>
        <label for="">Nombre</label>
        <input class ="form-control" type="text" value="{{ $principal->nombre }}" name="nombre" id="" maxlength="50">
    </div>
    <div>
        <label for="">Apellido Paterno</label>
        <input class ="form-control" type="text" value="{{ $principal->apeP }}" name="apeP" id="" maxlength="50">
    </div>
    <div>
        <label for="">Apellido Materno</label>
        <input class ="form-control" type="text" value="{{ $principal->apeM }}" name="apeM" id="" maxlength="50">
    </div>
    <div>
        <label for="">Primera Calificacion</label>
        <input class ="form-control" type="text" value="{{ $principal->cal1 }}" name="cal1" id="" maxlength="10">
    </div>
    <div>
        <label for="">Calificacion MOC U1</label>
        <input class ="form-control" type="text" value="{{ $principal->U1 }}" name="U1" id="" maxlength="10">
    </div>
    <div>
        <label for="">Calificacion MOC U2</label>
        <input class ="form-control" type="text" value="{{ $principal->U2 }}" name="U2" id="" maxlength="10">
    </div>
    <div>
        <label for="">Calificacion MOC U3</label>
        <input class ="form-control" type="text" value="{{ $principal->U3 }}" name="U3" id="" maxlength="10">
    </div>
    <div>
        <label for="">Calificacion MOC U4</label>
        <input class ="form-control" type="text" value="{{ $principal->U4 }}" name="U4" id="" maxlength="10">
    </div>
    <div>
        <label for="">Calificacion MOC U5</label>
        <input class ="form-control" type="text" value="{{ $principal->U5 }}" name="U5" id="" maxlength="10">
    </div>
    <div>
        <label for="">Calificacion Final</label>
        <input class ="form-control" type="text" value="{{ $principal->calF }}" name="calF" id="" maxlength="10">
    </div>
    <br><br>    
    <input class ="btn btn-primary" type="submit" value="Guardar cambios">

</form>
</div>


 @endsection