<?php

namespace App\Exports;

use App\Models\Inventories;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ExportInventory implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view():View
    {

        $inventories = Inventories::orderBy('name', 'asc')->get();
        return view('backend.inventory.table', ['inventories'=>$inventories]);
    }
}
