<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prod_user extends Model
{
    public $table="prod_user";

    public function prod(){
        return $this->belongsTo('App\prod');
    }
}
