<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShortDescriptionImage extends Model
{
    protected $table = "short_description_images";
    protected $fillable = ['image', 'sort', 'flash'];
}
