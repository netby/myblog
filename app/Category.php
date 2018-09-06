<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{

    protected $fillable = ['title', 'slug', 'parent_id', 'published', 'created_by', 'modified_by'];

    //Mutators
    public function setSlugAttribute($value) {
        $this->attributes['slug'] = str_slug($this->title, '-');
    }

    //Get children category
    public function children (){
        return $this->hasMany(self::class, 'parent_id');
    }
}