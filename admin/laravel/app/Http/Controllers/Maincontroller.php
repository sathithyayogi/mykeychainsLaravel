<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Maincontroller extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {

        return view('welcome');
    }

    public function paid() {
        $paids = DB::table('order')
        ->where('paymentStatus', '=', 'Paid')
        ->where('paymentStatusDet', '=', 'Success')
        ->paginate(10);

        return view('paid', [
            'paids' => $paids
        ]);
    }

    public function unpaid() {
        $unpaids = DB::table('order')
        ->where('paymentStatus', '=', 'NotPaid')
        ->paginate(10);

        return view('unpaid', [
            'unpaids' => $unpaids
        ]);
    }

    public function contactus() {
        $forms = DB::table('contact_form')
        ->get();

        return view('contact', [
            'forms' => $forms
        ]);
    }
}
