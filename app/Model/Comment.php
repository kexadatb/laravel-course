<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public $id;
    public $text;

    public $post;
    public $author; //user

    public function __construct( $id = 0, $text = "", \App\Model\Post $post, \App\Model\User $author) {
        $this->id 	= $id;
        $this->text = $text;

        $this->post   = $post;
        $this->author = $author; 
    }
}
