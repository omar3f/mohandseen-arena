<?php

namespace App;

use App\Helpers\ConfigModel;
use Illuminate\Database\Eloquent\Model;

class ShortDescriptionWord extends ConfigModel
{
    protected $table = 'short_description_word';
    protected $fillable = ['key', 'value'];
}
