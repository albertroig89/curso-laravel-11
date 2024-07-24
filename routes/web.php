<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return 'Página de inicio';
});

Route::get('/notas', function () {
    return 'Listado de notas';
});

Route::get('/notas/crear', function () {
    return 'Crear nueva nota';
});

Route::get('cursos', function () {
    return [
        'Cursos' => [
            'Curso de Laravel 11',
            'Curso de programación orientada a objetos',
            'Curso de Git',
        ]
    ];
});
