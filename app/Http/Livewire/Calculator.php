<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Calculator extends Component
{

    public $rate;
    public $currency;
    public $amount = 0;
    public $work_days = 0;
    public $off_days = 0;

    public function render()
    {
        return view('livewire.calculator');
    }

    public function getRate($rate)
    {
        $this->rate = $rate;
    }

    public function getCurrency($currency)
    {
        $this->currency = $currency;
    }
}
