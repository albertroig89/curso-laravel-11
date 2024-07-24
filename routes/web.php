<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return 'Página de inicio';
});

Route::get('/notas', function () {
    return view('notes.index'); //-> resources/views/notes/index.blade.php
});

Route::get('/notas/crear', function () {
    return view('notes.create'); //-> resources/views/notes/create.blade.php
});

Route::get('/notas/{id}', function ($id) {
    return 'Detalle de la nota: '.$id;
})->whereNumber('id');

Route::get('/notas/{id}/editar', function ($id) {
    return 'Editar nota: '.$id;
})->whereNumber('id');

Route::get('cursos', function () {
    return [
        'Cursos' => [
            'Curso de Laravel 11',
            'Curso de programación orientada a objetos',
            'Curso de Git',
        ]
    ];
});
