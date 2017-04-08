<!DOCTYPE>
<html>
    <head>
        <title>
            show task
        </title>
    </head>
    <body>
        @if($task->isComplete() == true)
            <h1>{{  $task->body }}</h1>
        @else
            <h1>Task Complete</h1>
        @endif
    </body>
</html>
    