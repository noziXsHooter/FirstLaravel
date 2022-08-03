<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice',
        'name',
        'slug',
        'address',
        'reference',
        'phone1' ,
        'phone2',
        'cpf',
        'payment',
        'sale_products',
        'discount',
        'total',
        'cover',        
    ];
}
