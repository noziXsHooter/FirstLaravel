<?php

namespace App\Exports;

use App\Models\Sale;
use App\Models\SaleSpreadSheet;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SalesExport implements FromCollection, WithHeadings
{
    public function headings():array
    {
        return [
            'invoice',
            'name',
            'slug',
            'address',
            'reference',
            'phone1' ,
            'phone2',
            'cpf',
            'payment',
            'sale_products',
            'discount',
            'total',
            'cover',
            'created_at',
        ];
    }

    /**
    * @return \Illuminate\Support\Collection
    */

    public function collection()
    {
        return Sale::all();
    }
}
