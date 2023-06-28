@extends('layouts.app')

@section('title', 'The list of tasks')

@section('content')
    <nav class="mb-5">
        <a href="{{ route('tasks.create') }}" class="link">Create New Task</a>
    </nav>

    @forelse ($tasks as $task)
        <div>
            <a href="{{ route('tasks.show', ['task' => $task->id]) }}" @class(['font-bold', 'line-through' => $task->completed])>{{ $task->title }}</a>
        </div>
    @empty
        <div>
            There is no tasks!
        </div>
    @endforelse

    @if($tasks->count())
        <nav class="mt-5">
            {{ $tasks->links() }}
        </nav>
    @endif
@endsection
