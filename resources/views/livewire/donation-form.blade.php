<div>
   <form action="#" method="post">

    {{-- STEP 1 --}}

    <div class="step1 form-box bg-slate-100 max-w-4xl px-6 py-6 mx-auto mt-12 shadow-lg rounded-b-md">
        <table class="bg-slate-600 w-full rounded-lg text-center my-5 shadow-xl">
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
        <select class="h-12 pl-6 bg-slate-200 w-8/12 font-bold mt-6" name="subscriptionType" id="subscriptionType">
            <option value="">== Select Subscription Type ==</option>
            <option value="daily">Daily</option>
            <option value="monthly">Monthly</option>
        </select> <br> <br>
        <label for="donationAmount" class="text-xl py-6 font-bold">Donation Amount</label> <br>
        <select class="h-12 pl-6 bg-slate-200 w-8/12 font-bold mt-6"name="donationAmount" id="donationAmount">
            <option value="">== Select Donation Amount ==</option>
            <option value="1">$ 1</option>
            <option value="10">$ 10</option>
            <option value="25">$ 25</option>
            <option value="50">$ 50</option>
        </select>
        <div class="next">
            <button class="btn-square bg-yellow-300 rounded-lg w-32 text-slate-600 font-bold my-6">Next</button>
        </div>
        </div>

    </div>

    {{-- STEP 2 --}}

    <div class="step2 form-box bg-slate-100 max-w-4xl px-6 py-6 mx-auto mt-12 shadow-lg rounded-b-md">
        <table class="bg-slate-600 w-full rounded-lg text-center my-5 shadow-xl">
            <tr>
                <td><h1 class="text-2xl pt-6 font-bold text-green-600">Step 1</h1> <h4 class="font-bold pb-6 text-green-600">Donation</h4></td>
                <td><h1 class="text-2xl pt-6 font-bold text-yellow-300"> Step 2</h1><h4 class="font-bold pb-6 text-white">Billing Information</h4></td>
                <td><h1 class="text-2xl pt-6 font-bold text-slate-400"> Step 3</h1><h4 class="font-bold pb-6 text-gray-400">Payment</h4></td>
                <td><h1 class="text-2xl pt-6 font-bold text-slate-400"> Step 4</h1><h4 class="font-bold pb-6 text-gray-400">Complete</h4></td>
            </tr>
        </table>
        <hr>
        <div class="form-content ml-12">
            <label for="fullname" class="font-bold text-slate-600">Full Name *</label> <br>
            <input class="h-12 pl-6 bg-slate-200 w-11/12" type="text" placeholder="Full Name" name="fullName" id="fullName" required> <br> <br>
            <label for="fullname" class="font-bold text-slate-600">Address *</label> <br>
            <input class="h-12 pl-6 bg-slate-200 w-11/12" type="text" placeholder="Address" name="address" id="address" required> <br> <br>
            <label for="fullname" class="font-bold text-slate-600">City *</label> <br>
            <input class="h-12 pl-6 bg-slate-200 w-11/12" type="text" placeholder="City" name="city" id="city" required> <br> <br>
            <label for="fullname" class="font-bold text-slate-600">Country *</label> <br>
            <input class="h-12 pl-6 bg-slate-200 w-11/12" type="text" placeholder="Country" name="country" id="country" required> <br> <br>
            <label for="fullname" class="font-bold text-slate-600">Email *</label> <br>
            <input class="h-12 pl-6 bg-slate-200 w-11/12" type="email" placeholder="Email" name="email" id="email" required> <br> <br>
            <label for="fullname" class="font-bold text-slate-600">Phone Number *</label> <br>
            <input class="h-12 pl-6 bg-slate-200 w-11/12" type="number" placeholder="Phone Number" name="phone" id="phone" required> <br> <br>
        <div class="next">
            <button class="btn-square bg-yellow-300 rounded-lg w-32 text-slate-600 font-bold my-6">Previous</button>
            <button class="btn-square bg-yellow-300 rounded-lg w-32 text-slate-600 font-bold my-6">Next</button>
        </div>

    </div>
</div>

    {{-- STEP 3 --}}

    <div class="step3 form-box bg-slate-100 max-w-4xl px-6 py-6 mx-auto mt-12 shadow-lg rounded-b-md">
        <table class="bg-slate-600 w-full rounded-lg text-center my-5 shadow-xl">
            <tr>
                <td><h1 class="text-2xl pt-6 font-bold text-green-600">Step 1</h1> <h4 class="font-bold pb-6 text-green-600">Donation</h4></td>
                <td><h1 class="text-2xl pt-6 font-bold text-green-600"> Step 2</h1><h4 class="font-bold pb-6 text-green-600">Billing</h4></td>
                <td><h1 class="text-2xl pt-6 font-bold text-yellow-300"> Step 3</h1><h4 class="font-bold pb-6 text-white">Payment Information</h4></td>
                <td><h1 class="text-2xl pt-6 font-bold text-slate-400"> Step 4</h1><h4 class="font-bold pb-6 text-gray-400">Complete</h4></td>
            </tr>
        </table>
        <hr>
        <div class="form-content ml-12">
            <label for="fullname" class="font-bold text-slate-600">Card Holder's Full Name *</label> <br>
            <input class="h-12 pl-6 bg-slate-200 w-11/12 mt-2" type="text" placeholder="Full Name" name="fullName" id="fullName" required> <br> <br>
            <label for="fullname" class="font-bold text-slate-600 ">Credit Card Number *</label> <br>
            <input class="h-12 pl-6 bg-slate-200 w-11/12 mt-2" type="text" placeholder="Full Name" name="address" id="address" required> <br> <br>
            <label for="fullname" class="font-bold text-slate-600">Card Type *</label> <br>
            <select id="ccType" class="h-12 bg-slate-200 w-11/12 font-bold pl-4 mt-2" name="ccType" >
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
                <select id="month" class="h-12 bg-slate-200 w-2/12 font-bold text-center" name="ccMonth" >
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
                <select id="ccyear" class="h-12 bg-slate-200 w-2/12 font-bold text-center" name="ccYear" >
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
            <input class="h-12 pl-6 bg-slate-200 w-2/12 ml-6 border-black" type="text" placeholder="CVV" name="cvv" id="cvv" required> <br> <br>
            </div>
            <div class="donationamount">
                <h1 class="font-bold text-2xl">Today's Donation : <span class="text-green-600">$value</span> </h1>
            </div>
        <div class="next">
            <button class="btn-square bg-yellow-300 rounded-lg w-32 text-slate-600 font-bold my-6">Previous</button>
            <button class="btn-square bg-yellow-300 rounded-lg w-32 text-slate-600 font-bold my-6">Next</button>
        </div>
    </div>
</div>

   </form>
</div>
