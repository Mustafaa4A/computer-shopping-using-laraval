<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckRoll
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $route = $request->route()->uri;
        $user_rolls = DB::table('user_rolls')->join('menus', 'user_rolls.menu_id', 'menus.menu_id')
                        ->select('menus.menu_id', 'menu_name', 'link')
                        ->where('user_id', auth()->user()->user_id)
                        ->get();
        
        if (auth()->user()->username != 'admin'){
            error_log ($user_rolls);
            return redirect('/');
        }else{
            return $next($request);
        } 
    }
}
