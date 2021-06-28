<!DOCTYPE html>
<html>
<head>
    <title>Shark App</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar text-center ">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('sharks') }}">Sharks</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('admin/schedules') }}">View All schedules</a></li>
        <li><a href="{{ URL::to('admin/schedules/create') }}">Create a schedule</a>
    </ul>
</nav>

<h3>Show the schedules</h3>
</body>
</html>