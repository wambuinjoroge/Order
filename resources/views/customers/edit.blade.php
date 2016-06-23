@extends('layouts.layout')
@section('content')
    <h1>Edit {{ $customer->name }}</h1>
    <form method="post" action="{{url('edit/'. $customer->id)}}">
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" name="name" value="{{$customer->name}}" placeholder="Name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Phone</label>
            <input type="text" class="form-control" name="email" value="{{$customer->email}}" placeholder="Phone">
        </div>
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <input type="hidden" name="id" value="{{$customer->id}}">
        <button type="submit" class="btn btn-default">Submit</button>
    </form>

@stop
