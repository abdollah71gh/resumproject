<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Article extends Model
{
    //
    use Sluggable;

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
        return $this->hasMany(Comment::class);
    }

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => ''
            ]
        ];
    }


}
