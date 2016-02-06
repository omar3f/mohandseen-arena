<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = 'pages';
    protected $fillable = ['title', 'content', 'url', 'parent_id', 'image'];

    public function scopeChildren($query) {
        return $query->where('parent_id', '=', $this->id);
    }
    public function scopeParent($query) {
        return $query->where('id', '=', $this->parent_id);
    }
}

