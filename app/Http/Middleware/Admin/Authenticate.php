<?php
namespace App\Http\Middleware\Admin;
use Closure;
use Session;
use DB;
use Config;
use Illuminate\Http\Request;
use Auth;
class Authenticate
{
     public function handle($request, Closure $next)
    {   
        if(auth()->user()) 
        {   
          return $next($request);        
        }
        else
        {
            return redirect('/admin/login');
        }
    }
}
