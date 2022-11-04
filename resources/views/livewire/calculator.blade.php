<section class="container mx-auto my-20 md:px-96">

    <div class="bg-white">
        <div class="p-5 flex flex-col items-center justify-center">
            <h1 class="text-5xl text-blue-800 text-center pt-5 font-bold">
                INCOME CALCULATOR
            </h1>
        </div>

        <div class="p-5 md:px-2">
            <p class="mb-0 text-center text-blue-800">
                Want to see how much you will make with your current or upcoming salary? Input the respective values to see a live representation of your expected salary.
            </p>
            <form class="p-5 rounded-3xl md:p-10">
                {{-- Pay rate --}}
                <div class="flex flex-col mb-2">
                    <p class="text-center my-2 md:text-left">
                        Rate of pay
                    </p>
                    <select class="form-select rounded" name="rate" id="rate">
                        <option wire:click="getRate('Hourly')" value="">Hourly</option>
                        <option wire:click="getRate('Daily')" value="">Daily</option>
                        <option wire:click="getRate('Monthly')" value="">Monthly</option>
                        <option wire:click="getRate('Yearly')" value="">Yearly</option>
                    </select>
                </div>

                {{-- Currency --}}
                <div class="flex flex-col mb-2">
                    <p class="text-center my-2 md:text-left">
                        Currency
                    </p>
                    <select class="form-select rounded" name="" id="">
                        <option wire:click="getCurrency('&dollar;'')" value="">&dollar;</option>
                        <option wire:click="getCurrency('GH&#8373;')" value="">GH&#8373;</option>
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
                    <input wire:model="amount" class="form-input rounded" type="number" min="0">
                </div>

                {{-- Number of hours a day --}}
                <div class="flex flex-col mb-2">
                    <p class="text-center my-2 md:text-left">
                        Number of hours a day
                    </p>
                    <input wire:model="daily_hours" class="form-input rounded" type="number" min="0">
                </div>

                {{-- Work days in the week --}}
                <div class="flex flex-col mb-2">
                    <p class="text-center my-2 md:text-left">
                        Work days in the week
                    </p>
                    <input wire:model="work_days" class="form-input rounded" type="number" min="0">
                </div>

                {{-- Off days --}}
                <div class="flex flex-col mb-2">
                    <p class="text-center my-2 md:text-left">
                        Number of Off days (If applicable)
                    </p>
                    <input wire:model="off_days" class="form-input rounded" type="number" min="0">
                </div>
            </form>


            {{-- Calculation result --}}
            <div class="mt-4 text-center p-5 md:p-10">

                <div class="flex flex-col item-center justify-center text-center mb-8">
                    <p>
                        Hourly pay
                    </p>
                    <p class="text-6xl font-serif text-blue-800">
                        {!! $currency !!} {{ $hourly_pay }}
                    </p>
                </div>

                {{-- Daily pay --}}
                <div class="flex flex-col item-center justify-center text-center mb-8">
                    <p>
                        Daily pay
                    </p>
                    <p class="text-6xl font-serif text-blue-800">
                        {!! $currency !!} {{ $daily_pay }}
                    </p>
                </div>

                {{-- Weekly pay --}}
                <div class="flex flex-col item-center justify-center text-center mb-8">
                    <p>
                        Weekly pay
                    </p>
                    <p class="text-6xl font-serif text-blue-800">
                        {!! $currency !!} {{ $weekly_pay }}
                    </p>
                </div>

                {{-- Monthly pay --}}
                <div class="flex flex-col item-center justify-center text-center mb-8">
                    <p>
                        Monthly pay
                    </p>
                    <p class="text-6xl font-serif text-blue-800">
                        {!! $currency !!} {{ $monthly_pay }}
                    </p>
                </div>

                {{-- Annual pay --}}
                <div class="flex flex-col item-center justify-center text-center mb-8">
                    <p>
                        Annual pay
                    </p>
                    <p class="text-6xl font-serif text-blue-800">
                        {!! $currency !!} {{ $annual_pay }}
                    </p>
                </div>
            </div>
        </div>
    </div>

</section>
