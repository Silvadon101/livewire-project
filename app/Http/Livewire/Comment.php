<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Carbon\Carbon;
use App\Models\Comments;

class Comment extends Component
{
    
    public $comment;

    public $newComment;

    protected $rules = [
        'newComment' => 'required|max:455'
    ];


    public function mount()
    {
        // -----adds user comment in property(variable)----
        $com = Comments::latest()->get();
        $this->comment = $com;
    } 

    public function remove($comment_id)
    {
        $comment = Comments::find($comment_id);

        // ------deleting from DB-------
        $comment->delete();

        // --------deleting from collection--------
        $this->comment = $this->comment->except($comment_id);

        // --------deleting from collection--------
        // $this->comment = $this->comment->where('id','!=', $comment_id);
    }

    // --------realtime Validation-------
    public function updated($field)
    {
        $this->validateOnly($field, $this->rules);
    }


    public function addComment()
    {
        
        // ?------returns nothing if comment box is empty---------
/*        if($this->newComment == ""){
           return;
       }
*/

       // -----------Validation-----------
       $this->validate($this->rules);

       // --------New comment from user -----------
       $createdComment = Comments::create(['body'=>$this->newComment,'user_id'=>1]);

       // -------Adding new comment into comments DB-------
       $this->comment->prepend($createdComment);

/*        // ?---------user post comments in a format that shows the latest post on top------- 
        array_unshift($this->comment,[
            'body' => $this->newComment,
            'created_at' => Carbon::now()->diffForHumans(),
            'user' => 'Silva'
        ]);

*/        
    
    // ?--------clears comment box after user post--------
        $this->newComment = "";
    }

    public function render()
    {
        return view('livewire.comment');
    }
}
