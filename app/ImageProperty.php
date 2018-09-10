<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ImageProperty extends Model
{
    protected $table = 'property_images';
    protected $primaryKey = 'id';

    public function scopeList($query, $property_id)
    {
        $query = DB::table($this->table)
            ->select('*')
            ->where($this->table . '.property_id', '=', $property_id)
            ->get();
        return $query;
    }

    public function scopeFindOneByPropertyId($query, $property_id)
    {
        $query = DB::table($this->table)
            ->where($this->table . '.property_id', '=', $property_id)
            ->limit(1)
            ->first();
        return $query;
    }

}
