<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SettingsController extends Controller
{
    public function view(Request $request)
    {
        return view('settings', ['api_key' => Auth::user()->api_token]);
    }
}
