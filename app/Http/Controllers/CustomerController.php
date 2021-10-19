<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    public function index() {
        $customers = Customer::get();
        return view('welcome')->with([
            'customers' => $customers
        ]);
    }
}
