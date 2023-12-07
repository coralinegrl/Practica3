<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function getProfile()
    {
        $profile = Profile::first();
        if ($profile === null) {
            return response()->json([
                'error' => 'No se ha encontrado el perfil',
            ], 404);
    }
        $formattedProfile = [
            'name' => $profile->name,
            'lastname' => $profile->lastname,
            'email' => $profile->email,
            'city' => $profile->city,
            'country' => $profile->country,
            'summary' => $profile->summary,
            'frameworks' => $profile->frameworks ? $profile->frameworks->map(function ($framework) {
                return [
                    'name' => $framework->name,
                    'level' => $framework->level,
                    'year' => $framework->year,
                ];
            }) : [],
            'hobbies' => $profile->hobbies ? $profile->hobbies->map(function ($hobby) {
                return [
                    'name' => $hobby->name,
                    'description' => $hobby->description,
                ];
            }) : [],
        ];

        return response()->json($formattedProfile);
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'lastname' => 'required|string',
            'email' => 'required|email',
            'city' => 'required|string',
            'country' => 'required|string',
            'summary' => 'required|string',
            'frameworks' => 'array',
            'hobbies' => 'array',
            'frameworks.*.name' => 'required|string',
            'frameworks.*.level' => 'required|string',
            'frameworks.*.year' => 'required|integer',
            'hobbies.*.name' => 'required|string',
            'hobbies.*.description' => 'required|string',
        ]);

        $profile = Profile::first();
        if ($profile === null) {
            return response()->json([
                'error' => 'Perfil no encontrado',
            ], 404);
        }

        // Actualizar los campos básicos del perfil
        $profile->fill($validatedData);

        // Actualizar frameworks
        if ($request->has('frameworks')) {
            // Eliminar los frameworks existentes
            $profile->frameworks()->delete();

            // Añadir los nuevos frameworks
            foreach ($request->frameworks as $frameworkData) {
                $profile->frameworks()->create($frameworkData);
            }
        }

        // Actualizar hobbies
        if ($request->has('hobbies')) {
            // Eliminar los hobbies existentes
            $profile->hobbies()->delete();

            // Añadir los nuevos hobbies
            foreach ($request->hobbies as $hobbyData) {
                $profile->hobbies()->create($hobbyData);
            }
        }

        // Guardar los cambios en el perfil
        $profile->summary = $request->input('summary');
        $profile->save();

        return response()->json([
            'success' => 'Perfil actualizado con éxito',
            'profile' => $profile
        ]);
    }


}
