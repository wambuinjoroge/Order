@extends('layouts.master')
@section('content')
    <h1>Edit</h1>
    <form method="post" action="{{url('edit/'. $customer->id)}}">
        <div class="form-group">
            <label for="exampleInputEmail1">Amount</label>
            <input type="text" class="form-control" name="amount" value="{{$order->amount}}" placeholder="amount">
        </div>

        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <input type="hidden" name="id" value="{{$customer->id}}">
        <button type="submit" class="btn btn-default">Submit</button>
    </form>

@stop
