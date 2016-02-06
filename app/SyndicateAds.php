<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SyndicateAds extends Model
{
    protected $table = 'syndicate_ads';
    protected $fillable = ['date', 'title', 'description'];

    public function getDateAttribute($value) {
        return $this->attributes['date'] = (new \Carbon\Carbon($value))->toDateString();
    }
}
