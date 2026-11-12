<?php

use App\Livewire\Categoria\CategoriaCreate;
use App\Livewire\Categoria\CategoriaEdit;
use App\Livewire\Categoria\CategoriaIndex;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('categoria/create', CategoriaCreate::class)->name('categoria.create');
Route::get('categoria/edit{$id}', CategoriaEdit::class)->name('categoria.edit');
Route::get('categoria/index', CategoriaIndex::class)->name('categoria.index');