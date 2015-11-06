<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model
{
    //
    protected $fillable = array('title', 'intro', 'content','published_at');
    
    
    public function scopePublished($query)
    {
        $query->where('published_at','<=',Carbon::now());
    }
    
    public function setPublishedAtAttribute($date)
    {
        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d',$date);
    }
    
    public function getTagListAttribute(){
        return $this->tags->lists('id')->all();
    }
    
    public function tags(){
        return $this->belongsToMany('App\Model\Tag')->withTimestamps();
    }
}
