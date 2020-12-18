<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                $validated = $request->validate([
                    'image' => 'mimes:jpeg,png,bmp,jpg|max:4096',
                ]);
                $extension = $request->image->extension();
                $fileName = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890'), 0, 6);
                $request->image->storeAs('/public', $fileName.'.'.$extension);
                $url = Storage::url($fileName.'.'.$extension);
                $file = File::create([
                    'uniqueid'    => $fileName,
                    'path'        => $url,
                    'uploadGroup' => null,
                    'author'      => Auth::user()->id,
                ]);

                return route('file.view', $fileName);
            }
        }
        abort(400, ':(');
    }
}
