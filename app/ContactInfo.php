<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ContactInfo extends Model
{
    public function scopeContactInfo($query){
        $query = DB::table('contact_infos')
            ->select('*')
            ->limit(1);
        return $query;
    }
}
