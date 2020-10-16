<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function signin() {
        return view('pages.login');
    }

    public function signup() {
        return view('pages.register');
    }

    public function profile () {
        return view('account.profile');
    }
}
