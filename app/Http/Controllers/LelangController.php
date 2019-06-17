<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Ikan;
use App\Bid;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class LelangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ikan = Ikan::where('user_id', '=', Auth::user()->id)->get();
        return view('lelang', compact('ikan'));
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
     * @param  \Illuminate\Http\Request  $data
     * @return \Illuminate\Http\Response
     */
    public function store(Request $data)
    {
        // validate request data
        $this->validate($data, [
            'jenis_ikan' => 'required|string|max:50',
            'berat_ikan' => 'required|numeric|max:100',
            'satuan' => 'required',
            'harga_bid' => 'required|string|max:10',
            'video_ikan' => 'mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|required',
            'image_ikan' => 'mimes:jpg,jpeg,png|required'
        ]);

        if ($data->hasFile('video_ikan') && $data->hasFile('image_ikan')) {
            $fileNameWithExt = $data->file('video_ikan')->getClientOriginalName();
            $imageNameWithExt = $data->file('image_ikan')->getClientOriginalName();

            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $imagename = pathinfo($imageNameWithExt, PATHINFO_FILENAME);

            $extensionvideo = $data->file('video_ikan')->getClientOriginalExtension();
            $extensionimage = $data->file('image_ikan')->getClientOriginalExtension();

            $filenameToStore = $filename . '.' . $extensionvideo;
            $imagenameToStore = $imagename . '.' . $extensionimage;
            $path = $data->file('video_ikan')->storePubliclyAs('', $filenameToStore, 'public');
            $pathimage = $data->file('image_ikan')->storePubliclyAs('image', $imagenameToStore, 'public');
        } else {
            return redirect()->route('lelang.tambah');
        }

        // save into table
        $lelang = new Ikan();
        $lelang->user_id = Auth::user()->id;
        $lelang->Jenis_Ikan = $data->input('jenis_ikan');
        $lelang->berat_ikan = $data->input('berat_ikan') . ' ' . $data->input('satuan');
        $lelang->video_ikan = $filenameToStore;
        $lelang->image_ikan = $imagenameToStore;
        $lelang->harga_bid = $data->input('harga_bid');
        $lelang->status = 'berlangsung';
        $lelang->waktu = time() + (60 * $data->durasi);
        $lelang->created_at = time();
        $lelang->updated_at = time() + (60 * $data->durasi);
        $lelang->save();

        return redirect()->route('lelang');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ikan = Ikan::find($id);
        return view('lelang-tampil', compact('ikan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($lelang_id)
    {
        $ikan = Ikan::find($lelang_id);
        $ikan->status = "selesai";
        $ikan->save();
        return redirect()->route('lelang');
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
        DB::table('ikans')->where('id', $request->id)->update([
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
        $ikan = Bid::find($id);
        $bid = Bid::where('id', $id);
        $bid->delete();

        return redirect()->route('lelang.tampil', $ikan->lelang_id);
    }

    public function delete($id)
    {
        $Ikan = Ikan::where('id', $id);
        $Ikan->delete();

        return redirect()->route('lelang');
    }
}
