<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetectionClass extends Model
{
    protected $connection = 'detections';
    protected $table = 'classes';

    protected $fillable = [
        'label'
    ];

    public function detections()
    {
        return $this->hasMany(Detection::Class, 'class_id');
    }

    public function images()
    {
        return $this->hasManyThrough(Image::Class, Detection::Class, 'class_id', 'signature', 'id', 'sgv_signature');
    }

}
