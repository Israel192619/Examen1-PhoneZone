<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $marcas = Marca::all();
        if ($marcas->isEmpty()) {
            $data = [
                'mensaje' => 'No hay marcas disponibles',
                'marcas' => $marcas,
            ];
            return response()->json($data, 404);
        }
        $data = [
            'mensaje' => 'Lista de marcas recuperada exitosamente',
            'marcas' => $marcas,
        ];
        return response()->json($data,200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:255',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        $marca = Marca::create($request->all());
        $data = [
            'mensaje' => 'Marca creada exitosamente',
            'marca' => $marca,
        ];
        return response()->json($data, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $marca = Marca::find($id);
        if (!$marca) {
            $data = [
                'mensaje' => 'Marca no encontrada',
            ];
            return response()->json($data,404);
        }
        $data = [
            'mensaje' => 'Marca recuperada exitosamente',
            'marca' => $marca,
        ];
        return response()->json($data, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:255',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        $marca = Marca::find($id);
        if (!$marca) {
            $data = [
                'mensaje' => 'Marca no encontrada',
            ];
            return response()->json($data, 404);
        }
        $marca->update($request->all());
        $data = [
            'mensaje' => 'Marca actualizada exitosamente',
            'marca' => $marca,
        ];
        return response()->json($data, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
