<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SlideshowImage extends Model
{
    public function scopeSlideshowImage($query){
        $query = DB::table('slideshow_images')
            ->select('*')
            ->paginate(10);
        return $query;
    }
}