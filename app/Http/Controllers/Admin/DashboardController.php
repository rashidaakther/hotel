<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $data = array();      
        $data = auth()->user();      
        return view('admin.dashboard',compact('data'));
    }
   
}
