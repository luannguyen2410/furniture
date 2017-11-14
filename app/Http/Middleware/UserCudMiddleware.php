<?php

namespace App\Http\Middleware;

use DB;
use Closure;

class UserCudMiddleware
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
        $value = $request->cookie('user');
        if($value) {
            $users = DB::select('select username,email,role,status from user where username = ?' ,[$value]);
            if(count($users)==1){
                if($users[0]->role == 'admin'|| $users[0]->role == 'user' ){
                    return $next($request);
                }
            }
            
        }
        return response('your session is closed, plz login again!', 405);
        
    }
}
