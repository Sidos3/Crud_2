<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>task</title>
    <style>

    </style>
</head>

<body>
    <h1>show all tasks</h1>
    <table class="table table-striped-columns">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">title</th>
                <th scope="col">description</th>
                <th scope="col">status</th>
                <th scope="col">due_date</th>
                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($tasks as $task)
                    <td>{{ $task->id }}</td>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->description }}</td>
                    <td>{{ $task->status }}</td>
                    <td>{{ $task->due_date }}</td>
                    <td><a class="btn btn-primary" href="{{ route('task.edit', $task->id) }}" role="button">Edit</a>
                        <a class="btn btn-danger" href="{{route('task.destroy',$task->id)}}" role="button">Delete</a>
                    </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
