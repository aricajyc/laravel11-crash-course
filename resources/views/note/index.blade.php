<x-app-layout>
    <div class="note-container py-12">
        <a href="{{ route('note.create') }}" class="new-note-btn">
            New Note
        </a>
        <div class="notes">
            @foreach ($notes as $note)
                <div class="note">
                    <div class="note-body">
                        {{-- 
                            note object->note column
                            Str::words is a method to limit how many words
                            to be displayed. In this case, 30 words
                        --}}
                        {{ Str::words($note->note, 30) }}
                    </div>
                    <div class="note-buttons">
                        <a href="{{ route('note.show', $note) }}" class="note-edit-button">View</a>
                        <a href="{{ route('note.edit', $note) }}" class="note-edit-button">Edit</a>
                        <form action="{{ route('note.destroy', $note) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="note-delete-button">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach

        </div>
        
        <div class="p-6">
            {{ $notes->links() }}
        </div>
        
        {{-- above is pagination link, by default it's gonna be ugly without tailwind classes --}}
    </div>
</x-app-layout>
