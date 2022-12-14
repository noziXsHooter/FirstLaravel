@extends('layouts.default')

@section('content')
   {{--  {{ dd($products) }} --}}

    <section class="text-gray-600">
        <div class="container p-2 mx-auto">
            <div class="w-full mx-auto overflow-auto p-2 bg-indigo-100 border border-blue-300 rounded shadow-lg shadow-purple-700">

                {{-- SEARCH --}}
                <div class="container p-3 mx-auto">
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
                    <h1 class="text-2xl font-medium title-font ml-5 mb-2 text-gray-900">Produtos</h1>
                    <a href="{{ route('admin.products.create') }}" class="flex ml-auto text-white bg-indigo-500 border-0 py-1.5 px-3 text-sm focus:outline-none hover:bg-indigo-600 rounded">Adicionar</a>
                </div>

                <div class="overflow-auto rounded-lg border-2 shadow{{-- hidden md:block --}}">
                <table class="table-auto w-full text-center whitespace-no-wrap">
                    <thead class="bg-gray-50 border-b-2 border-gray-300">
                    <tr>
                        <th class="px-4 py-3 title-font tracking-wider font-semibold text-gray-900 text-sm bg-gray-100">#</th>
                        <th class="px-4 py-3 title-font tracking-wider font-semibold text-gray-900 text-sm bg-gray-100" style="width: 150px">Imagem</th>
                        <th class="px-4 py-3 title-font tracking-wider font-semibold text-gray-900 text-sm bg-gray-100">Nome</th>
                        <th class="px-4 py-3 title-font tracking-wider font-semibold text-gray-900 text-sm bg-gray-100">Valor</th>
                        <th class="px-4 py-3 title-font tracking-wider font-semibold text-gray-900 text-sm bg-gray-100">Estoque</th>
                        <th class="px-4 py-3 title-font tracking-wider font-semibold text-gray-900 text-sm bg-gray-100 text-right">A????es</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y">

                    @foreach ($products as $product)

                    {{-- LOOP COM PROPRIEDADES  --}}
                        {{-- <pre>
                            {{ var_dump($loop); }}
                        </pre> --}}


                        {{-- COLORE O FUNDO DA LINHA --}}
                        <tr @if($loop->even)class="bg-gray-100"@endif>
                            <td class="p-3 font-medium">{{ $product->product_id }}</td>
                            <td class="p-3 text-sm">
                                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ Storage::url($product->cover) }}"> {{-- ARTISAN STORAGE:LINK --}}
                            </td>
                            <td class="p-3 text-sm">{{ $product->name }}</td>
                            <td class="p-3 text-sm">R${{ $product->price }}</td>
                            <td class="p-3 text-sm text-center">{{ $product->stock }}</td>
                            <td class="p-3 text-sm text-center text-gray-900">
                                <a href="{{ route('admin.products.edit', $product->id) }}" class="mt-3 text-indigo-500 inline-flex items-center hover:underline">Editar</a>


                                {{-- ?? NECESSARIO QUE FORM SEJA CRIADO COMO METHOD POST, TRANSFORMA EM METHOD-DELETE COM CSRF E BUTTON --}}
                               {{--  <form method="POST" action= "{{ route('admin.products.destroy', $product->id) }}">

                                    @method('delete')
                                    @csrf

                                    <button type="submit" class="mt-3 text-indigo-500 inline-flex items-center hover:underline">Deletar</button>

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
