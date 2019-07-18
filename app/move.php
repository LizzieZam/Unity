<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class move extends Model
{
    public $timestamps = false;
    protected $fillable = ['posx', 'posy','posz'];
}
