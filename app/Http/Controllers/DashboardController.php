<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use App\Models\EmployeeJob;


class DashboardController extends Controller
{
    public function index()
    {
       $user = auth()->user();
       return view('components.dashboard', compact('user'));
    }
}