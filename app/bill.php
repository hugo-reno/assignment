<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bill extends Model
{
    public $timestamps = false;
    protected $guarded=[];
    protected $fillable = ['description','userID'];
    protected $fillable1 = ['description','billAmount'];
    protected $fillable2 = ['description','unit'];
    protected $fillable3 = ['description','lastDate'];
}
