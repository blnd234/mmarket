<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\sell;

class Seller extends Component
{

    public function deleteAll(){
        sell::truncate();
    }
    public function render()
    {
        $array=[
            'sell' => sell::orderBy('id', 'desc')->get(),
            'totalPrice' => sell::sum('price'),
        ];
        return view('livewire.seller', $array);
    }
}
