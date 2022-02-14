<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Collection;

class Set extends Model
{
    protected $connection = 'pia';
    
    protected $fillable = [
        'label',
        'description',
        'signatures',
        'collection_id'
    ];

    public function collection()
    {
        return $this->belongsTo(Collection::Class);
    }
}
