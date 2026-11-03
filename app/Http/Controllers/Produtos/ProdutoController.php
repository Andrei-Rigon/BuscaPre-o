<?php

namespace App\Http\Controllers\Produtos;

use App\Http\Controllers\Controller;
use App\Services\Produto\ProdutoService;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function __construct(protected ProdutoService $produtoService)
    {

    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json($this->produtoService->all(), 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return response()->json($this->produtoService->create($request->validated()), 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json($this->produtoService->show($id), 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return response()->json($this->produtoService->update($id, $request->all()), 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return response()->json([$this->produtoService->delete($id)], 204);

    }
}
