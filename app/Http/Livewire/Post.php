<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Post extends Component
{
    
    public $title;

    public function mount()
    {
        // $this->title = "The livewire squid got one eye!";
    }

    public function render()
    {
        return view('livewire.post');
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }
}
