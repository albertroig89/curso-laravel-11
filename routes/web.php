<?php

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


Route::get('/home', function () {
    return 'Página de inicio';
});


Route::get('/notas', function () {

    $notes = Note::query()

        ->orderByDesc('created_at')
        //Buscar com fer que les notes s'ordeniguen per data de creacio

        ->get();

    return view('notes.index')->with('notes', $notes);
})->name('notes.index');


Route::get('/notas/crear', function () {
    return view('notes.create'); //-> resources/views/notes/create.blade.php
})->name('notes.create');


Route::post('/notas', function (Request $request){
    Note::create([
        'title' =>  $request->input('title'),
        'content' =>  $request->input('content'),
    ]);

    //return back(); Torna a la mateixa pagina d'on vens
    return redirect()->route('notes.index');
})->name('notes.store');


Route::get('/notas/{id}', function ($id) {

    $note = DB::table('notes')->find($id);
    abort_if($note === null, 404);

    return view('notes.view')
        ->with('note', $note);
})->whereNumber('id')->name('notes.view');


Route::get('/notas/{id}/editar', function ($id) {

    $note = Note::findOrFail($id); //Si el contingut de la variable es null, retorna un error 404

//    dd($note); S'utilitza per a depurar, ja que pots veure el contingut de la variable en este moment concret

    return 'Editar nota: '.$note->title;
})->whereNumber('id')->name('notes.edit');

