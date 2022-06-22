<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detection extends Model
{
    protected $connection = 'detections';
    protected $table = 'detections';

    protected $fillable = [
        'x',
        'y',
        'h',
        'w',
        'sgv_signature',
        'class_id'
    ];

    public function class()
    {
        return $this->belongsTo(DetectionClass::Class);
    }

    public function image()
    {
        return $this->hasOne(Image::Class, 'signature', 'sgv_signature');
    }
}
