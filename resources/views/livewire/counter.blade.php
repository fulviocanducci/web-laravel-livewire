<div>    
    <div class="text-center">
        <div>
            <h2>{{$counter}}</h2>
        </div>
        <br />    
        <button wire:click="increment" wire:loading.attr="disabled" class="btn btn-primary">Increment</button>
        <button wire:click="decrement" wire:loading.attr="disabled" class="btn btn-danger">Decrement</button>        
    </div>    
</div>
