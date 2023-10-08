<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class IndexController extends Controller
{
    public function index(): \Inertia\Response
    {
        return Inertia::render(
            'Index/Index',
            [
                "message" => "Hello from laravel"
            ]
        );
    }
    public function show(): \Inertia\Response
    {
        return Inertia::render('Index/Show');

    }
}
