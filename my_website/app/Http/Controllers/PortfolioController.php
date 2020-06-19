<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    //
    public function getPortfolioHome(){
        return view('home/index');
    }
}
