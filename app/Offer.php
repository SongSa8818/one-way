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
            ->leftJoin('property_images', 'property_images.id', '=', 'properties.id')
            ->select('offers.id','offers.offer_amount',
                'properties.type','properties.status',
                'properties.title','properties.property_number','properties.id as property_id',
                'properties.price','property_images.img','users.full_name')
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
            ->leftJoin('property_images', 'property_images.id', '=', 'properties.id')
            ->select('offers.id','offers.offer_amount',
                'property_images.img',
                'properties.title','properties.property_number',
                'properties.id as property_id','users.full_name','users.picture')
            ->limit(5)
            ->get();
        return $query;
    }
}
