<?php

namespace App\Http\Controllers;

use App\Models\Hobby;
use Illuminate\Http\Request;

class HobbyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hobby $hobby)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hobby $hobby)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $hobby->name = $data['name'];
        $hobby->description = $data['description'];

        $hobby->save();

        return response()->json(['message' => 'Hobby updated successfully', 'hobby' => $hobby]);


    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hobby $hobby)
    {
        //
    }
}
