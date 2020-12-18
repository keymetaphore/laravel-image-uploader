<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\UploadGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        if ($files = $request->file('image')) {
            $uploadGroupID = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890'), 0, 6);

            $uploadGroup = new UploadGroup;
            $uploadGroup->uniqueid = $uploadGroupID;
            $uploadGroup->author = Auth::user()->id;
            $uploadGroup->save();

            foreach ($files as $file) {
                $extension = $file->extension();
                $fileName = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890'), 0, 6);
                $file->storeAs('/public', $fileName.'.'.$extension);
                $url = Storage::url($fileName.'.'.$extension);
                $file = File::create([
                    'uniqueid'    => $fileName,
                    'path'        => $url,
                    'uploadGroup' => $uploadGroup->id,
                    'author'      => Auth::user()->id,
                ]);
            }
            return route('file.view', $uploadGroup->uniqueid);
        }
        abort(400, ':(');
    }
}
