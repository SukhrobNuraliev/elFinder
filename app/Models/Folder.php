<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    use HasFactory;

    protected $fillable = ['box_id'];

    public function box()
    {
        return $this->belongsTo('App\Models\Box');
    }

    public function files()
    {
        return $this->hasMany('App\Models\File');
    }

    public function shelf()
    {
        return $this->hasOneThrough('App\Models\Shelf', 'App\Models\Box');
    }
    
}
