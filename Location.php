<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class Location extends Model
{
    protected $connection = 'pia';
    
    protected $fillable = [
        'label',
        'geonames_id',
        'geonames_uri',
        'geonames_code',
        'geonames_code_name',
        'geonames_division_level',
        'wiki_url',
        'geometry',
        'latitude',
        'longitude',
        'origin' ,
        'created_at',
        'updated_at'
    ];

    public function images()
    {
        return $this->hasMany(Image::Class);
    }
}
