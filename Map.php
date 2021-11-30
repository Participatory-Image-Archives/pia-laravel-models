<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\MapKey;
use App\Models\MapLayer;
use App\Models\MapEntry;
use App\Models\Collection;

class Map extends Model
{
    protected $connection = 'pia';

    protected $fillable = [
        'label',
        'tiles',
        'origin'
    ];
    
    /* relations */

    public function mapKeys()
    {
        return $this->hasMany(MapKey::Class)->orderBy('label');
    }

    public function mapLayers()
    {
        return $this->hasMany(MapLayer::Class)->orderBy('label');
    }

    public function linkedLayers()
    {
        return $this->belongsToMany(MapLayer::Class, 'map_linked_map_layer');
    }

    public function mapEntries()
    {
        return $this->hasManyThrough(MapEntry::Class, MapLayer::Class)->orderBy('label');
    }

    public function collections()
    {
        return $this->belongsToMany(Collection::Class, 'map_collection', 'map_id', 'collection_id');
    }
}
