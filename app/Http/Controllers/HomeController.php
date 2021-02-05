<?php

namespace App\Http\Controllers;

use App\Events\ShotEvent;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        event(new ShotEvent);
        return view('welcome');
    }

    public function admin()
    {
        return view('admin');
    }
}
