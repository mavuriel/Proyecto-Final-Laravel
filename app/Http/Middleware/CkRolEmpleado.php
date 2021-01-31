<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CkRolEmpleado
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->user()->rol->key=='Empleado'){
            return $next($request);

            }else if (auth()->user()->rol->key=='Admin'){
                return $next($request);
            }else{
                return back();
            }

        }
        //redirect('/test')
    }
