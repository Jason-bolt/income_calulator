<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Calculator extends Component
{

    public $rate;
    public $currency;
    public $amount;
    public $work_days;
    public $off_days;

    public function render()
    {
        return view('livewire.calculator');
    }

    public function getRate($rate)
    {
        $this->rate = $rate;
    }
}
