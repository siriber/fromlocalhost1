<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tailwindcssController extends Controller
{
    public function display () {
        return view('responsive_design');
    }

    public function resptwo () {
        return view('display_one');
    }

    public function respone () {
        return view('responsive_one');
    }

     public function challengeFive () {
        return view('challenge_5');
    }

    public function employeeCard () {
        return view('employee_card_challenge');
    }

    public function landingPage () {
        return view('landing_page');
    }
}
