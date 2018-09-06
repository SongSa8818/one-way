<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class RequestInfo extends Model
{
    public function scopeList($query){
        $query = DB::table('request_infos')
            ->select('*')
            ->limit(10);
        return $query;
    }
}
