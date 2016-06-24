
@extends("layouts.layout")
@section("content")

 <table class="table">
     <thead>
      <tr>
       <th>Name</th>
       <th>Phone</th>
      </tr>
     </thead>
     <tbody>


       @foreach($customers as $customer)

        <tr>
            <td> {{$customer->name}}</td><
            <td> {{$customer->phone}}</td>
            <td><a href="{{url('customer/show',['id'=>$customer->id])}}",>View order</a></td>
            <td> <a href="{{url('orders/create',['customer_id'=>$customer->id])}}">Add order</a></td>
        </tr>
       @endforeach

     </tbody>
 </table>
@stop

