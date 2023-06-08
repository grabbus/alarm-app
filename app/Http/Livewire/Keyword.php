<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Keyword extends Component
{
    public $keywords;
    public string $category;
    public string $catchWord;
    public string $requirement;

    public function mount($keywords)
    {
        $this->keywords = $keywords;
    }

    public function render()
    {
        return view('livewire.keyword');
    }

    public function loadCategory()
    {

    }

    public function loadCatchWord()
    {

    }

    public function loadRequirement()
    {

    }
}
