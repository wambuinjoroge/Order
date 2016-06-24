<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests;
use App\Orders;

class OrdersController extends Controller
{
    public function index(){

        $orders=Order::all();

        return view('orders.index',compact('orders'));

    }
    public function create(){
        return view('orders.create');
    }
    public function store(Request $request){
        //print_r($request->all());
        //exit;
        $validator = Validator::make($request->all(), [
            'amount' => 'required',

        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $order=new Order();

        $order->amount=$request->get('amount');
        $order->save();
        return redirect('orders');

    }
    public function show($id){
        $order=order::find($id);
        return view("orders.show",compact("order"));
    }
    public function edit($id){
        $order=Order::find($id);
        return view('orders.edit',compact('order'));
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

            $order->name=$request->get('name');

        }

    }
    public function destroy(){

    }
}