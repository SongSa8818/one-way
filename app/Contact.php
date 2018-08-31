<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Contact extends Model
{
    public function scopeContact($query){
        $query = DB::table('contacts')
            ->select('*')
            ->paginate(10);
        return $query;
    }

}