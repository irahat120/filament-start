<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Blog extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['user_id','title', 'description','visibility','images'];

    public function Categories():BelongsTo
    {

        return $this->belongsTo(Categories::class);
    }

    
}
