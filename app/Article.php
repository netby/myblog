<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
    protected $fillable = ['title', 'slug', 'description_short', 'description', 'image', 'image_show', 'meta_title', 'meta_description', 'meta_keyword', 'published', 'created_by', 'modified_by'];
    //Polymorphic relation with categories
    public function categories (){
        return $this->morphToMany('App\Category', 'categoryable');
    }
    public function setSlugAttribute($value) {
        $this->attributes['slug'] = Str::slug( mb_substr($this->title, 0, 40) . "-" . \Carbon\Carbon::now()->format('dmyHi'), '-');
    }
    public function scopeLastArticles ($query, $count){
        return $query->orderBy('created_at', 'desc')->take($count)->where('meta_keyword' , 'C92FXnGyYOFb1RuZ30v8Qx4UPFtDE7rwky1KGCEd7SlaplXR8f06HxIyJAbI3gsNuGv4xj8N5qHXMoPyXzEvYwfmpV6fB5NhFn7L')->get();
    }
}
