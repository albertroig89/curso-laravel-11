<x-layout>

    <x-slot:title>Listado de notas</x-slot:title>

        <main class="content">
            <div class="cards">

                @forelse($notes as $note)
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
                @empty
                    <p>No tenemos notas</p>
                @endforelse
{{--                    <div class="card card-small">--}}
{{--                        <div class="card-body">--}}
{{--                            <h4>Aprendiendo Blade</h4>--}}

{{--                            --}}{{--S'utilitza per a que imprimixque el text de les variables enlloc del contingut, també podriem posar @{{ $mi_variable }} --}}
{{--                            @verbatim--}}
{{--                                <p>--}}
{{--                                   Para imprimir una variable con Blade utilizamos esta sintaxis:<br>--}}
{{--                                    {{ $mi_variable }}--}}
{{--                                </p>--}}

{{--                                <p>Las directivas de Blade comienzan con arroba, por ejemplo; <br>--}}

{{--                                @foreach</p>--}}

{{--                            @endverbatim--}}
{{--                        </div>--}}

{{--                        <footer class="card-footer">--}}
{{--                            <a class="action-link action-edit">--}}
{{--                                <i class="icon icon-pen"></i>--}}
{{--                            </a>--}}
{{--                            <a class="action-link action-delete">--}}
{{--                                <i class="icon icon-trash"></i>--}}
{{--                            </a>--}}
{{--                        </footer>--}}
{{--                    </div>--}}
            </div>
        </main>
</x-layout>
