@extends('layouts.default')

@section('content')
   {{--  {{ dd($products) }} --}}


    <section class="text-gray-600">
        <div class="container p-3 mx-auto">
            <div class="w-full mx-auto overflow-auto p-2 bg-indigo-100 border border-blue-300 rounded shadow-lg shadow-purple-700">
                <div class="container p-2 mx-auto">
                    <form method="GET" action="/" class="flex justify-center items-center space-x-5">

                        <div>
                            <input type="text" id="search" name="search" value="{{ request()->search }}" class="w-full bg-gray-20 bg-opacity-50 rounded border border-indigo-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" />
                        </div>

                        <div>
                            <button type="submit" class="transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300 flex ml-auto text-white border-0 py-2 px-6 rounded">Pesquisar</button>
                        </div>

                    </form>
                </div>

            <div class="flex flex-wrap justify-center gap-3">{{-- flex flex-wrap justify-center -m-4 --}}

                @foreach ($products as $product)

                <div class="grid-cols-1 bg-gray-100 rounded-lg shadow-md border w-40 p-2 w-full">
                    <a class="block relative h-48 rounded overflow-hidden">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full transform transition-all hover:scale-125" src="{{ Storage::url($product->cover) }}">
                    </a>
                    <div class="mt-4">
                        <h2 class="text-gray-900 title-font text-lg font-medium">{{ $product->name }}</h2>
                        <p class="mt-1">R${{ $product->price}}</p>
                    </div>
                    <div class="">
                        <a href="{{ route('product', $product->slug) }}" class="mt-3 text-indigo-500 inline-flex items-center">Ver mais
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>

                </div>

                @endforeach

            </div>
        </div>
    </div>
    </section>
@endsection
