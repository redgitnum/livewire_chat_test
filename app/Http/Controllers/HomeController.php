<?php

namespace App\Http\Controllers;

use App\Events\SendPost;
use App\Models\Message;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function admin()
    {
        return view('admin');
    }

    
}
