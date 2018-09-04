<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Contact_info extends Model
{
    public function scopeContact_info($query){
        $query = DB::table('contact_info')
            ->select('*')
            ->paginate(10);
        return $query;
    }

}
