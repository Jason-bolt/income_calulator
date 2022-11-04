<section class="container mx-auto my-20 md:px-6">

    <div class="flex items-center justify-center">
        <h1 class="text-3xl">
            INCOME CALCULATOR
        </h1>
    </div>

    <div class="mt-3 p-5 md:px-96">
        <form class="p-5 shadow-lg bg-gray-100 md:p-10 rounded-3xl">
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
<section class="container mx-auto">
    <div class="p-5 md:px-96">
        <p class="text-center">
            Hourly pay
        </p>
    </div>
</section>
