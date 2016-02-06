<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $table = 'links';
    protected $fillable = ['title', 'url', 'visibility', 'sort', 'parent_id'];

    public function scopeChildren($query) {
        return $query->where('parent_id', '=', $this->id);
    }
    public function scopeParent($query) {
        return $query->where('id', '=', $this->parent_id);
    }
}
