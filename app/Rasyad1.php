<?php

namespace App\Exports;

use App\Models\Rasyad;
use Maatwebsite\Excel\Concerns\FromCollection;

class RasyadExport implements FromCollection
{
    public function collection()
    {
        return Rasyad::all();
    }
}