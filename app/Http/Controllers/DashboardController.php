<?php

namespace App\Http\Controllers;

use App\Models\Sdipktkn;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $datas1 = Sdipktkn::count();
        return view('dashboard.index', [
            'sdipktkn' => $datas1,
        ]);
    }
}
