<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function addCustomer()
    {
        return view('app.admin-panel.customer.add-customer');
    }

    public function storeCustomer(Request $request)

    {
        dd('gsdajg');
    }
}
