<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Calculator extends Component
{
    
    public $val1 = 0;
    public $val2 = 0;
    public $RetVal;
    
    public function addVal()
    {
        $this->RetVal = $this->val1 + $this->val2;
    }
    
    public function subtractVal()
    {
        $this->RetVal = $this->val1 - $this->val2;
    }

    public function multiplyVal()
    {
        $this->RetVal = $this->val1 * $this->val2;
    }

    public function divideVal()
    {
        $this->RetVal = $this->val1 / $this->val2;
    }

    public function render()
    {
        return view('livewire.calculator');
    }
}
