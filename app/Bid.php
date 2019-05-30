<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Bid extends Model
{
    public function harga_bid($id)
    {
        return DB::table('ikans')->where('id', $id)->first();
    }
}
