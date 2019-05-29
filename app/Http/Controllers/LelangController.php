<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;

class LelangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('lelang');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('lelang-tambah');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // validate request data
         $this->validate($request, [
            'jenis_ikan' => 'required|string|max:50',
            'berat_ikan' => 'required|numeric|max:100',
            'satuan' => 'required|numeric',
            'harga_bid' => 'required|string|max:10',
            'video_ikan'=>'mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:100040|required'
        ]);
        // save into table
        DB::table('ikans')->insert([
            'jenis_ikan' => $request->jenis,
            'berat_ikan' => $request->berat,
            'satuan'=> $request->satuan,
            'harga_bid' => $request->harga,
            'video_ikan' => $request->video_ikan
        ]);
        return redirect('/')->with('Berhasil Membuat Lelang Ikan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('lelang-tampil');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ikan = DB::table('ikan')->where('id',$id)->get();
        return view('edit',['ikan'=>'$ikan']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         // update data ikan
        DB::table('ikans')->where('id',$request->id)->update([
            'jenis_ikan' => $request->jenis,
            'berat_ikan' => $request->berat_ikan,
            'harga_bid' => $request->harga,
            'video_ikan' => $request->video_ikan
        ]);
        // alihkan halaman ke halaman ikan
        return redirect('/lelang/{id}/update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
