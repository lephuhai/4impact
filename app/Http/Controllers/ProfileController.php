<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function account(Request $request) {

        if ($request->isMethod('get'))
            return view('profile.account');
    }

    public function password(Request $request) {

        if ($request->isMethod('get'))
            return view('profile.password');
    }

    public function social_profiles(Request $request) {

        if ($request->isMethod('get'))
            return view('profile.social_profiles');
    }

    public function notifications(Request $request) {

        if ($request->isMethod('get'))
            return view('profile.notifications');
    }

    public function sessions(Request $request) {

        if ($request->isMethod('get'))
            return view('profile.sessions');
    }

    public function applications() {

    }
}
