<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tasks Management</title>
</head>
<body>
<form action="{{ url('tasks') }}" method="post">
    @csrf
    <input type="text" name="name">
    <input type="text" name="description">
    <input type="submit" value="Create Task">
</form>

<h1>Tasks Management</h1>
<ul>
    @foreach ($tasks as $task)
        <li>
            {{$task->name}}
            {{$task->description}}
        </li>
    @endforeach
</ul>
</body>
</html>
