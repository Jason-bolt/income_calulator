<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Calculator extends Component
{

//    Constants
    private $days_in_a_month = 30;
    private $months_in_a_year = 12;


    public $rate = 'Hourly';
    public $currency = '&dollar;';
    public $amount = 0;
    public $daily_hours = 0;
    public $work_days = 0;
    public $off_days = 0;

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

    public function calculate()
    {
        if ($this->rate == 'Hourly')
        {
            $this->hourly_pay = $this->amount;
            $this->daily_pay = (int)$this->amount * (int)$this->daily_hours;
            $this->weekly_pay = (int)$this->daily_pay * (int)$this->work_days;
            $this->monthly_pay = (int)$this->weekly_pay * $this->days_in_a_month;
            $this->annual_pay = (int)$this->monthly_pay * $this->months_in_a_year;
        }
    }

}
