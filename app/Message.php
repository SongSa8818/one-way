<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Message extends Model
{
    public function scopeMessage($query){
        $query = DB::table('messages')
            ->select('*')
            ->paginate(10);
        return $query;
    }
}