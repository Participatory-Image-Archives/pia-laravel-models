<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Document;

class Set extends Model
{
    use SoftDeletes;

    protected $connection = 'pia';
    
    protected $fillable = [
        'label',
        'origin',
        'description',
        'signatures'
    ];

    public function documents()
    {
        return $this->belongsToMany(Document::Class, 'document_set', 'set_id', 'document_id');
    }
}
