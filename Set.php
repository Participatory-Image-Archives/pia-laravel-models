<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Document;

class Set extends Model
{
    protected $connection = 'pia';
    
    protected $fillable = [
        'label',
        'origin',
        'description',
        'signatures',
        'created_at',
        'updated_at'
    ];

    public function documents()
    {
        return $this->belongsToMany(Document::Class, 'document_set', 'set_id', 'document_id');
    }
}
