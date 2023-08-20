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
                    <tr>
                        <td>1</td>
                        <td>Task 1</td>
                        <td>Not Completed</td>
                        <td><a href="">Edit</a> | <a href="">Delete</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>
