<?php

namespace App\Models;

use App\Models\Categories;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
    protected $fillable = ['name','user_id','email','categories_id','color','content','hobbys','images','published'];

    protected $casts = [
            'hobbys' => 'array',
        ];

    public function Categories():BelongsTo
    {

        return $this->belongsTo(Categories::class);
    }

}
