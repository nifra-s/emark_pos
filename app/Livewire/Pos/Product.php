<?php

namespace App\Livewire\Pos;

use App\Models\Item;
use App\Models\ItemCategory;
use Livewire\Component;
use phpDocumentor\Reflection\Types\String_;

class Product extends Component
{
    public String $filter_category;
    public String $search="";
    public function catFilter($id){
        $this->filter_category = $id;
    }
    public function render()
    {
        $query = Item::join('item_categories', 'items.itmCatid', '=', 'item_categories.id')
    ->where('itmNm', 'like', '%' . $this->search . '%')
    ->select('items.*', 'item_categories.id as category_id', 'item_categories.catagory_nm');


        if (!empty($this->filter_category)) {
            $query->where('itmCatid', $this->filter_category);
        }

        return view('livewire.pos.product', [
            'categories' => ItemCategory::all(),
            'products' => $query->get(),
        ]);
    }
}
