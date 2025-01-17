@extends('layout.main')
@section('component_content')
@include('components.navbar')
<main class="font-poppins">
    <div class="bg-donate-before-login h-fit w-full leading-relaxed">
        <div style="background: linear-gradient(rgba(0,0,0,0.25), rgba(0,0,0,0.25)), url('images/donateBackground2.jpg'); background-size: 120%;"
            class="donate-section-one h-[937px] w-full pl-[147px] bg-no-repeat flex items-center">
            <div
                class="donate-section-one-content bg-[#FFFCF0] h-[352px] w-[680px] py-[89px] px-[48px] text-[#282222] flex flex-col space-y-[24px]">
                <h1 class="text-[40px] font-medium">We need your help</h1>
                <h2 class="text-[20px] text-justify">Donated contributions help lonely seniors and persons with
                    disabilities have access to nutritious, well-balanced meals that promote independence and
                    overall health.</h2>
            </div> <!-- donate-section-one-content -->
        </div> <!-- donate-section-one -->

        <div class="donate-section-two bg-[#FFFCF0] py-[129px] flex justify-center">
            <div
                class="donate-section-two-content h-fit w-[615px] text-[#282222] flex flex-col items-center space-y-[56px]">
                <h1 class="text-[40px] font-medium">Single help create a difference</h1>
                <p class="text-[20px] text-justify">
                    Your contribution to Merry Meal will make a difference in the lives of our elders and the
                    homebound. Every dollar counts in ending senior hunger. Please be as charitable as you can. And
                    I appreciate your help in advance. Every day, our drivers and volunteers visit the most
                    vulnerable members of our communities, the elders. Simply stated, a meal is provided. In
                    actuality, though, these deliveries bring far more everyday engagement and camaraderie. This
                    visitor may be the only person the senior sees all day on some days. It is critical that we
                    check on our elderly neighbors.
                </p>
                <a href="{!! route('donation.form') !!}"><button
                        class="h-[63px] w-[370px] bg-[#FFFCF0] text-[#A07C00] border-2 border-[#A07C00] box-border hover:scale-105 duration-500">Start
                        to Donate</button></a>
            </div> <!-- donate-section-two-content -->
        </div> <!-- donate-section-two -->
    </div> <!-- bg-donate-before-login -->
</main>
@include('components.footer')
@endsection