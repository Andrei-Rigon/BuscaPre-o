<?php

namespace App\Repositories\Interfaces\Produtos;

use App\Repositories\Interfaces\BaseContract;
use App\Models\Produto;

interface ProdutosContract extends BaseContract{

    public function update(array $data, Produto $produto);

    public function delete(Produto $produto);

}
