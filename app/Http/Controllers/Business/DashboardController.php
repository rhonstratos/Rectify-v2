<?php

namespace App\Http\Controllers\Business;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class DashboardController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Business/Dashboard/Index', [
            'status' => session('status'),
        ]);
    }
    public function create()
    {
        return redirect()->back();
    }
    public function store(Request $request)
    {
        return redirect()->back();
    }
    public function show($id)
    {
        return redirect()->back();
    }
    public function edit($id)
    {
        return redirect()->back();
    }
    public function update(Request $request, $id)
    {
        return redirect()->back();
    }
    public function destroy($id)
    {
        return redirect()->back();
    }
}
