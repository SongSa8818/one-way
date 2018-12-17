<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class RequestInfo extends Model
{
    public function scopeList($query){
        $query = DB::table('request_infos')
            ->leftJoin('users', 'users.id', '=', 'request_infos.customer_id')
            ->select('request_infos.*', 'users.full_name AS customer_id', 'users.phone_number')
            ->paginate(10);
        return $query;
    }

    public function scopeDashboard($query)
    {
        $query = DB::table('request_infos')
            ->leftJoin('users', 'users.id', '=', 'request_infos.customer_id')
            ->select('request_infos.*', 'users.full_name AS customer_id', 'users.phone_number')
            ->paginate(5);
        return $query;
    }

    public function scopeGetSingleRecord($query, $id)
    {
        $query = DB::table('request_infos')
            ->leftJoin('users', 'users.id', '=', 'request_infos.customer_id')
            ->select('request_infos.*', 'users.full_name AS customer_name', 'users.phone_number')
            ->where('request_infos.id', '=', $id)
            ->first();
        return $query;
    }

    public function scopeSelectCountTotallyRequest($query) {
        $query = DB::table('request_infos')->count();
        return $query;
    }
}
