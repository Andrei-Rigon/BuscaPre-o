<?php

namespace App\Repositories\Eloquent\ProdutosEloquent;

use App\Repositories\Interfaces\Produtos\ProdutosContract;
use App\Models\Produto;

class ProdutoRepository implements ProdutosContract {

    public function all() {
        return Produto::all();
    }

    public function create(array $data) {
        return Produto::create($data);
    }

    public function find(int $id) {
        return Produto::findOrFail($id);
    }

    public function update(array $data, Produto $produto) {
        return $produto->update($data);
    }

    public function delete(Produto $produto) {
        return $produto->delete();
    }
}
