<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function users()
    {
        return view('users', [
            'users' => User::with('profile')->paginate(50)
        ]);
    }
}