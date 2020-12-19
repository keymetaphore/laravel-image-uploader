<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\UploadGroup;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ImageController extends Controller
{
    public function view(Request $request, $unique)
    {
        $images = UploadGroup::where('uniqueid', $unique)->firstOrFail();

        foreach ($images->images as $image) {
            abort_unless(file_exists(public_path($image->path)), 404, 'File not found');
        }

        $images->increment('views');
        $images->save();

        $date = Carbon::parse($images->created_at);
        return view('view-image')
            ->with(['views' => $images->views, 'images' => $images->images, 'created_at' => $date->diffForHumans()]);
    }

    public function gallery(Request $request)
    {
        $images = File::orderBy('id', 'DESC')->where('author', Auth::user()->id)->get();

        return view('gallery', compact('images'));
    }
}
