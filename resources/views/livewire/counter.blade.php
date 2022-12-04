<div class="centered-container">
  <h1>My livewire counter app</h1>
  <div class="counter">
      <span>{{$count}}</span>
      <button wire:click="increment">Up</button>
      <button wire:click="decrement">Down</button>
  </div>
</div>
