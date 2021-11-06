<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id', 'name', 'slug'
    ];

    protected static function booted()
    {
        static::creating(function ($tag) {
            $tag->uuid = (string) Str::uuid(); // Create uuid when a new tag is to be created
        });
    }

    /**
     * Get users who created a post
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
