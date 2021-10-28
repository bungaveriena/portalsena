<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class DivisionController extends Controller
{
    public function index()
    {
        $division = DB::table('divisions')->get();
        return view('partials.navdiv', [
            'division' => $division,
            'title' => 'Tes Portal Web'
        ]);
    }
}
