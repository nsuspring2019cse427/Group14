<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{


    public function tag()
    {
        return $this->belongsToMany('App\Tag', 'form_tags', 'form_id', 'tag_id');
    }
}
