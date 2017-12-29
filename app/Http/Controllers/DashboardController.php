<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;

class DashboardController extends Controller
{
    //

    public function index() {

        $contents = View::make('dashboard.index');
        $response = Response::make($contents, 200);
        $response->header('X-Frame-Options', '*');
        return $response;
    }

    public function manage_revenue() {

        return view('dashboard.manage.revenue');
    }
}
