<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table = 'properties';
    protected $primaryKey = 'id';


    public function scopeActive($query){
      return $query->orderBy('id', 'DESC')
        ->where('status', 'active')
        ->get();
    }

    public function user() {
      return $this->belongsTo('App\User');
    }
}
