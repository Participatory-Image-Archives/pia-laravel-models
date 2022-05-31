<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Keyword extends Model
{
    protected $connection= 'pia';
    
    use SoftDeletes;
    
    protected $fillable = [
        'label',
        'description'
    ];

    public function images()
    {
        return $this->belongsToMany(Image::Class);
    }

    public function collections()
    {
        return $this->belongsToMany(Collection::Class);
    }

    public function calls()
    {
        return $this->belongsToMany(Call::Class);
    }

    public function altLabels()
    {
        return $this->belongsToMany(AltLabel::Class, 'keyword_alt_label');
    }
}
