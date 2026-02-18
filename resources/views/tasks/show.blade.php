<x-layout>
    <h1>{{ $task->title }}</h1>
    <p>{{ $task->body }}</p>
    <p>Status: {{ $task->status }}</p>
    <a href="{{ route('tasks.index') }}">Indietro</a>
</x-layout>