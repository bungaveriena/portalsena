<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Portal;

class PortalController extends Controller
{
    public function index()
    {
        $portals = DB::table('portals')->get();
        return view('portal', [
            'portals' => $portals,
            'title' => 'Tes Portal Web'
        ]);
    }


}
