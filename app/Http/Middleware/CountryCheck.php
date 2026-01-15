<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CountryCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        echo "CountryCheck Middleware: Checking country...<br/>";

        if ($request->country == 'Bangladesh') {

            echo "Access granted. You are in the Bangladesh.\n";

        } else {

            die('Access denied. This service is only available in the Bangladesh.');
            
        }

        return $next($request);
    }
}
