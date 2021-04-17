<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $guarded = [];

    /*
     *  Identifies the relantionship between User and Post models
     */
    public function user(){
        return $this->belongsTo(User::class);
    }

}
