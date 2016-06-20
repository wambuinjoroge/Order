<!DOCTYPE html>
<html>
<head>
    <title>Customers</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text" >
</head>
<body>
<div class="container">
    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{url('customers') }}">Customers!!</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ url('customers') }}">View All Customers</a></li>
            <li><a href="{{ url('customers/create') }}">Create a customer</a></li>
        </ul>
    </nav>
    @yield('content')
</div>
</body>
</html>
