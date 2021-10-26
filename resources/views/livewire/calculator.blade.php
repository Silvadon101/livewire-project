<div>
    {{-- Do your work, then step back. --}}

    <div>
        NUM 1: <input id="num1" type="text" value="" wire:model.lazy="val1" />
        <br /><br />

        NUM 2: <input id="num2" type="text" value="" wire:model.lazy="val2" />
        <br />

        <p>Result =>> {{$RetVal}}</p> <br />

        <button wire:click ="addVal()">ADD</button>
        
        <button wire:click ="subtractVal()">SUBTRACT</button>
        
        <button wire:click ="multiplyVal()">MULTIPLY</button>
        
        <button wire:click="divideVal()">DIVIDE</button>
    </div>
</div>
