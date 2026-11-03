<?php

namespace App\Repositories\Interfaces;

interface BaseContract {
    public function all();
    public function find(int $id);
    public function create(array $data);
}