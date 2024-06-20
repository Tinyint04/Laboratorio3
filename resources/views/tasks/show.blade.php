<h1>Tarea ID: {{ $task->id }}</h1>
<hr>
<h2>{{ $task->name }}</h2>
<p>{{ $task->description }}</p>

<a href="/tasks/{{ $task->id }}/edit">Editar</a> 
<!--<a href="/tasks/{{ $task->id}}/destroy">Eliminar</a>-->

<a href="{{ route('tasks.destroy', ['task' => $task->id]) }}"
    onclick="event.preventDefault(); document.getElementById('delete-task-form-{{ $task->id }}').submit();">
    Eliminar
 </a>
 
 <form id="delete-task-form-{{ $task->id }}" action="{{ route('tasks.destroy', ['task' => $task->id]) }}" method="POST" style="display: none;">
     @csrf
     @method('DELETE')
 </form>
 