<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    //
    protected $table = "class";
    protected $primaryKey =  "id_class";
    protected $guarded = [];
}
