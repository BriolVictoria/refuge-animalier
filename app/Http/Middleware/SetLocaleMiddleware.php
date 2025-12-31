<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLocaleMiddleware
{
    public function handle(Request $request, Closure $next)
    {

        $locale = $request->route('locale');

        if ($locale && in_array($locale, ['fr', 'en'])) {
            app()->setLocale($locale);
            session(['locale' => $locale]);
        } elseif (session()->has('locale')) {
            app()->setLocale(session('locale'));
        }

        return $next($request);
    }
}
