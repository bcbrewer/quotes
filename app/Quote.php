<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['quote'];

    public function authors()
    {
        return $this->belongsToMany(Author::class);
    }
}