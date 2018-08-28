<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Property extends Model
{
    protected $table = 'properties';
    protected $primaryKey = 'id';

    public function scopeList($query){
      $query = DB::table('properties')
        ->select('*')
        ->paginate(10);
      return $query;
    }

    public function scopeActive($query){
      return $query->orderBy('id', 'DESC')
        ->where('status', 'active')
        ->get();
    }

    public function user() {
      return $this->belongsTo('App\User');
    }
}
