<?php

namespace App\Http\Controllers;


use App\Http\Requests\SaleStoreRequest;
use App\Http\Requests\SaleUpdateRequest;
use App\Models\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Exports\SalesExport;
use Maatwebsite\Excel\Facades\Excel;

class AdminSaleController extends Controller
{
        public function index()
        {
            $sales = Sale::all();
            return view('admin.sales', compact('sales'));
        }

        //MOSTRAR A PAGINA DE EDITAR FORMULARIO
        public function edit(Sale $sale)
        {
            return view('admin.sale_edit', [
                'sale'=>$sale
            ]);
        }

        //RECEBE REQUISICAO PAR DAR UPDATE
        public function update(Sale $sale, SaleUpdateRequest $request)
        {
            $input = $request->validated();

            if (!empty($input['cover']) && $input['cover']->isValid()){

                Storage::delete($sale->cover ?? ''); //SE UMA NOVA IMAGEM FOR ENVIADA, A IMAGEM ANTERIOR SERÁ APAGADA
                $file = $input['cover'];
                $path = $file->store('public/images/sales');
                $input['cover'] = $path;

            }
            /* dd($input); */
            $sale->fill($input);
            $sale->save();

            return Redirect::route('admin.sales');
        }

        //MOSTRAR PAGINA DE CRIAR
        public function create()
        {
            return view('admin.sale_create');
        }

        //RECEBER A REQUISICAO DE CRIAR, VALIDAR NO FORM REQUEST (HTTP/REQUESTS/SALESTOREREQUEST)
        public function store(SaleStoreRequest $request)
        {
            $input = $request->validated(); //JA VALIDADO NO FORM REQUEST

            //SALVA O SLUG DO NOME
            $input['slug'] = Str::slug($input['name']);

            //SE HOUVER IMAGEM E FOR VALIDO SALVA A IMAGEM
            if (!empty($input['cover']) && $input['cover']->isValid()){

                $file = $input['cover'];
                $path = $file->store('public/images/sales');
                $input['cover'] = $path;

            }

            Sale::create($input);

            return Redirect::route('admin.sales');

         }

         //MOSTRA OS DADOS DA VENDA COM A IMAGEM GRANDE
         public function showInvoice(Sale $sale)
         {
            return view('admin.sale_show_invoice', [
                'sale'=>$sale
            ]);
         }

         public function destroy(Sale $sale)
        {
            Storage::delete($sale->cover ?? '');
            $sale->delete();

            return Redirect::route('admin.sales');

         }

         public function destroyImage(Sale $sale)
        {
            Storage::delete($sale->cover ?? '');
            $sale->cover = null;
            $sale->save();

            return Redirect::back();

         }

         public function export()
         {
            return Excel::download(new SalesExport, 'sales.xlsx');

         }
}


