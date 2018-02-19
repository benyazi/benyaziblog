<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CareerItem extends Model
{
    protected $table = "career_items";
    protected $dates = ["start_work", "end_work"];

}