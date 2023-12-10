<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Framework;
use App\Models\Hobby;
class ProfileController extends Controller
{
    //
    public function getProfile(Request $request)
    {
        $profile = Profile::with('frameworks', 'hobbies')->first();
        return response()->json($profile);
    }

    public function updateProfile(Request $request)
    {
        $profile = Profile::with('frameworks', 'hobbies')->first();

        $profile->name = $request->input('name');
        $profile->lastname = $request->input('lastname');
        $profile->email = $request->input('email');

        $profile->save();

        // Validar y actualizar los frameworks
        $frameworks = $request->input('frameworks');
        foreach ($frameworks as $frameworkData) {
            $frameworkId = $frameworkData['id']; // El id del framework
            $framework = Framework::find($frameworkId);

            // Si el framework existe, se actualizan sus campos
            if ($framework) {
                $framework->name = $frameworkData['name'];
                $framework->level = $frameworkData['level'];
                $framework->year = $frameworkData['year'];
                $framework->save();
            } else {
                // Si el framework no existe, se crea uno nuevo
                Framework::create([
                    'name' => $frameworkData['name'],
                    'level' => $frameworkData['level'],
                    'year' => $frameworkData['year'],
                    'id' => $profile->id,
                ]);
            }
        }

        // Validar y actualizar los hobbies
        $hobbies = $request->input('hobbies');
        foreach ($hobbies as $hobbyData) {
            $hobbyId = $hobbyData['id']; // El id del hobby
            $hobby = Hobby::find($hobbyId);

            // Si el hobby existe, se actualizan sus campos
            if ($hobby) {
                $hobby->name = $hobbyData['name'];
                $hobby->save();
            } else {
                // Si el hobby no existe, se crea uno nuevo
                Hobby::create([
                    'name' => $hobbyData['name'],
                    'id' => $profile->id,
                ]);
            }
        }

        return response()->json(['message' => 'Perfil actualizado correctamente']);

    }
}
