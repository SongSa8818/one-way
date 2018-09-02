<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Sangkat extends Model
{
  public function scopeSangkatKhan($query){
    $query = DB::table('sangkats')
      ->join('khans', 'sangkats.khan_id', '=', 'khans.id')
      ->select('sangkats.id','sangkats.name','khans.id as khan_id','khans.name as khan_name')
      ->paginate(10);
    return $query;
  }

  public function scopeFindSangkatsByKhan($query, $khan_id) {
    $query = DB::table('sangkats')
      ->select('sangkats.id','sangkats.name')
      ->where('sangkats.khan_id', '=', $khan_id)
      ->get();
    return $query;
  }

  public function khan(){
    return $this->belongsTo('App\Khan');
  }

  public function village(){
    return $this->hasMany('App\Village');
  }
}
