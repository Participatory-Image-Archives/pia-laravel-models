<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Image;

class Person extends Model
{
    protected $connection = 'pia';
    protected $table = 'people';
    
    protected $fillable = [
        'salsah_id',
        'name',
        'title',
        'family',
        'birthplace',
        'deathplace',
        'description',
    ];

    public function images()
    {
        return $this->belongsToMany(Image::Class);
    }
}
