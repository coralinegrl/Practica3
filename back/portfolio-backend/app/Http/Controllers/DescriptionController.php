<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Description;

class DescriptionController extends Controller
{
    public function update(Request $request)
    {
        $data = $request->validate([
            'heading' => 'required|string',
            'description' => 'required|string',
        ]);

        $description = Description::first();

        $description->heading = $data['heading'];
        $description->description = $data['description'];

        $description->save();

        return response()->json($description);
    }
}

