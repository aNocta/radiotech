<?php

namespace App\Livewire;

use App\Models\Price;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class PriceList extends Component
{
    public $prices;
    public string $sort_by = 'price';
    public string $sort_direction = 'asc';

    public function sort($sort_by = 'price'): void{
        if($sort_by == $this->sort_by){
            $this->sort_direction = $this->sort_direction === 'asc' ? 'desc' : 'asc';
        }
        $this->sort_by = $sort_by;
        $this->prices = Price::all()->sortBy([[$this->sort_by, $this->sort_direction]])->map(fn ($price) => [
            "name" => $price->name,
            "price" => number_format($price->price, 2, ",", " ")." ₽",
        ]);
    }
    public function mount(): void
    {
        $this->prices = Price::all()->sortBy([[$this->sort_by, $this->sort_direction]])->map(fn ($price) => [
            "name" => $price->name,
            "price" => number_format($price->price, 2, ",", " ")." ₽",
        ]);
    }
}
