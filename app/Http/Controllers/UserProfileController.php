<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Profile;

class UserProfileController extends Controller
{
    public function show(Request $request)
    {

        $user = $request->user();

        if ($user->profile) {

            $profile = $user->profile;
            return response()->json(['profile' => $profile]);
            //return view('profiles.show', compact('profile'));
        } else {

            return redirect()->route('create.profile');
        }
    }

    public function create()
    {

        return view('profiles.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'phone' => 'required',
            'telf' => 'required',
            'address' => 'required',
            'job_title' => 'nullable',
            'department' => 'nullable',
            'birthdate' => 'nullable|date',
            'gender' => 'nullable|in:male,female,other',
        ]);

        $user = $request->user();

        if ($user->profile) {
            return response()->json(['message' => 'El usuario ya tiene un perfil asociado.']);
        }

        $profile = new Profile($request->all());
        $user->profile()->save($profile);

        return response()->json(['message' => 'Perfil creado exitosamente.']);
    }
}
