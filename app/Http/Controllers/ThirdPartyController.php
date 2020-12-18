<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ThirdPartyController extends Controller
{
    public function view(Request $request)
    {
        return view('apikeys', [Auth::user()->api_key]);
    }
}
