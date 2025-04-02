<?php

namespace App\Http\Middleware;

use App\Models\Category;
use App\Models\Setting;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Data
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $infos = Setting::first();
        $navCategories = Category::orderByDesc('id')->get();
        view()->share(['infos'=>$infos,'navCategories'=>$navCategories]);
        return $next($request);
    }
}
