<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Property extends Model
{
    protected $table = 'properties';
    protected $primaryKey = 'id';

    public function scopeSelectPropertyExclusive($query)
    {
        $query = DB::table('properties')
            ->leftJoin('property_images', 'properties.id', '=', 'property_images.property_id')
            ->select('properties.title','properties.description',
                'properties.id','properties.type','properties.price','property_images.img')
            ->paginate(10);
        return $query;
    }

    public function scopeSelectById($query, $id)
    {
        $query = DB::table('properties')
            ->leftJoin('cities', 'properties.city_id', '=', 'cities.id')
            ->leftJoin('khans', 'properties.khan_id', '=', 'khans.id')
            ->leftJoin('sangkats', 'properties.sangkat_id', '=', 'sangkats.id')
            ->leftJoin('villages', 'properties.village_id', '=', 'villages.id')
            ->select('*', 'cities.id as city_id', 'cities.name as city_name',
                'khans.id as khan_id', 'khans.name as khan_name',
                'sangkats.id as sangkat_id', 'sangkats.name as sangkat_name',
                'villages.id as village_id', 'villages.name as village_name')
            ->where('properties.id', '=', $id)
            ->limit(1)
            ->first();
        return $query;
    }

    public function scopeSelectPropertyByShowing($query, $status)
    {
        $query = DB::table('properties')
            ->leftJoin('property_images', 'properties.id', '=', 'property_images.property_id')
            ->leftJoin('users', 'users.id', '=', 'properties.blocked_by')
            ->select('properties.title','properties.description',
                'properties.id','properties.type',
                'properties.price','properties.status','properties.updated_at',
                'property_images.img','users.picture')
            ->where('properties.status', '=', $status)
            ->paginate(10);
        return $query;
    }

    public function scopeActive($query)
    {
        return $query->orderBy('id', 'DESC')
            ->where('status', 'active')
            ->get();
    }

    public function scopeSelectHomeLatest($query)
    {
        $query = DB::table('properties')
            ->leftJoin('property_images', 'properties.id', '=', 'property_images.property_id')
            ->select('properties.title','properties.description','properties.id',
                'properties.type','properties.price','properties.status','property_images.img')
            ->limit(10)
            ->get();
        return $query;
    }

    public function scopeSearch($query, $parameters = array())
    {
        $query = DB::table('properties')
            ->select('*')
            ->leftJoin('property_images', 'properties.id', '=', 'property_images.property_id')
            ->leftJoin('cities', 'properties.city_id', '=', 'cities.id');
            if($parameters['title'] != null) {
                $query->where('properties.title', 'like', '%' . $parameters['title'] . '%');
            }
            if ($parameters['type'] != null) {
                $query->where('type', '=', $parameters['type']);
            }
            if ($parameters['status'] != null) {
                $query->where('status', '=', $parameters['status']);
            }
            if ($parameters['location'] != null) {
                $query->where('cities.name', '=', $parameters['location']);
            }
        //dd($query->toSql());
        return $query->paginate(10);
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
