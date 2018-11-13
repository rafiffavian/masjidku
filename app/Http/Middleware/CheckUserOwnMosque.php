<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckUserOwnMosque
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
 
         // dd(Auth::user()->masjid);
         if(!Auth::user()->masjid)
         return redirect(route('admin.profile.masjid')); //masjid itu nama function di users.php

         return $next($request);
    }
}
