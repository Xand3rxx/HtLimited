<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostTag extends Model
{
    protected $table = "post_tag";

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['post_id', 'tag_id'];

    /**
     * Has one to post relationship.
     * @return mixed
     */
    public function post()
    {
        return $this->hasOne(Post::class, 'id', 'post_id');
    }

    /**
     * Has many to post relationship.
     * @return mixed
     */
    public function posts()
    {
        return $this->hasMany(Post::class, 'id', 'post_id')->where('status', 'active');
    }

    /**
     * Has one to tag relationship.
     * @return mixed
     */
    public function tag()
    {
        return $this->hasOne(Tag::class, 'id', 'tag_id');
    }
}
