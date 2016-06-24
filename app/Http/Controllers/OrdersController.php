<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests;
use App\Customer;

class CustomersController extends Controller
{
    public function index(){

        $customers=Customer::all();

        return view('customers.index',compact('customers'));

    }
    public function create(){
        return view('customers.create');
    }
    public function store(Request $request){
        //print_r($request->all());
        //exit;
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $customer=new Customer();

        $customer->name=$request->get('name');
        $customer->phone=$request->get('phone');
        $customer->save();
        return redirect('customers');

    }
    public function show($id){
        $customer=Customer::find($id);
        return view("customers.show",compact("customer"));
    }
    public function edit($id){
        $customer=Customer::find($id);
        return view('customers.edit',compact('customer'));
    }
    public function update(Request $request,$id){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required',
            'password'=>'password',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();

            $customer=Customer::find($request->get('id'));

            $customer->name=$request->get('name');
            $customer->phone=$request->get('phone');
            $customer->password=$request->get('password');
        }

    }
    public function destroy(){

    }
}