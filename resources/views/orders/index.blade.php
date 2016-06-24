
@extends("layouts.master")
@section("content")

    <table class="table">
        <thead>
        <tr>
            <th>Amount</th>
        </tr>
        </thead>
        <tbody>


        @foreach($orders as $order)
            <tr>
                <td> {{$order->amount}}</td><
            </tr>

        @endforeach

        </tbody>
    </table>
@stop

