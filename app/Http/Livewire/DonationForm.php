<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DonationForm extends Component
{
    public $subscriptionType;
    public $donationAmount;
    public $fullName;
    public $address;
    public $city;
    public $country;
    public $email;
    public $phone;
    public $cardFullName;
    public $ccNumber;
    public $ccType;
    public $ccMonth;
    public $ccYear;
    public $cvv;

    public $totalSteps = 4;
    public $currentStep = 1;


    public function setStep(){
        $this -> currentStep=1;
    }

    public function render()
    {
        return view('livewire.donation-form');
    }

    public function increaseStep(){
        $this->resetErrorBag();
        $this->validateData();
        $this->currentStep++;
        if($this->currentStep > $this->totalSteps){
            $this->currentStep = $this->totalSteps;
            // dd($this->currentStep);
        }
    }

    public function decreaseStep(){
        $this->resetErrorBag();
        $this->currentStep--;
        if($this->currentStep < 1){
            $this->currentStep = 1;
        }
    }

    public $currentDonationType = 1;

    public function setDaily(){
        $this->currentDonationType = 1;
    }
    public function setMonthly(){
        $this->currentDonationType = 2;
    }

    public function validateData(){
        if($this->currentStep == 1){
            // $this->validate([
            //     'donationAmount'=>'required|string',
            //     'subscriptionType'=>'required'
            // ]);
        }
        else if ($this->currentStep == 2){
            $this->validate([
                'fullName'=>'required|string',
                'address'=>'required|string',
                'city'=>'required|string',
                'country'=>'required|string',
                'email'=>'required|string',
                'phone'=>'required|string'
            ]);
        }
    }

}


