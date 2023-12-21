<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Area;

class ProfileController extends Controller
{
    public function create()
    {
        $areas=Area::all();
        return view('profiles.create', compact('areas'));
    }

    public function store(ProfileRequest $request)
    {
        
        $profile = new Profile;
        $profile->user_id = auth()->user()->id;
        $profile->dni = $request->dni;
        $profile->phone_user = $request->phone_user;
        $profile->tel_user = $request->tel_user;
        $profile->address = $request->address;
        $profile->birthday = $request->birthday;
        $profile->gender = $request->gender;
        $profile->job_title = $request->job_title;
        $profile->tel_job = $request->tel_job;
        $sata=$request->areas_list;

        $profile->save();
        $profile->areas()->sync($sata);
        $profileId=$profile->id;
        $areas=$profile->areas;

        //return redirect()->route('home')->with('success', 'Perfil creado exitosamente');
        return response()->json([
            'success' => true,
            'miVariable' => $profile,
            'id' =>$profileId,
            'data' => $sata,
            'areas'=>$areas,
            'message' => 'Operación realizada con éxito.'
        ]);

    }
}
