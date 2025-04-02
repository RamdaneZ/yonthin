<?php

namespace App\Http\Middleware;

use App\Models\Admin;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!session()->has('is_admin')) {
            return redirect('admin/');
        }
    
        $adminData = Admin::find(session('is_admin'));
    
        if (!$adminData) {
            session()->flush();
            return redirect('admin/');
        }
    
        view()->share('admin_data', $adminData);
    
        return $next($request);
    }    
}
