@extends('layouts.default')

@section('content')
   {{--  {{ dd($sales) }} --}}
    <section class="text-gray-600">
        <div class="container px-5 py-24 mx-auto">
            <div class="w-full mx-auto overflow-auto">
                <div class="flex items-center justify-between mb-2">
                    <h1 class="text-2xl font-medium title-font mb-2 text-gray-900">Clientes</h1>
                    <a href="{{ route('admin.clients.create') }}" class="flex ml-auto text-white bg-indigo-500 border-0 py-1.5 px-3 text-sm focus:outline-none hover:bg-indigo-600 rounded">Adicionar</a>
                </div>
                <table class="table-auto w-full text-left whitespace-no-wrap">
                    <thead>
                    <tr>
                       {{--  <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">#</th> --}}
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Nota</th>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100" style="width: 150px">Imagem</th>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Nome</th>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Endereço</th>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Telefone</th>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Pagamento</th>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Produtos</th>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Total</th>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 text-right">Ações</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y">

                    @foreach ($clients as $client)

                    {{-- LOOP COM PROPRIEDADES  --}}
                        {{-- <pre>
                            {{ var_dump($loop); }}
                        </pre> --}}


                        {{-- COLORE O FUNDO DA LINHA --}}
                        <tr @if($loop->even)class="bg-gray-100"@endif>
                           {{--  <td class="px-4 py-3">{{ $sale->id }}</td> --}}
                            <td class="px-4 py-3">{{ $sale->invoice }}</td>
                            <td class="px-4 py-3">
                                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ Storage::url($client->cover) }}"> {{-- ARTISAN STORAGE:LINK --}}
                            </td>
                            <td class="px-4 py-3">{{ $client->name }}</td>
                            <td class="px-4 py-3">{{ $client->address }}</td>
                            <td class="px-4 py-3">{{ $client->phone1 }}</td>
                            <td class="px-4 py-3">{{ $client->payment }}</td>
                            <td class="px-4 py-3">{{ $client->sale_products }}</td>
                            <td class="px-4 py-3">R${{ $client->total }}</td>
                            <td class="px-4 py-3 text-sm text-right space-x-3 text-gray-900">
                                <a href="{{ route('admin.clients.edit', $client->id) }}" class="mt-3 text-indigo-500 inline-flex items-center">Editar</a>


                                {{-- É NECESSARIO QUE FORM SEJA CRIADO COMO METHOD POST, TRANSFORMA EM METHOD-DELETE COM CSRF E BUTTON --}}
                                <form method="POST" action= "{{ route('admin.clients.destroy', $client->id) }}">

                                    @method('delete')
                                    @csrf

                                    <button type="submit" class="mt-3 text-indigo-500 inline-flex items-center">Deletar</button>

                               </form>

                            </td>
                        </tr>
                     @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
