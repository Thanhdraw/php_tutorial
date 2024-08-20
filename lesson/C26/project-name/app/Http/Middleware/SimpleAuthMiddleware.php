<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SimpleAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $login_acc = [
            'email' => 'admin@email.com',
            'password' => '123456'
        ];
        $email = $request->input('email');
        $password = $request->input('password');
        if ($email === $login_acc['email']  && $password === $login_acc['password'] ) {
            return redirect()->route('home');
        }
        return redirect()->route('login')->with('error', 'Invalid credentials');
    }

}
