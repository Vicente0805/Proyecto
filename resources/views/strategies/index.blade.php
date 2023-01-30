
@extends('layout.layout')
@section('title', 'Datos Principales')
@section('content')
<br><br>
<div class="row">
<div class="col-sm-2">
    <a href="{{ route('strategies.create') }}">
        <button class="btn btn-primary">Agregar</button>
    </a>
    <a href="{{ route('principals.index') }}">
        <button class="btn btn-secondary">Atras</button>
    </a>
</div>
<div class="col-sm-10"><h1>Seguimiento de Alumnos - 2° Semestre</h1></div>

</div>

<div class="row">
<thead>
    <table class="table table-bordered border-primary">
        <tr>
    <th scope="col">Materia</th>
    <th rowspan="2">Estrategias</th>
</tr>
</thead>

<tbody>

    @forelse ($strategies as $strategy)
<th>{{ $strategy->materia}}</th>
<th>{{ $strategy->estrategias}}</th>
<th><form action="{{ route('strategies.destroy', $strategy->id) }}" method="post">
    <a href="{{ route('strategies.edit', $strategy->id) }}">Editar</a>
    @csrf
    @method('DELETE')

<button type="submit" class="btn btn-danger">Eliminar</button>
</form></th>
</tbody>
@empty
    <div><h3>no hay registros</h3></div>
@endforelse
</div>
</table>