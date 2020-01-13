<?php

namespace App\Http\Middleware;

use Closure;

class ApiAuth
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
        //  $token = $request->header('APP_KEY');
       $token = $request->route()->parameter('token');
       $schoolid = $request->route()->parameter('schoolid');
       $studentid = $request->route()->parameter('studentid');
       $email = $request->route()->parameter('email');
       $status = $request->route()->parameter('status');
       
       $request->attributes->set('schoolid', $schoolid);
       $request->attributes->set('studentid', $studentid);
       $request->attributes->set('email', $email);
       $request->attributes->set('status', $status);
    //    dd($token);
         if($token != 'ABCDEF'){
             return response()->json(['message' => 'App key not Found'], 401);
         }
        return $next($request);
    }
}
