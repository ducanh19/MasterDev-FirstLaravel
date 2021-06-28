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

<h3>Edit the schedules</h3>

<form action="{{ URL::to('admin/schedules/'.$schedule->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="title">Title</label><br>
    <input type="text" class="form-control" name="title" value="{{ $schedule->title }}">

    <label for="start">Time start</label><br>
    <input type="datetime-local" class="form-control" name="start" value="{{ $schedule->activity_from }}">

    <label for="end">Time end</label><br>
    <input type="datetime-local" class="form-control" name="end" value="{{ $schedule->activity_to }}">

    <label for="ship">Time ship</label><br>
    <input type="datetime-local" class="form-control" name="ship" value="{{ $schedule->time_ship }}">

    <label for="shop">Shop name</label><br>
    <input type="text" name="shop" class="form-control" value="{{ $schedule->shop_name }}   ">

    <div>
        <input type="submit" value="Update new schedule" class="btn btn-primary">
    </div>
</form>

</div>
</body>
</html>