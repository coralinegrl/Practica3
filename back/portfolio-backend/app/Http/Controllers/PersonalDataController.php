<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class PersonalDataController extends Controller
{
    public function update(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'lastname' => 'required|string',
            'email' => 'required|email',
            'city' => 'required|string',
        ]);

        $profile = Profile::first();

        $profile->name = $data['name'];
        $profile->lastname = $data['lastname'];
        $profile->email = $data['email'];
        $profile->city = $data['city'];
        $profile->country = $data['country'];
        $profile->summary = $data['summary'];

        $profile->save();

        return response()->json($profile);
    }
}
