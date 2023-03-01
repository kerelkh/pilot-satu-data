<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatasetController extends Controller
{
    public function index(Request $request)
    {
        return view('dataset.index');
    }
}
