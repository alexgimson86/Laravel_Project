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
            <a href ="/tasks/{{ $task->id }}" >
                {{ $task->body }}
            </a>
        </li>
        @endforeach
    </ul>

</body>