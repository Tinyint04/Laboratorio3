@extends('layouts.app')

@section('title', 'Task Details')

@section('content')
    <h1>Task ID: {{ $task->id }}</h1>
    <hr>
    <h2>{{ $task->name }}</h2>
    <p>{{ $task->description }}</p>
    <a href="/tasks/{{ $task->id }}/edit" class="btn btn-primary">Edit</a>
    <a href="{{ route('tasks.destroy', ['task' => $task->id]) }}" class="btn btn-danger"
       onclick="event.preventDefault(); document.getElementById('delete-task-form-{{ $task->id }}').submit();">
        Delete
    </a>
    <form id="delete-task-form-{{ $task->id }}" action="{{ route('tasks.destroy', ['task' => $task->id]) }}" method="POST" style="display: none;">
        @csrf
        @method('DELETE')
    </form>
@endsection
