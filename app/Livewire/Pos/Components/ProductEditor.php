<?php

namespace App\Livewire\Pos\Components;

use App\Models\Item;
use Livewire\Attributes\On;
use Livewire\Component;

class ProductEditor extends Component
{

    public $itemId ='';

    #[On('editProduct')]
    public function editedListener($itemId){
        $this->itemId = $itemId;
    
    }

    
    public function render()
    {
        // dd(Item::find($this->itemId));
        return view('livewire.pos.components.product-editor', [
            'product' => $this->itemId ? Item::find($this->itemId) : null,
        ]);
    }
}
