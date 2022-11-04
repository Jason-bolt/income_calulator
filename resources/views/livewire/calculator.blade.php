<section class="container mx-auto my-20 md:px-6">

    <div class="p-5 flex flex-col items-center justify-center">
        <h1 class="text-5xl text-blue-800 text-center">
            INCOME CALCULATOR
        </h1>
        <p class="mb-0 mt-5 text-center">
            Input the respective values to see a live representation of your expected salary.
        </p>
    </div>

    <div class="p-5 md:px-96">
        <form class="p-5 shadow-lg bg-white md:p-10 rounded-3xl">
            {{-- Pay rate --}}
            <div class="flex flex-col mb-2">
                <p class="text-center my-2">
                    Rate of pay
                </p>
                <select class="form-select rounded-full" name="rate" id="rate">
                    <option wire:click="getRate('Hourly')" value="">Hourly</option>
                    <option wire:click="getRate('Daily')" value="">Daily</option>
                    <option wire:click="getRate('Monthly')" value="">Monthly</option>
                    <option wire:click="getRate('Yearly')" value="">Yearly</option>
                </select>
            </div>

            {{-- Currency --}}
            <div class="flex flex-col mb-2">
                <p class="text-center my-2">
                    Currency
                </p>
                <select class="form-select rounded-full" name="" id="">
                    <option wire:click="getCurrency(1)" value="">GH&#8373;</option>
                    <option wire:click="getCurrency(2)" value="">$</option>
                    <option wire:click="getCurrency(3)" value="">&euro;</option>
                    <option wire:click="getCurrency(4)" value="">&pound;</option>
                    <option wire:click="getCurrency(5)" value="">&#8358;</option>
                </select>
            </div>

            {{-- Amount --}}
            <div class="flex flex-col mb-2">
                <p class="text-center my-2">
                    Amount
                </p>
                <input wire:model="amount" class="form-input rounded-full" type="number" min="0">
            </div>

            {{-- Number of hours a day --}}
            <div class="flex flex-col mb-2">
                <p class="text-center my-2">
                    Number of hours a day
                </p>
                <input wire:model="daily_hours" class="form-input rounded-full" type="number" min="0">
            </div>

            {{-- Work days in the week --}}
            <div class="flex flex-col mb-2">
                <p class="text-center my-2">
                    Work days in the week
                </p>
                <input wire:model="work_days" class="form-input rounded-full" type="number" min="0">
            </div>

            {{-- Off days --}}
            <div class="flex flex-col mb-2">
                <p class="text-center my-2">
                    Number of Off days (If applicable)
                </p>
                <input wire:model="off_days" class="form-input rounded-full" type="number" min="0">
            </div>
        </form>
    </div>

</section>

{{-- Calculation --}}
<section class="container mx-auto mb-20">
    <div class="p-5 md:px-96">
       {{-- Hourly pay --}}
        <div class="flex flex-col item-center justify-center mb-8">
           <p class="text-center">
               Hourly pay
           </p>
           <p class="text-6xl text-center font-serif text-blue-800">
               0.00
           </p>
       </div>

        {{-- Daily pay --}}
        <div class="flex flex-col item-center justify-center mb-8">
           <p class="text-center">
               Daily pay
           </p>
           <p class="text-6xl text-center font-serif text-blue-800">
               0.00
           </p>
       </div>

        {{-- Weekly pay --}}
        <div class="flex flex-col item-center justify-center mb-8">
           <p class="text-center">
               Weekly pay
           </p>
           <p class="text-6xl text-center font-serif text-blue-800">
               0.00
           </p>
       </div>

        {{-- Monthly pay --}}
        <div class="flex flex-col item-center justify-center mb-8">
           <p class="text-center">
               Monthly pay
           </p>
           <p class="text-6xl text-center font-serif text-blue-800">
               0.00
           </p>
       </div>

        {{-- Annual pay --}}
        <div class="flex flex-col item-center justify-center mb-8">
           <p class="text-center">
               Annual pay
           </p>
           <p class="text-6xl text-center font-serif text-blue-800">
               45000.00
           </p>
       </div>
    </div>
</section>
