<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    //

    protected $fillable = ['title','categories_id','author','image','content','tags','status'];


    protected $casts = [
        'tags' => 'array',
    ];
    public function Categories():BelongsTo
    {

        return $this->belongsTo(Categories::class);
    }
}
