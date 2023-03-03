<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function generateSlug($val)
    {
        return Str::slug($val, '-');
    }
}
