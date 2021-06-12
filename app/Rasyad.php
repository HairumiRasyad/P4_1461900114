<?php

namespace App\Exports;

use App\Models\Rasyad;
use Illuminate\Contracts\View\rasyad_xlxs;
use Maatwebsite\Excel\Concerns\FromView;

class Rasyad implements FromView
{
    public function view(): rasyad_xlxs
    {
        return view('exports.rasyad', [
            'rasyad' => rasyad_xlxs::all()
        ]);
    }
}