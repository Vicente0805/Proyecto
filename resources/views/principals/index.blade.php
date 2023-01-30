@extends('layout.layout')
@section('title', 'Datos Principales')
@section('content')
<br><br>
<div class="row">
<div class="col-sm-3">
    <a href="{{ route('principals.pdf') }}" class="btn btn-dark">PDF</a>
    <a href="{{ route('principals.create') }}">
        <button class="btn btn-primary">Agregar Alumno</button>
    </a>
    
</div>
<div class="col-sm-8"><h1>Seguimiento de Alumnos - 2° Semestre</h1></div>
<div class="col-sm-1"><a href="{{ route('strategies.index') }}">
    <button class="btn btn-primary">Estrategias</button>
</a></div>
</div>


<br>
<div class="row">
<thead>
<table border="1" class="table" >
<tr bgcolor="#00BB2D">
<th rowspan="2">N° Control</th>
<th rowspan="2">Nombre</th>
<th rowspan="2">Apellido Paterno</th>
<th rowspan="2">Apellido Materno</th>
<th rowspan="2">1° Calf</th>
<th rowspan="2">2° Calf</th>
<th rowspan="2">3° Calf</th>
<th rowspan="2">4° Calf</th>
<th rowspan="2">5° Calf</th>
<th colspan="5">MOC</th>
<th rowspan="2">Cal Final</th>
<th rowspan="2">Opciones</th>
<th rowspan="2">Actividades</th>
</tr>
<tr bgcolor="#00BB2D">

<th>U1</th>
<th>U2</th>
<th>U3</th>
<th>U4</th>
<th>U5</th>
</tr>
</thead>

<tr>
    <tbody>
    @forelse ($principals as $principal)
    <th>{{ $principal->numeroC}}</th>
    <th>{{ $principal->nombre}}</th>
    <th>{{ $principal->apeP}}</th>
    <th>{{ $principal->apeM}}</th>
    <th>{{ $principal->cal1}}</th>
    <th>{{ $principal->cal2}}</th>
    <th>{{ $principal->cal3}}</th>
    <th>{{ $principal->cal4}}</th>
    <th>{{ $principal->cal5}}</th>
    <th>{{ $principal->U1}}</th>
    <th>{{ $principal->U2}}</th>
    <th>{{ $principal->U3}}</th>
    <th>{{ $principal->U4}}</th>
    <th>{{ $principal->U5}}</th>
    <th>{{ $principal->calF}}</th>
    <th><form action="{{ route('principals.destroy', $principal->id) }}" method="post">
        <a href="{{ route('principals.show', $principal->id) }}">Ver</a>
        <a href="{{ route('principals.edit', $principal->id) }}">Editar</a>
        @csrf
        @method('DELETE')

    <button type="submit" class="btn btn-danger">Eliminar</button>
    </form></th>
    <th><div class="col-sm-2"><a href="{{ route('activities.index') }}">
        <button class="btn btn-primary">Actividades</button>
    </a></div></th>
</tbody>
</tr>

     
 @empty
     <div><h3>No hay registros en la base de datos</h3><br></div>
 @endforelse

</table>

 {{ $principals->links()}}
</div>
 @endsection
