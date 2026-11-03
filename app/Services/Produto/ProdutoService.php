<?php
namespace App\Services\Produto;

use App\Repositories\interfaces\Produtos\ProdutosContract;
Use Illuminate\Support\Facades\DB;

class ProdutoService {

    public function __construct(protected ProdutosContract $produtos)
    {

    }

    public function all() {
        return $this->produtos->all();
    }

    public function create(array $data) {
        return DB::transaction(fn() => $this->produtos->create($data));
    }

    public function show(int $id) {
        return $this->produtos->find($id);
    }

    public function update(int $id, array $data) {
        return DB::transaction(fn() => $this->produtos->update($data, $this->produtos->find($id)));
    }

    public function delete(int $id) {
        return DB::transaction(fn() => $this->produtos->delete($this->produtos->find($id)));
    }
}
