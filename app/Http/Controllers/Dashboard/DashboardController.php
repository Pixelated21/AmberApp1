<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Student;

class DashboardController extends Controller
{
    public function index(){

        $students = Student::all();

        return view('Dashboard.dashboard',compact('students'));
    }
}
