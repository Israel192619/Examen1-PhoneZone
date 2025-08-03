<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::all();
        if ($productos->isEmpty()) {
            $data = [
                'mensaje' => 'No hay productos disponibles',
                'productos' => $productos,
            ];
            return response()->json($data, 404);
        }
        $data = [
            'mensaje' => 'Lista de productos recuperada exitosamente',
            'productos' => $productos,
        ];
        return response()->json($data,200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $producto = Producto::find($id);
        if (!$producto) {
            $data = [
                'mensaje' => 'Producto no encontrado',
            ];
            return response()->json($data,404);
        }
        $data = [
            'mensaje' => 'Producto recuperado exitosamente',
            'producto' => $producto,
        ];
        return response()->json($data, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
