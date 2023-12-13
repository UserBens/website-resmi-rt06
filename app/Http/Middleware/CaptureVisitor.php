<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CaptureVisitor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $visitor = new Visitor([
            'ip_address' => $request->ip(),
            'user_agent' => $request->header('User-Agent'),
        ]);

        $visitor->save();
        
        return $next($request);
    }
}
