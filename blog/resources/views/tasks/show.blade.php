<!DOCTYPE>
<html>
    <head>
        <title>
            show task
        </title>
    </head>
    <body>
        @if($task->isComplete() == true)

            <h1> Task is complete. </h1>

        @else

            <h1>{{  $task->body }}</h1>
            
        @endif
    </body>
</html>
    