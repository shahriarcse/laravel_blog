<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function tags()
    { 
    	//when need tags from a post  
    	return $this->belongsToMany('App\Model\user\Tag', 'Post_tags')->withTimestamps(); //with pivot     
    	//every post has many tags 
    }  

    // categories from post
    public function categories()
    { 
    	//when need categories from a post  
    	return $this->belongsToMany('App\Model\user\Category', 'Category_posts')->withTimestamps(); //with pivot         
    	//every post has many categories    
    }  

    public function getRouteKeyName()
    {
        return 'slug'; 
    }
}
