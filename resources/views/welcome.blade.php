<!DOCTYPE html>
<html>
<head>
    <title>demo</title>
</head>
<body>
<h1>Tasks</h1>

@foreach($tasks as $task)
	<li>{{ $task->title }}</li>
@endforeach

</body>
</html>

