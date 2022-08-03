<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {

        //UMA OPÇAO DE BUSCA NO DB
        //$products = Product::where('name', 'like', '%' . $request->search . '%')->get();

        $products = Product::query();
        /* dd($products); */
        $products->when($request->search, function($query, $vl) {
            $query->where('name', 'like', '%' . $vl . '%');

        });

        $products = $products->get(); // O GET DEVE SEMPRE ESTAR NO FINAL DA QUERY BUILDER OU ELOQUENT QUERY

        return view('home', [
            'products' => $products
        ]);
    }
}
