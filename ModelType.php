<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ModelType extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'label',
        'comment',
    ];

    public function images()
    {
        return $this->hasMany(Image::Class);
    }
}
