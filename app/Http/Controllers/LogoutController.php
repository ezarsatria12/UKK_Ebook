<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LogoutController extends Controller
{
    public function out(Request $request)
    {
        Auth::out();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');

    }
}
