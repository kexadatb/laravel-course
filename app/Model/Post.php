<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{/*
    public $id;
    public $title;
    public $text;

    public $comments;
    public $author; //user

    public function __construct( $id = 0, $title = "", $text = "", $comments = array(), \App\Model\User $author) {
        $this->id 	 = $id;
        $this->text  = $text; 
        $this->title = $title;

        $this->comments = $comments;
        $this->author   = $author; 
    }

    public function addComment( \App\Model\Comment $comment){
		array_push( $this->comments, $comment );
	
		return $this;
    }

    public function addComments( $comments = array() ){

    	$this->comments = array_merge( $this->comments, $comments);

    } */
}
