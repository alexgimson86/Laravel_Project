<!DOCTYPE>
<head>
    <title>
        hey there how are you
    </title>
</head>

<body>
    <h1>sup there foo</h1>
    <ul>
        @foreach ($tasks as $task)
        <li>
            task {{$task->id}} is to {{$task->body}}
        </li>
        @endforeach
    </ul>

</body>

