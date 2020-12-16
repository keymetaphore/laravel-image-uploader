<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = ['uniqueid', 'path', 'author'];
    protected $table = 'file';
    use HasFactory;
}
