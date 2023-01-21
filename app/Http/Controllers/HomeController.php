<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class HomeController
{
    public function index(Request $request): Response
    {
        return Inertia::render('Client/Home/Index', [
            'status' => session('status'),
        ]);
    }
}
