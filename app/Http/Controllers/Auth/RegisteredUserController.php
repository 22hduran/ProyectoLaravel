<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Entrenador;
use App\Models\Equipo;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    public function create(): View
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $escudoPath = $request->file('escudo')->store('escudos', 'public');
        $fotoPath = $request->file('foto')->store('entrenadores', 'public');
        $nombreEquipo = $request->input('nombreEquipo');

        $equipo = Equipo::create([
            'nombreEquipo' => $nombreEquipo,
            'escudo' => 'storage/'.$escudoPath,
        ]);

        $entrenador = Entrenador::create([
            'nombre' => $request->name,
            'foto' => 'storage/'.$fotoPath,
            'equipo_id' => $equipo->id,
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'entrenador_id' => $entrenador->id,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
