@extends('layouts.master')
@section('content')

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h1>Create</h1>
    <form method="post" action="{{url('orders/store')}}">

        <div class="form-group">
            <label for="exampleInputEmail1">Amount</label>
            <input type="text"  class="form-control" name="amount" placeholder="amount">
        </div>


        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <input type="hidden" name="customer_id" value="{{$customer_id}}">

        <button type="submit" class="btn btn-default">Submit</button>

    </form>

@stop
