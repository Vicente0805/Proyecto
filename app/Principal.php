<?php

namespace App;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Principal extends Model
{
    protected $fillable = [
        'numeroC',
        'nombre',
        'apeP',
        'apeM',
        'cal1',
        'cal2',
        'cal3',
        'cal4',
        'cal5',
        'U1',
        'U2',
        'U3',
        'U4',
        'U5',
        'calF',
        'foto_profesor'
    ];
}
