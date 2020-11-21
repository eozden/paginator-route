<?php

namespace Eozden\PaginatorRoute\Http\Middleware;

use Closure;

class PaginatorRoute
{
    public function handle($request, Closure $next)
    {
        $page = $request->route('page');

        if(!is_null($page)) {
            $request->merge(['page' => $page]);
        }

        return $next($request);
    }
}