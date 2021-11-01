<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Carbon\Carbon;

class Comment extends Component
{
    
    public $comment;

    public $newComment;


    public function mount($com)
    {
        // -----adds user comment in property(variable)----
        $this->comment = $com;
    }    

    public function addComment()
    {
        // ?------returns nothing if comment box is empty---------
        if($this->newComment == ""){
           return;
       }

        // ?---------user post comments in a format that shows the latest post on top------- 
        array_unshift($this->comment,[
            'body' => $this->newComment,
            'created_at' => Carbon::now()->diffForHumans(),
            'user' => 'Silva'
        ]);

        // ?--------clears comment box after user post--------
        $this->newComment = "";
    }

    public function render()
    {
        return view('livewire.comment');
    }
}
