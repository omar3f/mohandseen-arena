<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $fillable = ['title', 'content', 'image', 'date'];
    public function getDateAttribute($value) {
        return $this->attributes['date'] = (new \Carbon\Carbon($value))->toDateString();
    }
}
