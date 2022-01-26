<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasRole('normal_user')){
            return view('user.user_dash');
        }elseif(Auth::user()->hasRole('premium')){
            return view('user.premium');
        }elseif(Auth::user()->hasRole('superadministrator')){
            return view('user.admin');
        }              
    }
}
