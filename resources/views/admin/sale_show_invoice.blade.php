@extends('layouts.default')
{{-- {{ dd($sale); }} --}}
@section('content')
   <section class="text-gray-600">
        <div class="container p-2 mx-auto">
            <div class="w-full mx-auto overflow-auto p-2 bg-indigo-100 border border-blue-300 rounded shadow-lg shadow-purple-700">
                <div class="flex flex-wrap justify-center gap-1">
                    <div class="grid-cols-1 bg-gray-100 rounded-lg shadow-md border w-80 h-96 p-2">
                        <img alt="ecommerce" class="object-cover object-center border-4 border-white w-full h-full block transform transition-all hover:scale-150" src="{{ Storage::url($sale->cover) }}"> {{-- ARTISAN STORAGE:LINK --}}
                    </div>
                        <div class="grid-cols-1 bg-gray-100 rounded-lg shadow-md border w-80 h-96 p-2">
                            <div class="grid-cols-2">
                                <div>
                                    <label for="" class="text-purple-700 underline hover:text-blue-600">Nota:</label>
                                    <label for="">{{ $sale->invoice }}</label>
                                </div>
                            </div>
                            <div class="grid-cols-2">
                                <div>
                                    <label for="name" type="text" class="text-purple-700 underline hover:text-blue-600">Nome:</label>
                                    <label for="name">{{ $sale->name }}</label>
                                </div>
                            </div>
                            <div class="grid-cols-2">
                                <div>
                                    <label for="" class="text-purple-700 underline hover:text-blue-600">Endereço:</label>
                                    <label for="">{{ $sale->address }}</label>
                                </div>
                            </div>
                            <div class="grid-cols-2">
                                <div>
                                    <label for="" class="text-purple-700 underline hover:text-blue-600">Referência</label>
                                    <label for="">{{ $sale->reference }}</label>
                                </div>
                            </div>
                            <div class="grid-cols-2">
                                <div>
                                    <label for="" class="text-purple-700 underline hover:text-blue-600">Telefone 1:</label>
                                    <label for="">{{ $sale->phone1 }}</label>
                                </div>
                            </div>
                            <div class="grid-cols-2">
                                <div>
                                    <label for="" class="text-purple-700 underline hover:text-blue-600">Telefone 2:</label>
                                    <label for="">{{ $sale->phone2 }}</label>
                                </div>
                            </div>
                            <div class="grid-cols-2">
                                <div>
                                    <label for="" class="text-purple-700 underline hover:text-blue-600">CPF:</label>
                                    <label for="">{{ $sale->cpf }}</label>
                                </div>
                            </div>
                            <div class="grid-cols-2">
                                <div>
                                    <label for="" class="text-purple-700 underline hover:text-blue-600">Produtos:</label>
                                    <label for="">{{ $sale->sale_products }}</label>
                                </div>
                            </div>
                            <div class="grid-cols-2">
                                <div>
                                    <label for="" class="text-purple-700 underline hover:text-blue-600">Desconto:</label>
                                    <label for="">{{ $sale->discount }}</label>
                                </div>
                            </div>
                            <div class="grid-cols-2">
                                <div>
                                    <label for="" class="text-purple-700 underline hover:text-blue-600">Total:</label>
                                    <label for="">{{ 'R$'. $sale->total . '.00'}}</label>
                                </div>
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
