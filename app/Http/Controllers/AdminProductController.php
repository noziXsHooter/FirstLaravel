<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class AdminProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.products', compact('products'));
    }

    //MOSTRAR A PAGINA DE EDITAR FORMULARIO
    public function edit(Product $product)
    {

        return view('admin.product_edit', [
            'product'=>$product
        ]);
    }

    //RECEBE REQUISICAO PAR DAR UPDATE
    public function update(Product $product, Request $request)
    {
            $input = $request->validate([
            'name' => 'string|required',
            'price' => 'string|required',
            'stock' => 'string|nullable',
            'cover' => 'file|nullable',
            'description' => 'string|nullable',

        ]);

        if (!empty($input['cover']) && $input['cover']->isValid()){

            $file = $input['cover'];
            $path = $file->store('products');
            $input['cover'] = $path;

        }

        $product->fill($input);
        $product->save();

        return Redirect::route('admin.products');
    }

    //MOSTRAR PAGINA DE CRIAR
    public function create()
    {
        return view('admin.product_create');
    }

    //RECEBER A REQUISICAO DE CRIAR
    public function store(Request $request)
    {
        $input = $request->validate([
            'name' => 'string|required',
            'price' => 'string|required',
            'stock' => 'string|nullable',
            'cover' => 'file|nullable',
            'description' => 'string|nullable',

        ]);

        //SALVA O SLUG DO NOME
        $input['slug'] = Str::slug($input['name']);

        //SE HOUVER IMAGEM E FOR VALIDO SALVA A IMAGEM
        if (!empty($input['cover']) && $input['cover']->isValid()){

            $file = $input['cover'];
            $path = $file->store('products');
            $input['cover'] = $path;

        }

        Product::create($input);

        return Redirect::route('admin.products');

     }


}
