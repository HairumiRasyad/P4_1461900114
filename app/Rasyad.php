<?php

namespace App\Exports;

use App\Models\Rasyad;
use Illuminate\Contracts\View\rasyad_xlxs;
use Maatwebsite\Excel\Concerns\FromCollection;

class Rasyad implements FromCollection
{
    public function collection()
    {
        $rasyad = Rasyad::all();
        return view('rasyad', ['rasyad' => $rasyad]);
    }
}