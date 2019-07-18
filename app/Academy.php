<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Academy extends Model
{
    protected $guarded = [];
    public function student(){
        return $this->hasMany(student::class);
    }
}
