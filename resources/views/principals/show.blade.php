@extends('layout.layout')
@section('title', 'Detalles del Alumno')
@section('content')
<br><br>
<div class="row">
    <th>N° Control</th>
    <th>{{ $principal->numeroC}}</th><br>
    <th>Nombre</th>
    <th>{{ $principal->nombre}}</th><br>
    <th>Apellido Paterno</th>
    <th>{{ $principal->apeP}}</th><br>
    <th>Apellido Materno</th>
    <th>{{ $principal->apeM}}</th><br>
    <th>Primera Calificacion</th>
    <th>{{ $principal->cal1}}</th><br>
    <th>Segunda Calificacion</th>
    <th>{{ $principal->cal2}}</th><br>
    <th>Tercera Calificacion</th>
    <th>{{ $principal->cal3}}</th><br>
    <th>Cuarta Calificacion</th>
    <th>{{ $principal->cal4}}</th><br>
    <th>Quinta Calificacion</th>
    <th>{{ $principal->cal5}}</th><br>
    <th>{{ $principal->U1}}</th>
    <th>{{ $principal->U2}}</th>
    <th>{{ $principal->U3}}</th>
    <th>{{ $principal->U4}}</th>
    <th>{{ $principal->U5}}</th>
    <th>{{ $principal->calF}}</th>
    
    <br>
    <th><form action="{{ route('principals.destroy', $principal->id) }}" method="post">
        <a href="{{ route('principals.index', $principal->id) }}">Volver</a>
        <a href="{{ route('principals.edit', $principal->id) }}">Editar</a>
        @csrf
        @method('DELETE')

    <button type="submit" class="btn btn-danger">Eliminar</button>
    </form></th>
</div>
 @endsection