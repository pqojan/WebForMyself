<?php

namespace App;

use Attribute;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // protected $table = 'Posts';
    // protected $primaryKey = 'id';
    // public $incrementing = false;
    // protected $keyType = 'string';
    // public $timestamp = false;
    // protected $attributes = [
    //     'content' => 'Lorem ipsum 1'
    // ];
    protected $fillable = ['title', 'content'];
    
    public function rubric(){
       return $this->belongsTo(Rubric::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function getPostDate(){
        return Carbon::parse($this->created_at)->diffForHumans();
    }
}
