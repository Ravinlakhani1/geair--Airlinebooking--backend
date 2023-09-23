<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('web.home');
    }

    public function booking()
    {
        return view('web.booking');
    }

    public function book($id)
    {
        return view('web.book', compact('id'));
    }
}
