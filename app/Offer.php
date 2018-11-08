<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Offer extends Model
{
    protected $table = 'offers';
    protected $primaryKey = 'id';

    public function scopeSelectListOffer($query)
    {
        $query = DB::table('offers')
            ->leftJoin('properties', 'properties.id', '=', 'offers.property_id')
            ->leftJoin('users', 'users.id', '=', 'offers.user_id')
            ->leftJoin('property_images', 'properties.id', '=', 'property_images.property_id')
            ->select('properties.property_number',
                DB::raw('MAX(properties.id) AS property_id,
                MAX(properties.title) AS title,
                MAX(properties.description) AS description,
                MAX(properties.price) AS price,
                MAX(properties.updated_at) AS updated_at,
                MAX(offers.id) AS id,
                MAX(offers.offer_amount) AS offer_amount,
                MAX(users.full_name) AS full_name,
                MAX(property_images.img) AS img
                '))
            ->groupBy('properties.property_number')
            ->orderBy("updated_at", "DESC")
            ->paginate(10);
        return $query;
    }

    public function scopeFindAllByPropertyId($query, $property_id)
    {
        $query = DB::table('offers')
            ->select('*')
            ->where('offers.property_id', '=', $property_id)
            ->get();
        return $query;
    }

    public function scopeSelectCountTotallyOffer($query){
        $query = DB::table('offers')->count();
        return $query;
    }

    public function scopeSelectShowDashboard($query){
        $query = DB::table('offers')
            ->leftJoin('properties', 'properties.id', '=', 'offers.property_id')
            ->leftJoin('users', 'users.id', '=', 'offers.user_id')
            ->leftJoin('property_images', 'properties.id', '=', 'property_images.property_id')
            ->select('offers.id','offers.offer_amount',
                'property_images.img',
                'properties.title','properties.property_number',
                'properties.id as property_id','users.full_name','users.picture')
            ->select('properties.property_number',
                DB::raw('
                MAX(properties.title) AS title,
                MAX(properties.updated_at) AS updated_at,
                MAX(offers.id) AS id,
                MAX(offers.offer_amount) AS offer_amount,
                MAX(users.full_name) AS full_name,
                MAX(users.picture) AS picture,
                MAX(property_images.img) AS img
                '))
            ->groupBy('properties.property_number')
            ->orderBy("updated_at", "DESC")
            ->limit(5)
            ->get();
        return $query;
    }
}
