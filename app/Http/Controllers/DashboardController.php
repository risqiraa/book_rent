<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        //membuat halaman index
        //dd dumping atau debugging
        dd(Auth::user());
        dd('ini halaman index');
    }
}
