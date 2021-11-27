<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id', 'name', 'slug'
    ];

    protected static function booted()
    {
        static::creating(function ($category) {
            $category->uuid = (string) Str::uuid(); // Create uuid when a new category is to be created
        });
    }

    /**
     * Get users who created a post
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get users who created a post
     */
    public function posts()
    {
        return $this->hasMany(Post::class)->where('status', 'active');
    }
}
