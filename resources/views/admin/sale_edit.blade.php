@extends('layouts.default')

@section('content')

    <section class="text-gray-600">
        <div class="container px-5 py-10 mx-auto">
            <div class="lg:w-2/4 w-full mx-auto overflow-auto">
                <div class="flex items-center justify-between mb-2">
                    <h1 class="text-2xl font-medium title-font mb-2 text-gray-900">Editar venda</h1>
                </div>

                <form enctype="multipart/form-data" method="POST"  action=" {{ route('admin.sales.update', $sale->id) }}">
                    @csrf
                    @method('put')
                    <div class="flex flex-wrap">

                        {{-- ##########  DATA EM FORMATO NORMAL ############# --}}
                        @php
                            $convertdate = date("d-m-Y", strtotime($sale->date));
                            $sale->date = str_replace("-","/","$convertdate");
                        @endphp

                         {{-- DATA --}}
                         <div class="p-2 w-1/2">
                            <div class="datepicker relative" data-mdb-toggle-button="false">
                            <label for="name" class="leading-7 text-sm text-gray-600">Data:</label>
                              <input type="text" id="date" name="date" value="{{ old('date', $sale->date) }}"
                                class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                                data-mdb-toggle="datepicker" placeholder="Escolha uma data"/>
                            </div>
                          </div>

                        {{-- NOTA --}}
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">Nota:</label>
                                <input value="{{ old('invoice', $sale->invoice) }}" type="text" id="invoice" name="invoice" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>

                            @error('invoice')
                                <div class="text-red-400 text-sm">{{ $message }}</div>
                            @enderror

                        </div>

                       {{--  NOME --}}
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">Nome:</label>
                                <input value="{{ old('name', $sale->name) }}" type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>

                            @error('name')
                                <div class="text-red-400 text-sm">{{ $message }}</div>
                            @enderror

                        </div>

                       {{--  ENDERE??O --}}
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">Endere??o:</label>
                                <input value="{{ old('address', $sale->address) }}" type="text" id="address" name="address" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>

                            @error('address')
                                <div class="text-red-400 text-sm">{{ $message }}</div>
                            @enderror

                        </div>

                        {{-- REFERENCIA --}}
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">Refer??ncia:</label>
                                <input value="{{ old('reference', $sale->reference) }}" type="text" id="reference" name="reference" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>

                            @error('reference')
                                <div class="text-red-400 text-sm">{{ $message }}</div>
                            @enderror

                        </div>

                        {{-- TELEFONE 1 --}}
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">Telefone 1:</label>
                                <input value="{{ old('phone1', $sale->phone1) }}" type="text" id="phone1" name="phone1" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" />
                            </div>

                            @error('phone1')
                                <div class="text-red-400 text-sm">{{ $message }}</div>
                            @enderror

                        </div>

                        {{-- TELEFONE 2 --}}
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">Telefone 2:</label>
                                <input value="{{ old('phone2', $sale->phone2) }}" type="text" id="phone2" name="phone2" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" />
                            </div>

{{--                             @error('phone2')
                                <div class="text-red-400 text-sm">{{ $message }}</div>
                            @enderror --}}
                        </div>

                        {{-- CPF --}}
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">CPF:</label>
                                <input value="{{ old('cpf', $sale->cpf) }}" type="text" id="cpf" name="cpf" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" />
                            </div>
{{--
                            @error('cpf')
                                <div class="text-red-400 text-sm">{{ $message }}</div>
                            @enderror
 --}}
                        </div>

                        {{-- FORMA DE PAGAMENTO --}}
                        <div class="p-2 w-1/2">
                            <div class = "relative">
                                <label class="leading-7 text-sm text-gray-600" for="cars">Forma de pagamento:</label>
                                <select name="payment" id="payment"
                                class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-2 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                <option value="{{ old('payment', $sale->cpf) }}"> Escolha uma op????o </option>
                                <option value="cash">Esp??cie</option>
                                <option value="pix">Pix</option>
                                <option value="debit">D??bito</option>
                                <option value="credit">Cr??dito</option>
                                <option value="other">Outro</option>
                                </select>

                            </div>
                        </div>

                        {{-- PRODUTOS --}}
                        <div class="p-2 w-full">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">Produtos:</label>
                                <textarea value="{{ old('sale_products', $sale->sale_products) }}" id="sale_products" name="sale_products"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">{{ $sale->sale_products }}</textarea>
                            </div>

                            @error('sale_products')
                                <div class="text-red-400 text-sm">{{ $message }}</div>
                            @enderror

                        </div>

                        {{-- DESCONTO --}}
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">Desconto:</label>
                                <input value="{{ old('discount', $sale->discount) }}" type="text" id="discount" name="discount" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>

                            @error('discount')
                                <div class="text-red-400 text-sm">{{ $message }}</div>
                            @enderror

                        </div>

                        {{-- TOTAL --}}
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">Total:</label>
                                <input value="{{ old('total', $sale->total) }}" type="text" id="total" name="total" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>

                            @error('total')
                                <div class="text-red-400 text-sm">{{ $message }}</div>
                            @enderror

                        </div>

                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">Imagem da nota:</label>
                                <input type="file" id="cover" name="cover" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"/>
                            </div>

{{--                             @error('cover')
                                <div class="text-red-400 text-sm">{{ $message }}</div>
                            @enderror
 --}}
                        </div>
                        <div class="p-2 w-full">
                            <button type="submit" class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Editar</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection
