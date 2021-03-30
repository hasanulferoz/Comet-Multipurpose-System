<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // show admin login form
    public function showAdminLoginForm(){
        return view('admin.login');
    }

    public function showRegisterForm(){
        return view('admin.register');
    }

    public function showAdminDashboard(){
        return view('admin.dashboard');
    }
}


