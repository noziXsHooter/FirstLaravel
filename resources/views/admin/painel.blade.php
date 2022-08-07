@extends('layouts.default')

@section('content')
   {{--  {{ dd($sales) }} --}}
   <section class="text-gray-600 body-font">
    <div class="container p-2 mx-auto">
        <div class="w-full mx-auto overflow-auto p-2 border rounded shadow-lg">
            <div class="grid sm:flex sm:p-10 justify-around pb-8">
                {{--  <div class="grid flex-wrap -m-4"> --}}
               <div class="p-4">
                 <div class="min-w-fit sm:w-25 md:w-30 lg:w-35 border-2 shadow-md border-gray-300 bg-indigo-50 rounded-lg overflow-hidden">
                   <img class="lg:h-48 md:h-36 w-full object-cover object-center" src={{ Storage::url('public/images/painel/salesicon.png') }} alt="salespic">
                   <div class="flex justify-center p-3">
                     <div class="flex items-center flex-wrap ">
                       <a href="{{ route('admin.sales') }}" type="submit" class="flex ml-auto font-medium text-white bg-indigo-500 border-0 py-2 px-7 focus:outline-none hover:bg-indigo-400 shadow-lg hover:shadow-indigo-500/50 rounded">VENDAS</a>
                     </div>
                   </div>
                 </div>
               </div>
               <div class="p-4">
                 <div class="min-w-fit sm:w-25 md:w-30 lg:w-35 border-2 shadow-md border-gray-300 bg-indigo-50 rounded-lg overflow-hidden">
                   <img class="lg:h-48 md:h-36 w-full object-cover object-center" src={{ Storage::url('public/images/painel/productsicon.png') }} alt="productspic">
                   <div class="flex justify-center p-3">
                       <div class="flex items-center flex-wrap ">
                           <a href="{{ route('admin.products') }}" type="submit" class="flex ml-auto font-medium text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-400 shadow-lg hover:shadow-indigo-500/50 rounded">PRODUTOS</a>
                         </div>
                     </div>
                   </div>
               </div>  {{-- </div> --}}
               <div class="p-4">
                   <div class="min-w-fit sm:w-25 md:w-30 lg:w-35 border-2 shadow-md border-gray-300 bg-indigo-50 rounded-lg overflow-hidden">
                     <img class="lg:h-48 md:h-36 w-full object-cover object-center" src={{ Storage::url('public/images/painel/clientsicon.png') }} alt="clientspic">
                     <div class="flex justify-center p-3">
                       <div class="flex items-center flex-wrap ">
                         <a href="{{ route('admin.clients') }}" type="submit" class="flex ml-auto font-medium text-white bg-indigo-500 border-0 py-2 px-7 focus:outline-none hover:bg-indigo-400 shadow-lg hover:shadow-indigo-500/50 rounded">CLIENTES</a>
                       </div>
                     </div>
                   </div>
                 </div>
           </div>
        </div>
    </div>
  </section>
@endsection
