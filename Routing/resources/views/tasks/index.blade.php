<!DOCTYPE html>
<html>
<head>
    <title>Tasks</title>
</head>
<body>
    <h1>All Tasks</h1>
    <ul>
        @foreach ($tasks as $task)
            <li>{{ $task->title }} - {{ $task->is_completed ? 'Completed' : 'Pending' }}</li>
        @endforeach
    </ul>
</body>
</html>