<?php

namespace App\Http\Controllers\App;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FirstController extends Controller
{
    public function index()
    {
        return view('layouts.app');
    }
}
