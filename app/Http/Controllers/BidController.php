<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use App\Ikan;
use App\Bid;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $riwayat_bid = DB::table('users')
            ->where('bids.user_id', Auth::user()->id)
            ->join('bids', 'users.id', '=', 'bids.user_id')
            ->select('bids.*')
            ->orderBy('created_at', 'DESC')
            ->get();

        return view('bidding', compact('riwayat_bid'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($lelang_id)
    {
        $ikan = Ikan::find($lelang_id);
        $riwayat_bid = DB::table('ikans')
            ->where('bids.lelang_id', $ikan->id)
            ->join('bids', 'ikans.id', '=', 'bids.lelang_id')
            ->select('bids.*')
            ->orderBy('harga_lelang', 'DESC')
            ->get();

        return view('bidding-tambah', compact('ikan', 'riwayat_bid'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $data
     * @param  int  $lelang_id
     * @return \Illuminate\Http\Response
     */
    public function store(Request $data, $lelang_id)
    {
        $ikan = Ikan::find($lelang_id);

        $duplicate = DB::table('ikans')
            ->where([['bids.lelang_id', $ikan->id], ['bids.user_id', Auth::user()->id]])
            ->join('bids', 'ikans.id', '=', 'bids.lelang_id')
            ->select('bids.*')
            ->get()->first();
        if ($duplicate != NULL) {
            return redirect()->route('bid.tambah', $lelang_id);
        }

        $query = 'gt:' . $ikan->harga_bid;

        $this->validate($data, [
            'harga_bid' => ['required', 'numeric', $query]
        ]);

        $bid = new Bid();
        $bid->lelang_id = $lelang_id;
        $bid->user_id = Auth::user()->id;
        $bid->nama_lelang = Auth::user()->name;
        $bid->harga_lelang = $data->input('harga_bid');
        $bid->created_at = time();
        $bid->updated_at = time();
        $bid->save();

        return redirect()->route('bid');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Bid::find($id);
        $riwayat_bid = DB::table('ikans')
            ->where('bids.lelang_id', $data->lelang_id)
            ->join('bids', 'ikans.id', '=', 'bids.lelang_id')
            ->select('bids.*')
            ->orderBy('harga_lelang', 'DESC')
            ->get();

        $ikan = DB::table('ikans')
            ->where('bids.lelang_id', $data->lelang_id)
            ->join('bids', 'ikans.id', '=', 'bids.lelang_id')
            ->select('ikans.*')
            ->get()
            ->first();

        return view('bidding-edit', compact('riwayat_bid', 'ikan', 'data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $data, $id)
    {
        $bid = Bid::find($id);
        $max_harga = $bid->harga_bid($bid->lelang_id);

        $query = 'gt:' . $max_harga->harga_bid;
        $this->validate($data, [
            'harga_bid' => ['required', 'numeric', $query]
        ]);

        $bid->harga_lelang = $data->input('harga_bid');
        $bid->created_at = time();
        $bid->save();
        return redirect()->route('bid.edit', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bid = Bid::where('id', $id);
        $bid->delete();

        return redirect()->route('bid');
    }
}
