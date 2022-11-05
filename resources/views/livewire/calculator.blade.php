<section class="container mx-auto my-20 xl:px-96 lg:px-32">

    <div class="bg-white">
        <div class="p-5 flex flex-col items-center justify-center">
            <h1 class="text-5xl text-blue-800 text-center pt-5 font-bold">
                INCOME CALCULATOR
            </h1>
        </div>

        <div class="p-5 md:px-2">
            <p class="mb-0 text-center text-blue-800 md:px-8">
                Want to see how much your salary will be based on hourly or daily amounts? Input the respective values to see a live representation of your expected salary.
            </p>
            <form class="p-5 rounded-3xl md:p-10">
                {{-- Pay rate --}}
                <div class="flex flex-col mb-2">
                    <p class="text-center my-2 md:text-left">
                        Rate of pay
                    </p>
                    <select wire:click="clearFields()" class="form-select rounded">
                        <option wire:click="getRate('Hourly')" value="">Hourly</option>
                        <option wire:click="getRate('Daily')" value="">Daily</option>
{{--                        <option wire:click="getRate('Monthly')" value="">Monthly</option>--}}
{{--                        <option wire:click="getRate('Yearly')" value="">Yearly</option>--}}
                    </select>
                </div>

                {{-- Currency --}}
                <div class="flex flex-col mb-2">
                    <p class="text-center my-2 md:text-left">
                        Currency
                    </p>
                    <select class="form-select rounded">
                        <option wire:click="getCurrency('&dollar;'')" value="">&dollar;</option>
                        <option wire:click="getCurrency('&#8373;')" value="">&#8373;</option>
                        <option wire:click="getCurrency('&euro;')" value="">&euro;</option>
                        <option wire:click="getCurrency('&pound;')" value="">&pound;</option>
                        <option wire:click="getCurrency('&#8358;')" value="">&#8358;</option>
                    </select>
                </div>

                {{-- Amount --}}
                <div class="flex flex-col mb-2">
                    <p class="text-center my-2 md:text-left">
                        Amount
                    </p>
                    <input wire:model="amount" wire:change="calculate()" wire:keydown="calculate()" class="form-input rounded" type="number" min="0">
                </div>

                {{-- Number of hours a day --}}
                <div class="flex flex-col mb-2">
                    <p class="text-center my-2 md:text-left">
                        Number of hours a day
                    </p>
                    <input wire:model="daily_hours" wire:change="calculate()" class="form-input rounded" type="number" min="0" max="24">
                </div>

                {{-- Work days in the week --}}
                <div class="flex flex-col mb-2">
                    <p class="text-center my-2 md:text-left">
                        Work days in the week
                    </p>
                    <input wire:model="work_days" wire:change="calculate()" class="form-input rounded" type="number" min="0" max="7">
                </div>

                {{-- Off days --}}
                <div class="flex flex-col mb-2">
                    <p class="text-center my-2 md:text-left">
                        Number of Off days (If applicable, <span class="text-blue-800">only affects annual pay</span>)
                    </p>
                    <input wire:model="off_days" wire:change="calculate()" class="form-input rounded" type="number" min="0">
                </div>
            </form>


            {{-- Calculation result --}}
            <div class="mt-4 text-center p-5 md:p-10">

                <div class="flex flex-col item-center justify-center text-center mb-8">
                    <p>
                        Hourly pay
                    </p>
                    <p class="text-6xl font-serif text-blue-800">
                        <span class="text-2xl">{!! $currency !!}</span> {{ $hourly_pay }}
                    </p>
                </div>

                {{-- Daily pay --}}
                <div class="flex flex-col item-center justify-center text-center mb-8">
                    <p>
                        Daily pay
                    </p>
                    <p class="text-6xl font-serif text-blue-800">
                        <span class="text-2xl">{!! $currency !!}</span> {{ $daily_pay }}
                    </p>
                </div>

                {{-- Weekly pay --}}
                <div class="flex flex-col item-center justify-center text-center mb-8">
                    <p>
                        Weekly pay
                    </p>
                    <p class="text-6xl font-serif text-blue-800">
                        <span class="text-2xl">{!! $currency !!}</span> {{ $weekly_pay }}
                    </p>
                </div>

                {{-- Monthly pay --}}
                <div class="flex flex-col item-center justify-center text-center mb-8">
                    <p>
                        Monthly pay (4 weeks)
                    </p>
                    <p class="text-6xl font-serif text-blue-800">
                        <span class="text-2xl">{!! $currency !!}</span> {{ $monthly_pay }}
                    </p>
                </div>

                {{-- Annual pay --}}
                <div class="flex flex-col item-center justify-center text-center mb-8">
                    <p>
                        Annual pay (12 months)
                    </p>
                    <p class="text-6xl font-serif text-blue-800">
                        <span class="text-2xl">{!! $currency !!}</span> {{ $annual_pay }}
                    </p>
                </div>
            </div>
        </div>
    </div>

</section>
