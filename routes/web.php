<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\Admin\Dashboard\DashboardIndex::class)->name('dashboard');
Route::get('/table', \App\Livewire\Admin\Table\TableIndex::class)->name('table');
