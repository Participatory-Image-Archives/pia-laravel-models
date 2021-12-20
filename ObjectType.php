<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class ObjectType extends Model
{
    protected $connection = 'pia';
    
    protected $fillable = [
        'label',
        'comment',
    ];

    public function images()
    {
        return $this->hasMany(Image::Class);
    }
}
