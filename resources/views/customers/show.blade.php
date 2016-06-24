@extends("layouts.layout")
@section("content")
<!--Identify the customer-->

   <h3>Name:{{$customer->name}}</h3>
    <h4>Phone:{{$customer->phone}}</h4>

    <!--Show the orders-->
    <table class="table">
        <thead>
         <tr>
          <th>Amount<th>
         </tr>
        <thead>
        <tbody>
   @foreach($orders as $order)
   <tr>
    <td>{{$order->amount}}<td>
   </tr>
    @endforeach
        </tbody>
    </table>
@endsection