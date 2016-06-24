
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
        </tr>

       @endforeach

     </tbody>
 </table>
@stop

