<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $id;
    public $name;

    public function __construct( $id = 0, $name = "") {
        $this->id   = $id;
        $this->name = $name;
    }
}
