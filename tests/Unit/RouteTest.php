<?php

namespace Eozden\PaginatorRoute\Tests\Unit;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Eozden\PaginatorRoute\Tests\TestCase;
use Eozden\PaginatorRoute\Http\Middleware\PaginatorRoute;

class RouteTest extends TestCase
{
    public function test_route_has_not_page_parameter()
    {
        $request = new Request([], []);
        $request->setRouteResolver(function () use ($request) {
            return (new Route('GET', 'testing', []))->bind($request);
        });
        
        (new PaginatorRoute())->handle($request, function ($request) {
            $this->assertEquals(null, $request->get('page', null));
        });
    }
    
    public function test_route_has_page_parameter()
    {
        $request = new Request([], [], ['page' => 1]);
        $request->setRouteResolver(function () use ($request) {
            return (new Route('GET', 'testing/{page}', []))->bind($request);
        });
        
        (new PaginatorRoute())->handle($request, function ($request) {
            $this->assertEquals(1, $request->get('page', null));
        });
    }
}
