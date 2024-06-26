@extends('layouts.app')

@section('title', 'Task List')

@section('content')
    <h1>Task List</h1>
    <a href="/tasks/create" class="btn btn-success mb-3">Create Task</a>
    <ul class="list-group">
        @foreach ($tasks as $task)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="/tasks/{{ $task->id }}">{{ $task->name }}</a>
                <div>
                    <form action="/tasks/{{ $task->id }}/complete" method="POST" style="display: inline;">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-sm btn-success">Complete</button>
                    </form>
                    <a href="/tasks/{{ $task->id }}/edit" class="btn btn-sm btn-primary">Edit</a>
                </div>
            </li>
        @endforeach
    </ul>
@endsection
