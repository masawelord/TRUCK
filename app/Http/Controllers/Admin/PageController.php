<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function manager()
    {
        return view('manager.managerboard');
    }
    public function drivers(){
        return view('manager.pages.drivers');
    }
}
