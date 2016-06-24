@extends('layouts.layout')
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
    <form method="post" action="{{url('customers/store')}}">

        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text"  class="form-control" name="name" placeholder="Name">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Phone</label>
            <input type="text"  class="form-control" name="phone" placeholder="Phone">
        </div>

        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

        <button type="submit" class="btn btn-default">Submit</button>

    </form>

@stop
