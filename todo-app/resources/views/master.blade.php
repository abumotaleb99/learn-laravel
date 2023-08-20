<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Todo App</title>
        <link rel="stylesheet" href="{{ asset('/') }}css/style.css" />
    </head>
    <body>
        <div class="header">
            <h1>Todo App</h1>
        </div>

        <!-- Main Content -->
        @yield('body')

        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Task</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @php($i = 1)
                    @foreach($allTodo as $todo)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $todo->task }}</td>
                        @if($todo->status === 0)
                        <td>Not Completed</td>
                        @else
                        <td>Completed</td>
                        @endif    
                        <td><a href="{{ url('todo/edit', ['id' => $todo->id]) }}">Edit</a> | <a href="{{ url('todo/delete', ['id' => $todo->id]) }}">Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>