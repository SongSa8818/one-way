<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class About extends Model
{
    public function scopeAbout($query){
        $query = DB::table('abouts')
            ->select('*')
            ->paginate(10);
        return $query;
    }

}
