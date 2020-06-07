<?php

namespace App\frontmodels;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $fillable = ['name', 'slug', 'description', 'user_id', 'status', 'image'];
    protected $attributes = [
        'hit' => 300,

    ];

    public function categoris()
    {
        return $this->belongsToMany(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comments::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }


}
