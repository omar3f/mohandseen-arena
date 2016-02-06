<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Council extends Model
{
    protected $table = 'council';
    protected $fillable = ['name', 'title', 'description', 'image'];
}
