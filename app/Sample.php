<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sample extends Model
{
    //
    protected $fillable = ['name', 'body', 'link', 'status', 'image','tag'];
}
