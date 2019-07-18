<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    // protected $fillable = ['student_name', 'roll', 'class', 'status'];
    protected $guarded = [];
    public function scopeActive($query){
        return $query->where('status', 1);
    }
    public function scopeInactive($query){
        return $query->where('status', 0);
    }
    public function academy(){
        return $this->belongsTo(Academy::class);
    }
    public function getStatusAttribute($attribute){
        return [
            0 => 'Inactive',
            1 => 'Active'
        ][$attribute];
    }
}
