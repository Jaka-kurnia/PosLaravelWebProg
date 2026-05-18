<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Product;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function index(){
       return view('sales.index');
    }

    public function create(){
        $data['customers'] = Customer::all();
        $data['products'] = Product::all();
        
        return view('sales.create',$data);
    }

    
}
