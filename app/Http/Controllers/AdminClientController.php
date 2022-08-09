<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientStoreRequest;
use App\Http\Requests\ClientUpdateRequest;
use App\Http\Requests\SaleStoreRequest;
use App\Http\Requests\SaleUpdateRequest;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class AdminClientController extends Controller
{
            public function index()
            {
                $clients = Client::all();
                return view('admin.clients', compact('clients'));
            }

            //MOSTRAR A PAGINA DE EDITAR FORMULARIO
            public function edit(Client $client)
            {
                return view('admin.client_edit', [
                    'client'=>$client
                ]);
            }

            //RECEBE REQUISICAO PAR DAR UPDATE
            public function update(Client $client, ClientUpdateRequest $request)
            {
                $input = $request->validated();

                if (!empty($input['cover']) && $input['cover']->isValid()){

                    Storage::delete($client->cover ?? ''); //SE UMA NOVA IMAGEM FOR ENVIADA, A IMAGEM ANTERIOR SERÁ APAGADA
                    $file = $input['cover'];
                    $path = $file->store('public/images/sales');
                    $input['cover'] = $path;

                }
                /* dd($input); */
                $client->fill($input);
                $client->save();

                return Redirect::route('admin.clients');
            }

            //MOSTRAR PAGINA DE CRIAR
            public function create()
            {
                return view('admin.client_create');
            }

            //RECEBER A REQUISICAO DE CRIAR, VALIDAR NO FORM REQUEST (HTTP/REQUESTS/SALESTOREREQUEST)
            public function store(ClientStoreRequest $request)
            {
                $input = $request->validated(); //JA VALIDADO NO FORM REQUEST

                //SALVA O SLUG DO NOME
                $input['slug'] = Str::slug($input['name']);

                //SE HOUVER IMAGEM E FOR VALIDO SALVA A IMAGEM
                if (!empty($input['cover']) && $input['cover']->isValid()){

                    $file = $input['cover'];
                    $path = $file->store('public/images/clients');
                    $input['cover'] = $path;

                }

                Client::create($input);

                return Redirect::route('admin.clients');

             }

             public function destroy(Client $client)
            {
                Storage::delete($client->cover ?? '');
                $client->delete();

                return Redirect::route('admin.clients');

             }

             public function destroyImage(Client $client)
            {
                Storage::delete($client->cover ?? '');
                $client->cover = null;
                $client->save();

                return Redirect::back();

             }

    }

