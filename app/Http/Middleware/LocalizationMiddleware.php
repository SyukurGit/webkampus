<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class LocalizationMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        // Cek apakah session 'locale' ada
        if (Session::has('locale')) {
            // Jika ada, atur bahasa aplikasi sesuai session
            App::setLocale(Session::get('locale'));
        }

        // Lanjutkan ke request selanjutnya
        return $next($request);
    }
}