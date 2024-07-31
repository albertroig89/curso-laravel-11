<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


Route::get('/home', function () {
    return 'Página de inicio';
});


Route::get('/notas', function () {

    $notes = DB::table('notes')

        ->orderBy('created_at', 'desc')
        //Buscar com fer que les notes s'ordeniguen per data de creacio

        ->get();

    return view('notes.index')->with('notes', $notes);
})->name('notes.index');

Route::get('/notas/crear', function () {
    return view('notes.create'); //-> resources/views/notes/create.blade.php
})->name('notes.create');


Route::get('/notas/{id}', function ($id) {

    $note = DB::table('notes')->find($id);
    abort_if($note === null, 404);

    return view('notes.view')
        ->with('note', $note);
})->whereNumber('id')->name('notes.view');


Route::get('/notas/{id}/editar', function ($id) {

    $note = DB::table('notes')->find($id);
    abort_if($note === null, 404); //Si el contingut de la variable es null, retorna un error 404

//    dd($note); S'utilitza per a depurar, ja que pots veure el contingut de la variable en este moment concret

    return 'Editar nota: '.$note->title;
})->whereNumber('id')->name('notes.edit');

