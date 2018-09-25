<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Offer extends Model
{
    protected $table = 'offers';
    protected $primaryKey = 'id';

    public function scopeSelectList($query)
    {
        $query = DB::table('offers')
            ->leftJoin('properties', 'properties.id', '=', 'offers.property_id')
            ->leftJoin('users', 'users.id', '=', 'offers.user_id')
            ->leftJoin('property_images', 'property_images.id', '=', 'properties.id')
            ->select('offers.id','offers.offer_amount','properties.title',
                'properties.price','property_images.img','users.full_name')
            ->limit(10)
            ->get();
        return $query;
    }
}
