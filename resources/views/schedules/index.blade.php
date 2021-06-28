<!DOCTYPE html>
<html>
<head>
    <title>Shark App</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar text-center" style="background-color: yellow;">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('sharks') }}">Sharks</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('admin/schedules') }}">View All schedules</a></li>
        <li><a href="{{ URL::to('admin/schedules/create') }}">Create a schedule</a>
    </ul>
</nav>

@if ($schedules->isEmpty())
    <h3>No available schedules!</h3>
@else
    <h3>All the schedules</h3>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Title</td>
            <td>Time start</td>
            <td>Time end</td>
            <td>Time ship</td>
            <td>Shop name</td>
        </tr>
    </thead>
    <tbody>
    @foreach($schedules as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->title }}</td>
            <td>{{ $value->activity_from }}</td>
            <td>{{ $value->activity_to }}</td>
            <td>{{ $value->time_ship }}</td>
            <td>{{ $value->shop_name }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the shark (uses the destroy method DESTROY /sharks/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->
                {{ Form::open(array('url' => 'admin/schedules/' . $value->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}

                <!-- edit this shark (uses the edit method found at GET /sharks/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('admin/schedules/' . $value->id . '/edit') }}">Edit</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
</body>
</html>