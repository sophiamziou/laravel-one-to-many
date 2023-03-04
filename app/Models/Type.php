<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Type extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function generateSlug($val)
    {
        return Str::slug($val, '-');
    }

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
