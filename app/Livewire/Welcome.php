<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\sell;


class Welcome extends Component
{
      public $Search;
    public $name;
    public $quantity;
    public $grain;
    public $price;

    protected $rules = [
        'name' => 'required',
        'quantity' => 'required',
        'grain' => 'required',
        'price' => 'required',
    ];

    public function save()
    {
        $this->validate();

        Product::create([
            'name' => $this->name,
            'quantity' => $this->quantity,
            'grain' => $this->grain,
            'price' => $this->price,
        ]);

        session()->flash('success', 'کاڵا تازەکە خەزن کرا');

        // Optional: Clear input after save
        $this->reset(['name', 'quantity', 'grain', 'price']);
    }

    public function Delete($id){
            Product::find($id)->delete();

            session()->flash('delete','کاڵاکە سڕایەوە');
    }

    
public function Sell($id)
{
    $product = Product::findOrFail($id);

    // Insert into sell table
    sell::create([
        'name'     => $product->name,
        'quantity' => $product->quantity,
        'grain'    => $product->grain,
        'price'    => $product->price,
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    // Calculate total items remaining
    $total = ($product->quantity * $product->grain) - 1;

    if ($total <= 0) {
        // No more items left, delete product
        $product->delete();
    } else {
        // Update grain and quantity accordingly
        if ($product->grain > 1) {
            $product->grain -= 1;
        } else {
            $product->quantity -= 1;
            $product->grain = 10; // Optional: reset grain to default
        }

        $product->save();
    }

    session()->flash('delete', 'کاڵاکە فرۆشرا    ');
}




  

    public function render()
    {
        $array =[
            'table' => Product::where('name', 'like', '%' . $this->Search . '%')
                  ->orderBy('id', 'desc')
                  ->get(),

        ];
        return view('livewire.welcome' , $array);
    }
}
