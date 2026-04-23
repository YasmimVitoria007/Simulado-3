<?php

use App\Livewire\Produto\ProdutoCreate;
use App\Livewire\Produto\ProdutoEdit;
use App\Livewire\Produto\ProdutoIndex;
use Illuminate\Support\Facades\Route;

route::get('/produto/create', ProdutoCreate::class)->name('produto.create');
route::get('/produto/edit/{id}', ProdutoEdit::class)->name('produto.edit');
route::get('/produto', ProdutoIndex::class)->name('produto.index');
