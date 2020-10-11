<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function login() {
        return view('pages.login');
    }

    public function register() {
        return view('pages.register');
    }

    public function home() {
        return view('pages.home');
    }

    public function jobs() {
        return view('pages.jobs');
    }

    public function notifications() {
        return view('pages.notifications');
    }

    public function network() {
        return view('pages.network');
    }
}
