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
            'NOTA',
            'NOME',
            'ENDEREÇO',
            'REFERÊNCIA',
            'TELEFONE 1' ,
            'TELEFONE 2',
            'CPF',
            'PAGAMENTO',
            'PRODUTOS',
            'DESCONTO',
            'TOTAL',
            'DATA',
        ];
    }

    /**
    * @return \Illuminate\Support\Collection
    */

    public function collection()
    {
        $lessslug = Sale::all();
        $lessslug->makeHidden('id')->toArray();
        $lessslug->makeHidden('slug')->toArray();
        $lessslug->makeHidden('cover')->toArray();
        $lessslug->makeHidden('updated_at')->toArray();git 
        return $lessslug;
    }
}
