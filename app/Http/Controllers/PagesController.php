<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Str;

class PagesController extends Controller
{
    //
    public function index()
    {
        return view('pages.index');
    }
}
