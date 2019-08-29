<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Backend\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $pageParams = [
            'page_title'  => 'Dashboard'
        ];

        return view('backend.dashboard', $pageParams);
    }
}
