<div>
    <form wire:submit.prevent="donate">

    @if($currentStep == 1)
        {{-- STEP 1 --}}
        <div class="step1 form-box mb-6 bg-slate-100 max-w-4xl px-6 py-6 mx-auto mt-12 shadow-lg">
            <table class="bg-slate-600 w-full text-center my-5 shadow-xl">
                <tr>
                    <td><h1 class="text-2xl pt-6 font-bold text-yellow-300">Step 1</h1> <h4 class="font-bold pb-6 text-white">Donation Selection</h4></td>
                    <td><h1 class="text-2xl pt-6 font-bold text-slate-400"> Step 2</h1><h4 class="font-bold pb-6 text-gray-400">Billing</h4></td>
                    <td><h1 class="text-2xl pt-6 font-bold text-slate-400"> Step 3</h1><h4 class="font-bold pb-6 text-gray-400">Payment</h4></td>
                    <td><h1 class="text-2xl pt-6 font-bold text-slate-400"> Step 4</h1><h4 class="font-bold pb-6 text-gray-400">Complete</h4></td>
                </tr>
            </table>
            <hr>
            <div class="form-content ml-12">
                <label for="subscriptionType" class="text-xl py-6 font-bold">Donation Type</label> <br>
            <div class="donation-type">
                    <button type="button" class="btn-square bg-slate-400 w-2/12 text-white font-bold text-l my-4 active:bg-yellow-600 focus:bg-yellow-600" wire:click="setDaily()">Daily</button>
                    <button type="button" class="btn-square bg-slate-400 w-2/12 text-white font-bold text-l my-4 active:bg-yellow-600 focus:bg-yellow-600" wire:click="setMonthly()">Monthly</button>
            </div>
            <span class="text-red-600">@error('subscriptionType'){{ $message }}@enderror</span>
                <br>
            <label for="donationAmount" class="text-xl py-6 font-bold">Donation Amount</label> <br>
           @if ($currentDonationType == 1)
                <div class="amount">
<ul class="columns-2 w-6/12  ">
    <li>
        <input type="radio" id="1dollar" name="donationAmount" value="1" class="hidden peer" required>
        <label for="1dollar" class="inline-flex justify-between items-center p-5 w-full text-gray-500 bg-white rounded-lg border border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-yellow-600 peer-checked:text-yellow-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700 ">
            <div class="block">
                <div class="w-full text-lg font-semibold">$1</div>
            </div>
        </label>
    </li>
    <li>
        <input type="radio" id="2dollar" name="donationAmount" value="10" class="hidden peer">
        <label for="2dollar" class="inline-flex justify-between items-center p-5 w-full text-gray-500 bg-white rounded-lg border border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-yellow-600 peer-checked:text-yellow-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
            <div class="block">
                <div class="w-full text-lg font-semibold">$10</div>
            </div>
        </label>
    </li>
    <li>
        <input type="radio" id="25dollar" name="donationAmount" value="25" class="hidden peer">
        <label for="25dollar" class="inline-flex justify-between items-center p-5 w-full text-gray-500 bg-white rounded-lg border border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-yellow-600 peer-checked:text-yellow-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
            <div class="block">
                <div class="w-full text-lg font-semibold">$25</div>
            </div>
        </label>
    </li>
    <li>
        <input type="radio" id="50dollar" name="donationAmount" value="50" class="hidden peer">
        <label for="50dollar" class="inline-flex justify-between items-center p-5 w-full text-gray-500 bg-white rounded-lg border border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-yellow-600 peer-checked:text-yellow-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
            <div class="block">
                <div class="w-full text-lg font-semibold">$50</div>
            </div>
        </label>
    </li>
</ul>

                </div>
           @endif

            @if ($currentDonationType == 2)
            <ul class="columns-2 w-6/12">
                <li>
                    <input type="radio" id="1dollar" name="donationAmount" value="10" class="hidden peer" required>
                    <label for="1dollar" class="inline-flex justify-between items-center p-5 w-full text-gray-500 bg-white rounded-lg border border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-yellow-600 peer-checked:text-yellow-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700 ">
                        <div class="block">
                            <div class="w-full text-lg font-semibold">$10</div>
                        </div>
                    </label>
                </li>
                <li>
                    <input type="radio" id="2dollar" name="donationAmount" value="50" class="hidden peer">
                    <label for="2dollar" class="inline-flex justify-between items-center p-5 w-full text-gray-500 bg-white rounded-lg border border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-yellow-600 peer-checked:text-yellow-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <div class="block">
                            <div class="w-full text-lg font-semibold">$50</div>
                        </div>
                    </label>
                </li>
                <li>
                    <input type="radio" id="25dollar" name="donationAmount" value="100" class="hidden peer">
                    <label for="25dollar" class="inline-flex justify-between items-center p-5 w-full text-gray-500 bg-white rounded-lg border border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-yellow-600 peer-checked:text-yellow-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <div class="block">
                            <div class="w-full text-lg font-semibold">$100</div>
                        </div>
                    </label>
                </li>
                <li>
                    <input type="radio" id="50dollar" name="donationAmount" value="200" class="hidden peer">
                    <label for="50dollar" class="inline-flex justify-between items-center p-5 w-full text-gray-500 bg-white rounded-lg border border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-yellow-600 peer-checked:text-yellow-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <div class="block">
                            <div class="w-full text-lg font-semibold">$200</div>
                        </div>
                    </label>
                </li>
            </ul>
            @endif
            <span class="text-red-600">@error('donationAmount'){{ $message }}@enderror</span>

            </div>
    @endif

    @if ($currentStep == 2)
        {{-- STEP 2 --}}

        <div class="step2 form-box mb-6 bg-slate-100 max-w-4xl px-6 py-6 mx-auto mt-12 shadow-lg">
            <table class="bg-slate-600 w-full text-center my-5 shadow-xl">
                <tr>
                    <td><h1 class="text-2xl pt-6 font-bold text-green-600">Step 1</h1> <h4 class="font-bold pb-6 text-green-600">Donation</h4></td>
                    <td><h1 class="text-2xl pt-6 font-bold text-yellow-300"> Step 2</h1><h4 class="font-bold pb-6 text-white">Billing Information</h4></td>
                    <td><h1 class="text-2xl pt-6 font-bold text-slate-400"> Step 3</h1><h4 class="font-bold pb-6 text-gray-400">Payment</h4></td>
                    <td><h1 class="text-2xl pt-6 font-bold text-slate-400"> Step 4</h1><h4 class="font-bold pb-6 text-gray-400">Complete</h4></td>
                </tr>
            </table>
            <hr>
            <div class="form-content ml-12">
                <label for="fullName" class="font-bold text-slate-600">Full Name *</label> <span class="text-red-600">@error('fullName'){{ $message }}@enderror</span>  <br>
                <input class="h-12 pl-6 bg-slate-200 w-11/12" type="text" placeholder="Full Name" name="fullName" id="fullName" required wire:model="fullName">
                <br> <br>

                <label for="address" class="font-bold text-slate-600">Address *</label> <span class="text-red-600">@error('address'){{ $message }}@enderror</span> <br>
                <input class="h-12 pl-6 bg-slate-200 w-11/12" type="text" placeholder="Address" name="address" id="address" required wire:model="address"> <br> <br>


                <label for="city" class="font-bold text-slate-600">City *</label>  <span class="text-red-600">@error('city'){{ $message }}@enderror</span> <br>
                <input class="h-12 pl-6 bg-slate-200 w-11/12" type="text" placeholder="City" name="city" id="city" required wire:model="city"> <br> <br>


                <label for="country" class="font-bold text-slate-600">Country *</label> <span class="text-red-600">@error('country'){{ $message }}@enderror</span> <br>
                <input class="h-12 pl-6 bg-slate-200 w-11/12" type="text" placeholder="Country" name="country" id="country" required wire:model="country"> <br> <br>


                <label for="email" class="font-bold text-slate-600">Email *</label> <span class="text-red-600">@error('email'){{ $message }}@enderror</span><br>
                <input class="h-12 pl-6 bg-slate-200 w-11/12" type="email" placeholder="Email" name="email" id="email" required wire:model="email"> <br> <br>


                <label for="phone" class="font-bold text-slate-600">Phone Number *</label> <span class="text-red-600">@error('phone'){{ $message }}@enderror</span><br>
                <input class="h-12 pl-6 bg-slate-200 w-11/12" type="number" placeholder="Phone Number" name="phone" id="phone" required wire:model="phone"> <br> <br>


            </div>


    @endif

    @if ($currentStep == 3)
        {{-- STEP 3 --}}

        <div class="step3 form-box mb-6 bg-slate-100 max-w-4xl px-6 py-6 mx-auto mt-12 shadow-lg">
            <table class="bg-slate-600 w-full text-center my-5 shadow-xl">
                <tr>
                    <td><h1 class="text-2xl pt-6 font-bold text-green-600">Step 1</h1> <h4 class="font-bold pb-6 text-green-600">Donation</h4></td>
                    <td><h1 class="text-2xl pt-6 font-bold text-green-600"> Step 2</h1><h4 class="font-bold pb-6 text-green-600">Billing</h4></td>
                    <td><h1 class="text-2xl pt-6 font-bold text-yellow-300"> Step 3</h1><h4 class="font-bold pb-6 text-white">Payment Information</h4></td>
                    <td><h1 class="text-2xl pt-6 font-bold text-slate-400"> Step 4</h1><h4 class="font-bold pb-6 text-gray-400">Complete</h4></td>
                </tr>
            </table>
            <hr>
                <label for="cardFullName" class="font-bold text-slate-600">Card Holder's Full Name *</label> <br>
                <input class="h-12 pl-6 bg-slate-200 w-11/12 mt-2" type="text" placeholder="Card holder's Full name" name="cardFullName" id="cardFullName" required wire:model="cardFullName"> <br> <br>
                <label for="ccNumber" class="font-bold text-slate-600 ">Credit Card Number *</label> <br>
                <input class="h-12 pl-6 bg-slate-200 w-11/12 mt-2" type="number" placeholder="CC Number" name="ccNumber" id="ccNumber" required wire:model="ccNumber"> <br> <br>
                <label for="fullname" class="font-bold text-slate-600">Card Type *</label> <br>
                <select id="ccType" class="h-12 bg-slate-200 w-11/12 font-bold pl-4 mt-2" name="ccType" wire:model="ccType" >
                    <option value="">Select Card Type</option>
                    <option value="Visa">Visa</option>
                    <option value="MasterCard">MasterCard</option>
                    <option value="American Express">American Express</option>
                    <option value="Discover">Discover</option>
                    <option value="Apple Pay">Apple Pay</option>
                </select>
                <br> <br>
                <label for="fullname" class="font-bold text-slate-600">Credit Card Expiration Date *</label> <br>
                <div class="ccexpiration my-6">
                    <select id="month" class="h-12 bg-slate-200 w-2/12 font-bold text-center" name="ccMonth" wire:model="ccMonth">
                        <option value="">Month</option>
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                    <select id="ccyear" class="h-12 bg-slate-200 w-2/12 font-bold text-center" name="ccYear" wire:model="ccYear" >
                        <option value="">Year</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <option value="2027">2027</option>
                        <option value="2028">2028</option>
                        <option value="2029">2029</option>
                        <option value="2030">2030</option>
                    </select>
                    <label for="fullname" class="font-bold text-slate-600 ml-32">CVV *</label>
                <input class="h-12 pl-6 bg-slate-200 w-2/12 ml-6 border-black" type="number" placeholder="CVV" name="cvv" id="cvv" required wire:model="cvv"> <br> <br>
                </div>
                <div class="donationamount">
                    <h1 class="font-bold text-2xl">Today's Donation : <span class="text-green-600">$value</span> </h1>
                </div>



    @endif

    <div class="w-4/12 my-5 ml-12 ">


        @if ($currentStep == 1)
        <button type="button" class="btn btn-md btn-slate-600 my-3 w-24 ml-3" wire:click="increaseStep()">Next</button>
        @endif
        @if ($currentStep == 2)
        <button type="button" class="btn btn-md btn-slate-600 my-3 w-24" wire:click="decreaseStep()">Previous</button>
        <button type="button" class="btn btn-md btn-slate-600 my-3 w-24 ml-3" wire:click="increaseStep()">Next</button>
        @endif
        @if ($currentStep == 3)
        <button type="button" class="btn btn-md btn-slate-600 my-3 w-24 " wire:click="decreaseStep()">Previous</button>
        <button type="button" class="btn btn-md btn-slate-600 my-3 w-24 ml-3" wire:click="increaseStep()">Submit</button>
        @endif
        @if ($currentStep == 4)
        <button type="submit" class="btn btn-md btn-slate-600 my-3 w-24 ">Download Invoice</button>
        @endif


    </div>
    </div>


    </form>
</div>
