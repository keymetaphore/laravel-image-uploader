<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ImageController extends Controller
{
    public function view(Request $request, $unique)
    {
        $imageData = File::where('uniqueid', $unique)->firstOrFail();
        abort_unless(file_exists(public_path($imageData->path)), 404, 'File not found');

        return view('view-image')
            ->with(['imageLink' => asset($imageData->path)]);
    }

    public function gallery(Request $request)
    {
        $images = File::orderBy('id', 'DESC')->where('author', Auth::user()->id)->get();

        return view('gallery', compact('images'));
    }
}
