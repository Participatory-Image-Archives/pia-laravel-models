<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Image;
use App\Models\Collection;

class Document extends Model
{
    protected $connection = 'pia';
    
    protected $fillable = [
        'label',
        'comment',
        'file_name',
        'original_file_name',
        'base_path',
    ];

    public function collections()
    {
        return $this->belongsToMany(Collection::Class, 'document_collection', 'document_id', 'collection_id');
    }

    public function images()
    {
        return $this->belongsToMany(Image::Class);
    }

    public function image()
    {
        return $this->belongsTo(Image::Class, 'signature_id');
    }
}
