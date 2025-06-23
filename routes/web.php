<?php

use App\Enums\RoleEnum;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    if (Auth::check()) {
        $user = Auth::user();
        return redirect()->route('admin.dashboard');
    }
    return redirect()->route('auth.login');
});


Route::prefix('auth')->middleware('guest')->name('auth.')->group(function () {
    Route::get('login', \App\Livewire\Auth\LoginIndex::class)->name('login');
});


Route::prefix('admin')->middleware(['auth', 'role:' . RoleEnum::ADMIN->value])->name('admin.')->group(function () {

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

});
