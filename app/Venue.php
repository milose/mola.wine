<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    public static function findOrAll($needle = '')
    {
        if (!empty($needle)) {
            return Venue::where('name', 'like', "%{$needle}%")
                ->orWhere('address', 'like', "%{$needle}%")
                ->orWhere('city', 'like', "%{$needle}%")
                ->get();
        }
        else {
            return Venue::all();
        }
    }
}
