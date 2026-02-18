<x-layout>
    <h1>Modifica Task</h1>
    <form action="{{ route('tasks.update', $task) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{ $task->title }}" required>
        <textarea name="body">{{ $task->body }}</textarea>
        <select name="status">
            <option value="pending" @if($task->status=='pending') selected @endif>Pending</option>
            <option value="done" @if($task->status=='done') selected @endif>Done</option>
        </select>
        <button type="submit">Aggiorna</button>
    </form>
</x-layout>