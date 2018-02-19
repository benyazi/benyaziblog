<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = "tags";

    public function toArray()
    {
        $array = parent::toArray(); // TODO: Change the autogenerated stub
        $array['url'] = route('post.bytag', ['tag'=>$this->name]);
        return $array;
    }
}