<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;

class JWTAuthMiddleware
{
    // public function handle(Request $request, Closure $next)
    // {
    //     try {
    //         // Get token from cookie first, then fallback to Authorization header
    //         $token = $request->cookie('jwt_token');
            
    //         if (!$token) {
    //             return redirect()->route('login')->with('error', 'Please login to continue');
    //         }

    //         // Parse and validate the token
    //         JWTAuth::setToken($token);
    //         $payload = JWTAuth::getPayload();
    //         // $user = JWTAuth::toUser();
    //         $user = JWTAuth::parseToken()->authenticate();


    //         if (!$user) {
    //             return redirect()->route('login')->with('error', 'User not found');
    //         }

    //         // Store user in request for this session
    //         $request->setUserResolver(function () use ($user) {
    //             return $user;
    //         });

    //     } catch (TokenExpiredException $e) {
    //         return redirect()->route('login')
    //             ->withCookie('jwt_token', '', -1)
    //             ->with('error', 'Session expired, please login again');
    //     } catch (TokenInvalidException $e) {
    //         return redirect()->route('login')
    //             ->withCookie('jwt_token', '', -1)
    //             ->with('error', 'Invalid session, please login again');
    //     } catch (JWTException $e) {
    //         return redirect()->route('login')
    //             ->withCookie('jwt_token', '', -1)
    //             ->with('error', 'Authentication error: ' . $e->getMessage());
    //     }

    //     return $next($request);
    // }

//     public function handle(Request $request, Closure $next){
//     try {
//         $token = $request->cookie('jwt_token');
        
//         if (!$token) {
//             return redirect()->route('login')->with('error', 'Please login to continue');
//         }

//         // $user = JWTAuth::setToken($token)->authenticate();
//         $user = auth('api')->user();

        

//         if (!$user) {
//             return redirect()->route('login')->with('error', 'User not found');
//         }

//         // Attach user to request
//         $request->setUserResolver(fn () => $user);

//     } catch (TokenExpiredException $e) {
//         return redirect()->route('login')
//             ->withCookie(cookie('jwt_token', '', -1))
//             ->with('error', 'Session expired, please login again');
//     } catch (TokenInvalidException $e) {
//         return redirect()->route('login')
//             ->withCookie(cookie('jwt_token', '', -1))
//             ->with('error', 'Invalid session, please login again');
//     } catch (JWTException $e) {
//         return redirect()->route('login')
//             ->withCookie(cookie('jwt_token', '', -1))
//             ->with('error', 'Authentication error: ' . $e->getMessage());
//     }

//     return $next($request);
// }

public function handle(Request $request, Closure $next)
{
    $token = $request->cookie('jwt_token');
    if (!$token) {
        return redirect()->route('login')->with('error', 'Please login');
    }

    try {
        $user = JWTAuth::setToken($token)->authenticate();
        $request->setUserResolver(fn() => $user);
    } catch (\Exception $e) {
        return redirect()->route('login')
            ->withCookie(cookie('jwt_token', '', -1))
            ->with('error', 'Invalid session: '.$e->getMessage());
    }

    return $next($request);
}



}