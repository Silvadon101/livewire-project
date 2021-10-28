<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Carbon\Carbon;

class Comment extends Component
{
    
    public $comment = [
        [
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing, elit. Quo rerum modi porro, accusantium ipsum laudantium velit tempore possimus aut dolores blanditiis reiciendis illum voluptatum assumenda ad consequuntur explicabo. Laborum libero temporibus molestias dignissimos vel optio, architecto, odio magni ratione nam.',
            'created_at' => '12 mins ago',
            'user' => 'Silva'
        ]
    ];

    public $newComment;

    public function addComment()
    {
        // ?------returns nothing if comment box is empty---------
        if($this->newComment == ""){
           return;
       }

        array_unshift($this->comment,[
            'body' => $this->newComment,
            'created_at' => Carbon::now()->diffForHumans(),
            'user' => 'Silva'
        ]);

        $this->newComment = "";
    }

    public function render()
    {
        return view('livewire.comment');
    }
}
