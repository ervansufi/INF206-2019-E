<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Ikan extends Model
{
    public function jumlahBid($id)
    {
        return DB::table('bids')->where('lelang_id', $id)->count();
    }

    public function riwayatBid($id)
    {
        return DB::table('ikans')
            ->where('bids.lelang_id', $id)
            ->join('bids', 'ikans.id', '=', 'bids.lelang_id')
            ->select('bids.*')
            ->orderBy('harga_lelang', 'DESC')
            ->get();
    }
}
