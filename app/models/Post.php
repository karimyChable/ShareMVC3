<?php

class Post extends Eloquent{
	/*
	--------------------------
	| Model: Post
	-------------------------
	| Mapeo de la tabla posts.
	|	
	*/

	protected $table =  'posts';
	protected $primaryKey = 'id';

	public function user(){
		return $this->belongsTo('User', 'id_user');
	}

	
}
