<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Khan extends Model
{
  public function scopeKhansByCity($query){
    $query = DB::table('khans')
      ->join('cities', 'khans.city_id', '=', 'cities.id')
      ->select('khans.id','khans.name','cities.id as city_id','cities.name as city_name')
      ->paginate(10);
    return $query;
  }

  public function scopeFindKhansByCity($query, $city_id) {
    $query = DB::table('khans')
      ->select('khans.id','khans.name')
      ->where('khans.city_id', '=', $city_id)
      ->get();
    return $query;
  }

  public function city(){
    return $this->belongsTo('App\City');
  }

  public function sangkats(){
    return $this->hasMany('App\Sangkat');
  }
}
