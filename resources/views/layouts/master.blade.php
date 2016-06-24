<!DOCTYPE html>
<html>
<head>
    <title>Orders</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text" >
</head>
<body>
<div class="container">
    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
           <h2>ORDERS</h2>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ url('orders/create') }}">Create an order</a></li>
        </ul>
    </nav>
    @yield('content')
</div>
</body>
</html>
