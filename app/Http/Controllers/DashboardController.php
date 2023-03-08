<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $user = Auth::user();
        $data = [
            'username' => $user->username,
            'role' => $user->getRoleNames()->first(),
        ];
        return view('dashboard.dashboard', $data);
    }
}
