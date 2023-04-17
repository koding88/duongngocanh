<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    public function index()
    {
        $totalUser = User::where('usertype', 'user')->count();
        $totalAdmin = User::where('usertype', 'admin')->count();

        return view('admin.dashboard', ['totalUser' => $totalUser, 'totalAdmin' => $totalAdmin]);

    }
}
