<?php

namespace App\Http\Controllers\Business;

use App\Http\Controllers\ProfileController as Base;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class ProfileController extends Base
{
    public function edit(Request $request): Response
    {
        return Inertia::render('Business/Profile/Index', [
            'mustVerifyEmail' => $request->user() instanceof MustVerifyEmail,
            'status' => session('status'),
        ]);
    }
}
