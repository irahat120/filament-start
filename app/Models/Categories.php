<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Student;

class Categories extends Model
{
    protected $fillable = ['user_id', 'cat_name','slug', 'status'];


}
