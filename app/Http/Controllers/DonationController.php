<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function index(){
        return view('components.donations.donation_form');
    }

    public function store(Request $request){
        $this->validate($request, [

        ])
    }
}
