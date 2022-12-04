<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{

  //declare your state variable  - any variable that is public
   //will automatically be passed to the rendered view
    public $count = 0;

    //increments the count value by one when called
    public function increment()
    {
      $this->count++;
    }

    //deccrements the count value by one when called
    public function decrement()
    {
      $this->count--;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
