<x-layout>

    <x-slot:title>Detalles de la nota {{ $note->id }}</x-slot:title>

    <main class="content">
        <div class="cards">

            <div class="card card-small">
                <div class="card-body">
                    <h4>{{ $note->title }}</h4>


                    <p>
                        {{ $note->content }}
                    </p>
                </div>

                <footer class="card-footer">
                    <a href="{{ route('notes.edit', ['id' => $note->id]) }}" class="action-link action-edit">
                        <i class="icon icon-pen"></i>
                    </a>
                    <a class="action-link action-delete">
                        <i class="icon icon-trash"></i>
                    </a>
                </footer>
            </div>
        </div>
    </main>

</x-layout>
