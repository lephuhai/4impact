<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GitHubController extends Controller
{
    //

    public function search (Request $request) {

        if ($request->isMethod('post')) {

            return view('github.profile');
        }

        return view('github.search');
    }

    public function profile () {

    }
}
