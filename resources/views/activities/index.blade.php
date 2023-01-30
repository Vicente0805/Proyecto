
@extends('layout.layout')
@section('title', 'Datos Principales')
@section('content')
<br><br>
<div class="row">
<div class="col-sm-2">
    <a href="{{ route('activities.create') }}">
        <button class="btn btn-primary">Agregar</button>
    </a>
    <a href="{{ route('principals.index') }}">
        <button class="btn btn-secondary">Atras</button>
    </a>
</div>
<div class="col-sm-10"><h1>Seguimiento de Alumnos - 2° Semestre</h1></div>

</div>

<div class="col-sm-10">
<thead>
    <table class="table table-bordered border-primary">
        <tr>
    <th scope="col">Nombre</th>
    <th rowspan="2">Valor</th>
    <th rowspan="2">Estado</th>
</tr>
</thead>

<tbody>

    @forelse ($activities as $activity)
<th>{{ $activity->nombre}}</th>
<th>{{ $activity->valor}}</th>
<th>{{ $activity->estado}}</th>
</tbody>
@empty
    <div><h3>no hay registros</h3></div>
@endforelse
</div>
</table>