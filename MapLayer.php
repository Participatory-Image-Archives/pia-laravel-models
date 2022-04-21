<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MapLayer extends Model
{
    protected $connection= 'pia';
    
    use SoftDeletes;

    protected $fillable = [
        'label',
        'map_id',
        'zoom_min',
        'zoom_max'
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
