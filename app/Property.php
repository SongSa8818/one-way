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
            ->LeftJoin('property_images', 'properties.id', '=', 'property_images.property_id')
            ->select('properties.property_number',
                DB::raw('MAX(properties.id) AS id,
                MAX(properties.title) AS title,
                MAX(properties.type) AS type,
                MAX(properties.description) AS description,
                MAX(properties.price) AS price,
                MAX(properties.status) AS status,
                MAX(properties.updated_at) AS updated_at,
                MAX(property_images.img) AS img'))
            ->groupBy('properties.property_number')
            ->orderBy("updated_at", "DESC")
            ->paginate(10);
        return $query;
    }

    public function scopeList($query){
        $query = DB::table('properties')
            ->select('*')
            ->orderBy('created_at', "DESC")
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
            ->select('*', 'properties.id as id', 'cities.id as city_id', 'cities.name as city_name',
                'khans.id as khan_id', 'khans.name as khan_name',
                'sangkats.id as sangkat_id', 'sangkats.name as sangkat_name',
                'villages.id as village_id', 'villages.name as village_name')
            ->where('properties.id', '=', $id)
            ->limit(1)
            ->first();
        return $query;
    }

    public function scopeSelectPropertyByBlocking($query, $status)
    {
        $query = DB::table('properties')
            ->leftJoin('property_images', 'properties.id', '=', 'property_images.property_id')
            ->leftJoin('users', 'users.id', '=', 'properties.blocked_by')
            ->select('properties.property_number',
                DB::raw('MAX(properties.id) AS id,
                MAX(properties.title) AS title,
                MAX(properties.type) AS type,
                MAX(properties.description) AS description,
                MAX(properties.price) AS price,
                MAX(properties.status) AS status,
                MAX(properties.updated_at) AS updated_at,
                MAX(users.picture) AS picture,
                MAX(property_images.img) AS img'))
            ->where('properties.status', '=', $status)
            ->groupBy('properties.property_number')
            ->orderBy("updated_at", "DESC")
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
            ->LeftJoin('property_images', 'properties.id', '=', 'property_images.property_id')
            ->select('properties.property_number',
                DB::raw('MAX(properties.id) AS id,
                MAX(properties.title) AS title,
                MAX(properties.type) AS type,
                MAX(properties.price) AS price,
                MAX(properties.status) AS status,
                MAX(properties.updated_at) AS updated_at,
                MAX(property_images.img) AS img'))
            ->groupBy('properties.property_number')
            ->limit(12)
            ->orderBy("updated_at", "DESC")
            ->get();
        return $query;
    }

    public function scopeSearch($query, $parameters = array())
    {
        $query = DB::table('properties')
            ->select('properties.property_number',
                DB::raw('MAX(properties.id) AS id,
                MAX(properties.title) AS title,
                MAX(properties.description) AS description,
                MAX(properties.type) AS type,
                MAX(properties.price) AS price,
                MAX(properties.status) AS status,
                MAX(properties.updated_at) AS updated_at,
                MAX(property_images.img) AS img'))
            ->leftJoin('property_images', 'properties.id', '=', 'property_images.property_id')
            ->leftJoin('cities', 'properties.city_id', '=', 'cities.id');

            if($parameters['property_number'] != null) {
                $query->where('properties.property_number', 'like', '%' . $parameters['property_number'] . '%');
            }
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
        $query->groupBy('properties.property_number');
        $query->orderBy("updated_at", "DESC");
        return $query->paginate(10);
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function scopeSelectCountTotallyProperty($query){
        $query = DB::table('properties')->count();
        return $query;
    }

    public function scopeSelectShowingDashboard($query, $status)
    {
        $query = DB::table('properties')
            ->leftJoin('property_images', 'properties.id', '=', 'property_images.property_id')
            ->leftJoin('users', 'users.id', '=', 'properties.blocked_by')
            ->select('properties.property_number',
                DB::raw('MAX(properties.id) AS id,
                MAX(properties.title) AS title,
                MAX(properties.description) AS description,
                MAX(properties.price) AS price,
                MAX(properties.updated_at) AS updated_at'))
            ->where('properties.status', '=', $status)
            ->groupBy('properties.property_number')
            ->limit(4)
            ->orderBy("updated_at", "DESC")
            ->get();
        return $query;
    }
}
