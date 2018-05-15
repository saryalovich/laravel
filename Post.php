<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{	
	protected $fillable=["body","title","category_id","path"];
    public function comments(){
		return $this->hasMany('App\Comment');
	}
}
