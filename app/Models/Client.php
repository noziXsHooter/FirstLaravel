<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [

    'name',
    'slug',
    'address',
    'reference' ,
    'phone1',
    'phone2' ,
    'cpf',
    'identity',
    'email',
    'points',
    'distance',
    'age' ,
    'total',
    'rating',
    'cover',
    'born_in',
    ];
}
