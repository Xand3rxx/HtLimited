<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $fillable = [
      'code', 'name'
    ];

    public function lgas()
    {
        return $this->hasMany(Lga::class, 'state_id')->orderBy('name','ASC');
    }
}