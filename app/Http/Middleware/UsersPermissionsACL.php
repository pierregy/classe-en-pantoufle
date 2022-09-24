<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class UsersPermissionsACL
{

    public function handle($request, Closure $next)
    {
        $routeName = $request->route()->uri();
        $user = $request->user();
        // dd($user->role);
        if ($routeName === 'file-manager/delete' && $user->id !== 1) {
            return response()->json([
                'result' => [
                    'status'  => 'error',
                    'message' => 'Vous n\'avez pas les droits pour supprimer un fichier.',
                ],
            ]);
        }
        return $next($request);
    }
}
