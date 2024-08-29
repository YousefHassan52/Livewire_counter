<div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="text-center">
        <h1>Livewire Counter</h1>
        <div class="d-flex justify-content-center align-items-center mt-4">
            <button type="button" class="btn btn-danger" wire:click="minus">-</button>
            <div class="mx-3" style="width: 50px; text-align: center;">{{$counter}}</div>
            <button class="btn btn-primary" wire:click="plus">+</button>
        </div>
    </div>
</div>