<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Calculator extends Component
{

    public $rate;
    public $currency = '&dollar;';
    public $amount = 0;
    public $work_days = 0;
    public $off_days = 0;
    public $daily_hours = 0;

//    Results
    public $hourly_pay = 0.00;
    public $daily_pay = 0.00;
    public $weekly_pay = 0.00;
    public $monthly_pay = 0.00;
    public $annual_pay = 0.00;


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
