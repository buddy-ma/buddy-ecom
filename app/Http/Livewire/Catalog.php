<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class Catalog extends Component
{
  /* Wire models */
  public $search;

  public function render()
  {
      return view('livewire.catalog', [
          'listings' => Product::whereLike('name', $this->search ?? ''),
      ]);
  }
}
