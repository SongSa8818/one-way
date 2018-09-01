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

  public function scopeSelectById($query, $id){
    $query = DB::table('properties')
      ->leftJoin('cities', 'properties.city_id', '=', 'cities.id')
      ->leftJoin('khans', 'properties.khan_id', '=', 'khans.id')
      ->leftJoin('sangkats', 'properties.sangkat_id', '=', 'sangkats.id')
      ->leftJoin('villages', 'properties.village_id', '=', 'villages.id')
      ->select('*','cities.id as city_id','cities.name as city_name',
        'khans.id as khan_id','khans.name as khan_name',
        'sangkats.id as sangkat_id','sangkats.name as sangkat_name',
        'villages.id as village_id','villages.name as village_name')
      ->where('properties.id', '=', $id)
      ->limit(1)
      ->first();
    //dd($query);
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
