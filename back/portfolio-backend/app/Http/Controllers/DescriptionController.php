<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Description;

class DescriptionController extends Controller
{
    public function update(Request $request)
    {
        $summary = Description::firstOrFail();

        if (!$summary) {
            return response()->json([
                'error' => 'No se ha encontrado el resumen',
            ], 404);
        }

        $validatedData = $request->validate([
            'summary' => 'required|string',
        ]);

        $summary->summary = $validatedData['summary'];
        $summary->save();

        return response()->json([
            'message' => 'Resumen actualizado correctamente',
        ]);
    }
}

