<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests;
use App\Order;

class OrdersController extends Controller
{
    public function index(){
        $orders=Order::all();
        return view('orders.index',compact('orders'));
    }
    public function create($customer_id){
        return view('orders.create',compact('customer_id'));
    }
    public function store(Request $request){
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
        $order->customer_id=$request->get('customer_id');
        $order->save();
        return redirect('customer/show/'.$request->get('customer_id'));
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
            'amount' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();

            $customer=Customer::find($request->get('id'));

            $order->amount=$request->get('amount');

        }

    }
    public function destroy(){

    }
}