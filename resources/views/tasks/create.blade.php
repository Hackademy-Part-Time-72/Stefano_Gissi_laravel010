<x-layout>
    <h1>Crea Task</h1>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Titolo" required>
        <textarea name="body" placeholder="Corpo"></textarea>
        <select name="status">
            <option value="pending">Pending</option>
            <option value="done">Done</option>
        </select>
        <button type="submit">Salva</button>
    </form>
</x-layout>