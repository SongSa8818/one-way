<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Village extends Model
{
  public function scopeVillageSangkat($query){
    $query = DB::table('villages')
      ->join('sangkats', 'villages.sangkat_id', '=', 'sangkats.id')
      ->select('villages.id','villages.name','sangkats.id as sangkat_id','sangkats.name as sangkat_name')
      ->paginate(10);
    return $query;
  }

  public function sangkat(){
    return $this->belongsTo('App\Sangkat');
  }
}
