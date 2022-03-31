<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MapLayer extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'label',
        'map_id'
    ];
    
    /* relations */

    public function map()
    {
        return $this->belongsTo(Map::Class);
    }

    public function mapEntries()
    {
        return $this->hasMany(MapEntry::Class)->orderBy('label');
    }
}
