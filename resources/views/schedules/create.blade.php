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

<h3>Create the schedule</h3>

<form action="{{ URL::to('admin/schedules') }}" method="POST">
    @csrf
    <label for="title">Title</label><br>
    <input type="text" name="title" class="form-control">

    <label for="start">Time start</label><br>
    <input type="datetime-local" name="start" class="form-control">

    <label for="end">Time end</label><br>
    <input type="datetime-local" name="end" class="form-control">

    <label for="ship">Time ship</label><br>
    <input type="datetime-local" name="ship" class="form-control">

    <label for="shop">Shop name</label><br>
    <input type="text" name="shop" class="form-control">

    <div>
        <input type="submit" value="Create new schedule" class="btn btn-primary">
    </div>
</form>

</div>
</body>
</html>