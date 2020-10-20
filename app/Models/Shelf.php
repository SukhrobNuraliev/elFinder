<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shelf extends Model
{
    use HasFactory;

    public function boxes()
    {
        return $this->hasMany('App\Models\Box');
    }

    public function folders()
    {
        return $this->hasManyThrough('App\Models\Folder', 'App\Models\Box');
    }
}
