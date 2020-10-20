<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Box extends Model
{
    use HasFactory;

    public function shelf()
    {
        return $this->belongsTo('App\Models\Shelf');
    }

    public function folders()
    {
        return $this->hasMany('App\Models\Folder');
    }
}
