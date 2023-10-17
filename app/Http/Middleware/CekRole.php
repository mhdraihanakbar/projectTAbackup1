<?php

namespace App\Http\Middleware;

use App\Role;

use Closure;

class CekRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$roles)
    {
        if (!auth()->check()) {
            return redirect('/login');
        }

        $user = auth()->user()->id_role;
        $level = Role::where('id', '=', $user)->first();
        // dd($level->namarole==);

        foreach ($roles as $role) {
            // dd($level->namarole == $role);
            if ($level->namarole == $role) {
                return $next($request);
            }
        }

        return abort(403); // Tindakan akses dilarang
    }
}
