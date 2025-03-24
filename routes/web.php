<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\Admin\Dashboard\DashboardIndex::class)->name('dashboard');
Route::get('/table', \App\Livewire\Admin\Table\TableIndex::class)->name('table');
Route::get('utils', \App\Livewire\Admin\Utils\UtilsIndex::class)->name('utils');

Route::get('tests', function () {
    $data = [
        [
            'id' => 1,
            'name' => 'ryan'
        ],
        [
            'id' => 3,
            'name' => 'dani'
        ],
        [
            'id' => 4,
            'name' => 'dani'
        ],
        [
            'id' => 5,
            'name' => 'dani'
        ],
        [
            'id' => 6,
            'name' => 'dani'
        ],
        [
            'id' => 7,
            'name' => 'dani'
        ],
        [
            'id' => 8,
            'name' => 'dani'
        ],
        [
            'id' => 9,
            'name' => 'dani'
        ],
        [
            'id' => 10,
            'name' => 'dani'
        ],
        [
            'id' => 11,
            'name' => 'dani'
        ]
    ];
    return response()->json($data);
})->name('tests');
