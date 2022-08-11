@extends('layouts.default')

@section('content')
   {{--  {{ dd($sales) }} --}}
   <section class="text-gray-600">
    <div class="container p-2 mx-auto">
        <div class="w-full mx-auto overflow-auto p-2 bg-indigo-100 border border-blue-300 rounded shadow-lg shadow-purple-700">

            {{-- SEARCH --}}
            <div class="container p-2 mx-auto">
                <form method="GET" action={{ route('admin.products.search') }} class="flex items-center space-x-5">
                    <div>
                        <input type="text" id="search" name="search" value="{{ request()->search }}" class="w-full bg-gray-20 bg-opacity-50 rounded border border-indigo-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" />
                    </div>
                    <div>
                        <button type="submit" class="transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300 flex ml-auto text-white border-0 py-2 px-6 rounded">Pesquisar</button>
                    </div>
                </form>
            </div>
                <div class="flex items-center justify-between mb-2">
                    <h1 class="text-2xl font-medium title-font ml-5 mt-2 mb-2 text-gray-900">Vendas</h1>
                    <a href="{{ route('admin.sales.create') }}" class="flex ml-auto text-white bg-indigo-500 border-0 py-1.5 px-3 text-sm focus:outline-none hover:bg-indigo-600 rounded">Adicionar</a>
                    <a href="{{ route('admin.sales.export') }}" class="flex ml-5 text-white bg-indigo-500 border-0 py-1 px-2 text-sm focus:outline-none hover:bg-indigo-600 rounded">Exportar .xlsx</a>
                </div>
                <div class="overflow-auto rounded-lg border-2{{-- hidden md:block --}}">
                <table class="table-auto w-full text-center whitespace-no-wrap">
                    <thead class="bg-gray-50 border-b-2 border-gray-300">
                    <tr>
                       {{--  <th class="px-4 py-3 title-font tracking-wider font-semibold text-gray-900 text-sm bg-gray-100">#</th> --}}
                        <th class="px-4 py-3 title-font tracking-wider font-semibold text-gray-900 text-sm bg-gray-100">Nota</th>
                        <th class="px-4 py-3 title-font tracking-wider font-semibold text-gray-900 text-sm bg-gray-100" style="width: 150px">Imagem</th>
                        <th class="px-4 py-3 title-font tracking-wider font-semibold text-gray-900 text-sm bg-gray-100">Nome</th>
                        <th class="px-4 py-3 title-font tracking-wider font-semibold text-gray-900 text-sm bg-gray-100">Endereço</th>
                        <th class="px-4 py-3 title-font tracking-wider font-semibold text-gray-900 text-sm bg-gray-100">Telefone</th>
                        <th class="px-4 py-3 title-font tracking-wider font-semibold text-gray-900 text-sm bg-gray-100">Pagamento</th>
                        <th class="px-4 py-3 title-font tracking-wider font-semibold text-gray-900 text-sm bg-gray-100">Produtos</th>
                        <th class="px-4 py-3 title-font tracking-wider font-semibold text-gray-900 text-sm bg-gray-100">Total</th>
                        <th class="px-4 py-3 title-font tracking-wider font-semibold text-gray-900 text-sm bg-gray-100 text-right">Ações</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y">

                    @foreach ($sales as $sale)

                    {{-- LOOP COM PROPRIEDADES  --}}
                        {{-- <pre>
                            {{ var_dump($loop); }}
                        </pre> --}}


                        {{-- COLORE O FUNDO DA LINHA --}}
                        <tr @if($loop->even)class="bg-gray-100"@endif>
                           {{--  <td class="px-4 py-3">{{ $sale->id }}</td> --}}
                            <td class="px-4 py-3">{{ $sale->invoice }}</td>
                            <td class="px-4 py-3">
                                <a href="{{ route('admin.sales.show_invoice', $sale->id) }}">
                                    <img alt="ecommerce" class="object-cover object-center border-4 border-white w-full h-full block transform transition-all hover:scale-150" src="{{ Storage::url($sale->cover) }}"> {{-- ARTISAN STORAGE:LINK --}}
                                </a>
                            </td>
                            <td class="px-4 py-3">{{ $sale->name }}</td>
                            <td class="px-4 py-3">{{ $sale->address }}</td>
                            <td class="px-4 py-3">{{ $sale->phone1 }}</td>
                            <td class="px-4 py-3">{{ $sale->payment }}</td>
                            <td class="px-4 py-3">{{ $sale->sale_products }}</td>
                            <td class="px-4 py-3">R${{ $sale->total }}</td>
                            <td class="px-4 py-3 text-sm text-right space-x-3 text-gray-900">
                                <a href="{{ route('admin.sales.edit', $sale->id) }}" class="mt-3 text-indigo-500 inline-flex items-center">Editar</a>


                                {{-- É NECESSARIO QUE FORM SEJA CRIADO COMO METHOD POST, TRANSFORMA EM METHOD-DELETE COM CSRF E BUTTON --}}
                              {{--   <form method="POST" action= "{{ route('admin.sales.destroy', $sale->id) }}">

                                    @method('delete')
                                    @csrf

                                    <button type="submit" class="mt-3 text-indigo-500 inline-flex items-center">Deletar</button>

                               </form>
 --}}
                            </td>
                        </tr>
                     @endforeach

                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </section>
@endsection
