<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UploadGroup extends Model
{
    use HasFactory;
    protected $fillable = ['uniqueid', 'author'];

    public function images()
    {
        return $this->hasMany('App\Models\File', 'uploadGroup', 'id');
    }
}
