<?php

use App\Livewire\Movimentacao\MovimentacaoCreate;
use App\Livewire\Movimentacao\MovimentacaoIndex;
use App\Livewire\Produto\ProdutoCreate;
use App\Livewire\Produto\ProdutoEdit;
use App\Livewire\Produto\ProdutoIndex;
use Illuminate\Support\Facades\Route;

route::get('/produto/create', ProdutoCreate::class)->name('produto.create');
route::get('/produto/edit/{id}', ProdutoEdit::class)->name('produto.edit');
route::get('/produto', ProdutoIndex::class)->name('produto.index');

route::get('/movimentacao/create', MovimentacaoCreate::class)->name('movimentacao.create');
route::get('/movimentacao/index', MovimentacaoIndex::class)->name('movimentacao.index');
