@extends ('layout.layout')
@section('content')
<div>
    <h2>Informacion de Alumnos</h2>
</div>
 
@foreach ($principals as $principal)    
<h6>{{ $principal->numeroC }}</h6>
            <h6>{{ $principal->nombre }}</h6>
            <h6>{{ $principal->apeP }}</h6>
            <h6>{{ $principal->apeM }}</h6>
            <h6>{{ $principal->calF }}</h6>
@endforeach