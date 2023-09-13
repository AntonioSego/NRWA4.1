<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CustomBasicAuthMiddleware
{
    // /**
    //  * Handle an incoming request.
    //  *
    //  * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
    //  */
    // public function handle(Request $request, Closure $next): Response
    // {
    //     return $next($request);
    // }
    public function handle($request, Closure $next)
{
    $credentials = [
        'username' => 'admin',
        'password' => 'admin123',
    ];

    if (!$this->authenticate($request, $credentials)) {
        return response('Unauthorized.', 401);
    }

    return $next($request);
}

protected function authenticate($request, $credentials)
{
    if ($request->getUser() !== $credentials['username'] || $request->getPassword() !== $credentials['password']) {
        return false;
    }

    return true;
}

}
