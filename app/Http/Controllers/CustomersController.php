<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required',
            'password'=>'password',
        ]);

        if ($validator->fails()) {
            return redirect('post/create')
                ->withErrors($validator)
                ->withInput();
        }

        $customer=new Customer();
        $customer->name=$request->get('name');
        $customer->phone=$request->get('phone');
        $customer->password=$request->get('password');
        $customer->save();
        return redirect('customers');

    }
    public function show(){

    }
    public function edit(){
        }


    public function update(Request $request,$id){
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'phone' => 'required',
                'password'=>'password',
            ]);

            if ($validator->fails()) {
                return redirect('post/create')
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
