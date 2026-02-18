<x-layout>
    <h1>Lista Tasks</h1>
    <a href="{{ route('tasks.create') }}">Nuovo Task</a>

    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <ul>
        @foreach($tasks as $task)
            <li>
                <a href="{{ route('tasks.show', $task) }}">{{ $task->title }}</a>
                @if(auth()->id() === $task->user_id)
                    <a href="{{ route('tasks.edit', $task) }}">Modifica</a>
                    <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Elimina</button>
                    </form>
                @endif
            </li>
        @endforeach
    </ul>

    {{ $tasks->links() }}
</x-layout>