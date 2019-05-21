<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoieController extends Controller
{
    public function index () {
        return view('coie.index');
    }
}
