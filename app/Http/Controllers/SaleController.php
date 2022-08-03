<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function show(Sale $sale)
    {
        return view('sale', [
            'sale' => $sale
        ]);
    }
}
