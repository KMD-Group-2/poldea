<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportManagementController extends Controller
{
    public function adminReport()
    {
        return view('pages.reports.admin-report');
    }
}
