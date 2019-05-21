<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoieController extends Controller
{
    public function index () {
        return view('coie.index');
    }

    public function teachers () {
        return view('coie.teachers');
    }

    public function contact () {
        return view('coie.contact');
    }

    public function news () {
        return view('coie.news');
    }

    public function courses () {
        return view('coie.courses');
    }
}
