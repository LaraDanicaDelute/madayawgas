<?php

namespace App\Http\Livewire;

use App\Models\Stocks;
use Livewire\Component;

class Select2Dropdown extends Component
{
 
    public function render()
    {
        
        return view('livewire.select2-dropdown', [
            'stocks' => Stocks::all(),]);
    }

}
