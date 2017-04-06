<!DOCTYPE>
<html>

<head>
    <title>
        hello you fucker
    </title>
</head>

<body>
    <h1> Hey there, Welcome to laravel</h1>
    <ul>
        @foreach($tasks as $task)
        <li> {{ $task->body}} </li>
        @endforeach
    </ul>

</body>

</html>