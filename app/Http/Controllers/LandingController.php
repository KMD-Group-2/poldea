<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LandingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:Admin', ['only' => ['adminDashboard']]);
        $this->middleware('role:QA-Manager', ['only' => ['QAManagerDashboard']]);
        $this->middleware('role:QA-Coordinator', ['only' => ['QACoordinatorDashboard']]);
        $this->middleware('role:Staff', ['only' => ['StaffDashboard']]);
    }

    public function index()
    {
        $user = Auth::user();

        if($user->hasRole('Admin'))
        {
            return redirect()->route('admin.dashboard');

        } elseif($user->hasRole('QA-Manager'))
        {
            return redirect()->route('qa_m.dashboard');

        } elseif($user->hasRole('QA-Coordinator'))
        {
            return redirect()->route('qa_c.dashboard');

        } elseif($user->hasRole('Staff'))
        {
            return redirect()->route('staff.dashboard');

        } else{
            Auth::guard('web')->logout();

            request()->session()->invalidate();

            request()->session()->regenerateToken();

            return redirect('/login');
        }
    }

    public function adminDashboard()
    {
        view()->share(['high_chart' => true]);
        return view('pages.landing-pages.admin_dashboard');
    }

    public function QAManagerDashboard()
    {
        return view('pages.landing-pages.qa_manager_dashboard');
    }

    public function QACoordinatorDashboard()
    {
        return view('pages.landing-pages.qa_coordinator_dashboard');
    }

    public function StaffDashboard()
    {
        return view('pages.landing-pages.user_dashboard');
    }
}
