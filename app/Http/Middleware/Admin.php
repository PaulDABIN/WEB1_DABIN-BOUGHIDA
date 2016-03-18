<?php
/**
 * Created by PhpStorm.
 * User: Paul
 * Date: 18/03/2016
 * Time: 05:57
 */


namespace App\Http\Middleware;
use Closure;
class Administration
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if( $request->user()->admin != 1){
            return response('Vous n\'êtes pas autorisé',401);
        }
        return $next($request);
    }
}