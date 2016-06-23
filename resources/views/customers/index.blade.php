
@extends("layouts.layout")
@section("content")

 <table class="table-bordered table-stripped">
     <thead>
      <tr>
       <th>Name</th>
       <th>Phone</th>
      </tr>
     </thead>
     <tbody>
     <tr>
      <td>
       @foreach($customers as $customer)
          <li> {{$customer->$name}}</li>
          <li> {{$customer->$phone}}</li>
       @endforeach
     </td>
    </tr>
     </tbody>
 </table>
@stop

