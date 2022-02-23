<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Image;


class Date extends Model
{
    protected $connection = 'pia';
    
    protected $fillable = [
        'date',
        'end_date',
        'accuracy',
        'date_string',
        'type',
    ];

    public function images()
    {
        return $this->belongsToMany(Image::Class, 'image_date', 'date_id', 'image_id');
    }
}
