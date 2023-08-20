@extends("master")
@section("body")
<form action="{{ url('/todo/update') }}" method="POST">
    @csrf
    <div class="input-container">
        <input
            type="text"
            class="input-field"
            placeholder="Enter your task"
            name="task"
            value="{{ $todo->task }}"
        />
        <input
            type="hidden"
            class="input-field"
            name="todo_id"
            value="{{ $todo->id }}"
        />
        <select class="status-field" name="status">
            <option value="0" {{ $todo->status == 0 ? 'selected' : '' }}>Not Completed</option>
            <option value="1" {{ $todo->status == 1 ? 'selected' : '' }}>Completed</option>
        </select>
        <input type="submit" class="add-button" value="Update Task" />
    </div>
</form>
@endsection
