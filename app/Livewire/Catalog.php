<?php

namespace App\Livewire;

use App\Models\Clothes;
use Illuminate\Support\Facades\Request;
use Livewire\Component;
use Livewire\Attributes\Url;
use Illuminate\Support\Facades\DB;

class Catalog extends Component
{
    public $products;
    #[Url(as: 'type')]
    public $type = [];
    #[Url(as: 'gender')]
    public $gender = [];

    public function mount(): void
    {
        $this->setInitialValuesFromUrl('type');
        $this->setInitialValuesFromUrl('gender');
    }


    private function filterProducts(): void
    {
        $this->products = DB::table('clothes')
            ->join('types', 'clothes.type_id', '=', 'types.id')
            ->when($this->type, function ($query) {
                $query->whereIn('types.name', $this->type);
            })
            ->select('clothes.*')
            ->get();
    }

    public function setInitialValuesFromUrl(string $key): void
    {
        if (Request::query($key)) {
            if (is_array(Request::query($key))) {
                foreach (Request::query($key) as $value) {
                    if (!in_array($value, $this->{$key}, true)) {
                        $this->{$key}[] = Request::query($key);
                    }
                }
            } else {
                $this->{$key} = array();
                if (!in_array(Request::query($key), $this->{$key}, true)) {
                    $this->{$key}[] = Request::query($key);
                }
            }
        }
    }


    public function render()
    {
        $this->filterProducts();

        return view('livewire.app.catalog', ['products' => $this->products]);
    }
}
