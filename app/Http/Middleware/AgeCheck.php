<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AgeCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        echo "AgeCheck Middleware: Checking age...<br/>";
        print_r("Your Age is: ".$request->age."<br/>");

        if ($request->age < 18) {
            // return response('Access denied. You must be at least 18 years old.', 403);
            die('Access denied. You must be at least 18 years old.');
        } else {
            echo "Access granted. You are old enough.\n";
        }

        return $next($request);
    }
}
