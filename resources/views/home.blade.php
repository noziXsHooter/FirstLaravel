@extends('layouts.default')

@section('content')
   {{--  {{ dd($products) }} --}}


    <section class="text-gray-600">
        <div class="container p-4 mx-auto">
            <section>
                <div class="container p-8 mx-auto">
                    <form method="GET" action="/" class="flex items-center space-x-5">

                        <div>
                            <input type="text" id="search" name="search" value="{{ request()->search }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" />
                        </div>

                        <div>
                            <button type="submit" class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Pesquisar</button>
                        </div>

                    </form>
                </div>
            </section>
            <div class="flex flex-wrap justify-center gap-3">{{-- flex flex-wrap justify-center -m-4 --}}

                @foreach ($products as $product)

                <div class="grid-cols-1 bg-gray-100 rounded-lg shadow-md border w-40 p-2 w-full">
                    <a class="block relative h-48 rounded overflow-hidden">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ Storage::url($product->cover) }}">
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
    </section>
@endsection
