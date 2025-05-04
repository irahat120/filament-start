<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class team extends Model
{
    protected $fillable = ['name','designation','fb_url','tw_url','linkin_url','status','images'];
}
