@extends("master")
@section("body")
<form action="{{ url('/todo/add') }}" method="POST">
    @csrf
    <div class="input-container">
        <input
            type="text"
            class="input-field"
            placeholder="Enter your task"
            name="task"
        />
        <select class="status-field" name="status">
            <option value="0">Not Completed</option>
            <option value="1">Completed</option>
        </select>
        <input type="submit" class="add-button" value="Add Task" />
    </div>
</form>
@endsection
