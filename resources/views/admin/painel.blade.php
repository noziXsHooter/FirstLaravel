@extends('layouts.default')

@section('content')
   {{--  {{ dd($sales) }} --}}
   <section class="text-gray-600 body-font">
    <div class="grid sm:flex items-center py-20 mx-auto">
     {{--  <div class="grid flex-wrap -m-4"> --}}
        <div class="p-4 md:w-2/4">
          <div class="min-w-fit sm:w-25 md:w-20 lg:w-20 border-2 border-gray-200 rounded-lg overflow-hidden">
            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src={{ Storage::url('public/images/painel/salesicon.png') }} alt="blog">
            <div class="flex justify-center p-3">
              <div class="flex items-center flex-wrap ">
                <button type="submit" class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Vendas</button>
              </div>
            </div>
          </div>
        </div>
        <div class="p-4 md:w-2/4">
          <div class="min-w-fit sm:w-25 md:w-32 lg:w-48 border-2 border-gray-200 rounded-lg overflow-hidden">
            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src={{ Storage::url('public/images/painel/productsicon.png') }} alt="blog">
            <div class="flex justify-center p-3">
                <div class="flex items-center flex-wrap ">
                    <button type="submit" class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Produtos</button>
                  </div>
              </div>
            </div>
          {{-- </div> --}}
      </div>
    </div>
  </section>
@endsection
