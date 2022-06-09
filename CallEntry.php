<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CallEntry extends Model
{
    protected $connection = 'pia';

    use SoftDeletes;

    protected $fillable = [
        'label',
        'comment',
        'creator',

        'call_id'
    ];

    /**
     * call entry can have keywords
     */
    public function keywords()
    {
        return $this->belongsToMany(Keyword::Class);
    }

    /**
     * call entry can have files
     */
    public function documents()
    {
        return $this->belongsToMany(Document::Class);
    }

    /**
     * call entry can relate to images
     */
    public function images()
    {
        return $this->belongsToMany(Image::Class);
    }

    /**
     * belongs to a call
     */
    public function call()
    {
        return $this->belongsTo(Call::Class);
    }

}
