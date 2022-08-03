<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductStoreRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

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
    public function update(Product $product, ProductStoreRequest $request)
    {
            $input = $request->validated();

        if (!empty($input['cover']) && $input['cover']->isValid()){

            Storage::delete($product->cover ?? ''); //SE UMA NOVA IMAGEM FOR ENVIADA, A IMAGEM ANTERIOR SERÁ APAGADA
            $file = $input['cover'];
            $path = $file->store('public/images/products');
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

    //RECEBER A REQUISICAO DE CRIAR, VALIDAR NO FORM REQUEST (HTTP/REQUESTS/PRODUCTSTOREREQUEST)
    public function store(ProductStoreRequest $request)
    {
        $input = $request->validated(); //JA VALIDADO NO FORM REQUEST

        //SALVA O SLUG DO NOME
        $input['slug'] = Str::slug($input['name']);

        //SE HOUVER IMAGEM E FOR VALIDO SALVA A IMAGEM
        if (!empty($input['cover']) && $input['cover']->isValid()){

            $file = $input['cover'];
            $path = $file->store('public/images/products');
            $input['cover'] = $path;

        }

        Product::create($input);

        return Redirect::route('admin.products');

     }

     public function destroy(Product $product)
    {
        Storage::delete($product->cover ?? '');
        $product->delete();

        return Redirect::route('admin.products');

     }

     public function destroyImage(Product $product)
    {
        Storage::delete($product->cover ?? '');
        $product->cover = null;
        $product->save();

        return Redirect::back();

     }

}
