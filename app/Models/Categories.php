<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Student;

class Categories extends Model
{
    protected $fillable = ['cat_name','slug','user_id', 'status'];


}
