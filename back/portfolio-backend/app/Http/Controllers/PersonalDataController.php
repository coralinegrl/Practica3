<?php

namespace App\Http\Controllers;

use App\Models\PersonalData;
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
            'country' => 'required|string',
        ]);

        $profile = Profile::first();

        $profile->name = $data['name'];
        $profile->lastname = $data['lastname'];
        $profile->email = $data['email'];
        $profile->city = $data['city'];
        $profile->country = $data['country'];

        $profile->save();

        return response()->json($profile);
    }

    public function show()
    {
        $personalData = PersonalData::first();

        return response()->json($personalData);
    }
}
