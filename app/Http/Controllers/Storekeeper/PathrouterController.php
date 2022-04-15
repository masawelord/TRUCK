<?php

namespace App\Http\Controllers\Storekeeper;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PathrouterController extends Controller
{
    public function pathroute(){
        return view('stockkeeper.pages.Pathroute');
    }
}
