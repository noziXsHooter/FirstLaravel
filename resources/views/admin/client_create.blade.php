@extends('layouts.default')

@section('content')

    <section class="text-gray-600">
        <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-2/4 w-full mx-auto overflow-auto">
                <div class="flex items-center justify-between mb-2">
                    <h1 class="text-2xl font-medium title-font mb-2 text-gray-900">Adicionar venda</h1>
                </div>

                <form enctype="multipart/form-data" method="POST" action=" {{ route('admin.sales.store') }}" >
                    @csrf
                    <div class="flex flex-wrap">

                        {{-- NOTA --}}
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">Nota:</label>
                                <input value="{{ old('invoice') }}" type="text" id="invoice" name="invoice" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>

                            @error('invoice')
                                <div class="text-red-400 text-sm">{{ $message }}</div>
                            @enderror

                        </div>

                       {{--  NOME --}}
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">Nome:</label>
                                <input value="{{ old('name') }}" type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>

                            @error('name')
                                <div class="text-red-400 text-sm">{{ $message }}</div>
                            @enderror

                        </div>

                       {{--  ENDEREÇO --}}
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">Endereço:</label>
                                <input value="{{ old('address') }}" type="text" id="address" name="address" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>

                            @error('address')
                                <div class="text-red-400 text-sm">{{ $message }}</div>
                            @enderror

                        </div>

                        {{-- REFERENCIA --}}
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">Referência:</label>
                                <input value="{{ old('reference') }}" type="text" id="reference" name="reference" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>

                            @error('reference')
                                <div class="text-red-400 text-sm">{{ $message }}</div>
                            @enderror

                        </div>

                        {{-- TELEFONE 1 --}}
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">Telefone 1:</label>
                                <input value="{{ old('phone1') }}" type="text" id="phone1" name="phone1" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" />
                            </div>

                            @error('phone1')
                                <div class="text-red-400 text-sm">{{ $message }}</div>
                            @enderror

                        </div>

                        {{-- TELEFONE 2 --}}
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">Telefone 2:</label>
                                <input value="{{ old('phone2') }}" type="text" id="phone2" name="phone2" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" />
                            </div>

{{--                             @error('phone2')
                                <div class="text-red-400 text-sm">{{ $message }}</div>
                            @enderror --}}
                        </div>

                        {{-- CPF --}}
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">CPF:</label>
                                <input value="{{ old('cpf') }}" type="text" id="cpf" name="cpf" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" />
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
                                <option disabled selected value> Escolha uma opção </option>
                                <option value="cash">Espécie</option>
                                <option value="pix">Pix</option>
                                <option value="debit">Débito</option>
                                <option value="credit">Crédito</option>
                                <option value="other">Outro</option>
                                </select>

                            </div>
                        </div>

                        {{-- PRODUTOS --}}
                        <div class="p-2 w-full">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">Produtos:</label>
                                <textarea id="sale_products" name="sale_products" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">{{ old('sale_products') }}</textarea>
                            </div>

                            @error('sale_products')
                                <div class="text-red-400 text-sm">{{ $message }}</div>
                            @enderror

                        </div>

                        {{-- DESCONTO --}}
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">Desconto:</label>
                                <input value="{{ old('discount') }}" type="text" id="discount" name="discount" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>

                            @error('discount')
                                <div class="text-red-400 text-sm">{{ $message }}</div>
                            @enderror

                        </div>

                        {{-- TOTAL --}}
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">Total:</label>
                                <input value="{{ old('total') }}" type="text" id="total" name="total" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
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
                            <button type="submit" class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Adicionar</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection
