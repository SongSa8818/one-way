<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Customer extends Model
{
    public function scopeCustomer($query){
        $query = DB::table('customers')
            ->select('*')
            ->paginate(10);
        return $query;
    }
}