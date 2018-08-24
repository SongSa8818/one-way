<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table = 'properties';
    protected $primaryKey = 'id';
    protected $fillable = [
      'title', 'description', 'price', 'video_url', 'status'
    ];

    public function scopeActive($query){
      return $query->orderBy('id', 'DESC')
        ->where('status', 'active')
        ->get();
    }

    public function user() {
      return $this->belongsTo('App\User');
    }
}
