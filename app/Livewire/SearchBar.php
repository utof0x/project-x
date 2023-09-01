<?php

namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Component;
use Illuminate\Support\Facades\Request;

class SearchBar extends Component
{
    public string $gender;
    public string $type;
    public string $category;
    public $genderInputs;

    protected $queryString = [
        'genderInputs' => ['except' => '', 'as' => 'gender']
    ];

    public function mount(): void
    {
        $this->gender = Request::query('gender');
        $this->type = Request::query('type');
        $this->category = Request::query('category');
        $this->genderInputs = [];
    }

    public function render(): View
    {
        return view('livewire.app.search-bar');
    }
}
