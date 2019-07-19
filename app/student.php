<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    // protected $fillable = ['student_name', 'roll', 'class', 'status'];
    protected $guarded = [];
    protected $attributes = [
        'status' => 1
    ];
    public function scopeActive($query){
        return $query->where('status', 1);
    }
    public function scopeInactive($query){
        return $query->where('status', 0);
    }
    public function academy(){
        return $this->belongsTo(Academy::class);
    }
    public function setStatusAttribute($attribute){
        return $this->activeOptions()[$attribute];
    }
    public function getStatusAttribute($attribute){
        return $this->activeOptions()[$attribute];
    }
    public function activeOptions()
    {
        return [
            1 => 'Active',
            0 => 'Inactive',
            2 => 'In-Progress'
        ];
    }
}
