<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Jugador;
use App\Policies\JugadorPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{

    protected $policies = [
        Jugador::class => JugadorPolicy::class,
    ];

    public function boot(): void
    {
        //
    }
}
