<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use VanOns\Laraberg\Models\Gutenbergable;

class Post extends Model
{
    use SoftDeletes, Gutenbergable;

    const STATUS = [
        'active'    => 'active',
        'inactive'  => 'inactive',
    ];

    protected $fillable = [
        'user_id', 'category_id', 'title', 'slug', 'excerpt', 'cover_image', 'status'
    ];

    protected static function booted()
    {
        static::creating(function ($post) {
            $post->uuid = (string) Str::uuid(); // Create uuid when a new post is to be created
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
     * Get all users who created posts
     */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    /**
     * Get all tags assigned to a post
     */
    public function tags(){
        return $this->belongsToMany(Tag::class, 'post_tag');
    }

    /**
     * Get all tags assigned to a post
     */
    public function tag(){
        return $this->belongsTo(Tag::class, 'post_tag');
    }

    /**
     * Get category attached to a post
     */
    public function category()
    {
        return $this->belongsTo(Category::class)->withTrashed();
    }

}
