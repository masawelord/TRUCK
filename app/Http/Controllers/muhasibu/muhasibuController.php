<?php

namespace App\Http\Controllers\muhasibu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class muhasibuController extends Controller
{
    public function muhasibu(){
        return view('muhasibu.muhasibudash');
    }

    public function invoice(){
        return view('muhasibu.pages.invoice');
    }

   public function create_invoice()
   {
       return view('muhasibu.pages.create-invoice');
   }
}
