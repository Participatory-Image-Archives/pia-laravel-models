<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Call extends Model
{
    protected $connection = 'pia';

    use SoftDeletes;
    
    protected $fillable = [
        'label',
        'description',
        'creator',
        'start_date',
        'end_date',

        'collection_id'
    ];

    /**
     * of course a call can have entries
     */
    public function callEntries()
    {
        return $this->hasMany(CallEntry::class);
    }

    /**
     * call can have keywords
     */
    public function keywords()
    {
        return $this->belongsToMany(Keyword::Class);
    }

    /**
     * call can have images
     */
    public function images()
    {
        return $this->belongsToMany(Image::Class);
    }

    /**
     * belongs to a collection
     */
    public function collection()
    {
        return $this->belongsTo(Collection::Class);
    }

}
