<?php

namespace App\Http\Controllers;

use App\Models\Framework;
use Illuminate\Http\Request;

class FrameworkController extends Controller
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
    public function show(Framework $framework)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Framework $framework)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Framework $framework)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'level' => 'required|string',
            'year' => 'required|integer',
        ]);
        $framework->name = $data['name'];
        $framework->level = $data['level'];
        $framework->year = $data['year'];
    
        $framework->save();
    
        return response()->json(['message' => 'Framework updated successfully', 'framework' => $framework]);
    }

    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Framework $framework)
    {
        //
    }
}
