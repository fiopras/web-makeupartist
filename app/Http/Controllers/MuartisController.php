<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Muartis;

class MuartisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $muartis = Muartis::all();
        return view('Muartis.index', compact('muartis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Muartis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'nama' => 'required',
        //     'instagram' => 'required',
        //     'contact' => 'required',
        //     'kawasan' => 'required',
        //     'provinsi' => 'required',
        //     'gambar' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
        // ]);

        Muartis::create($request->all());
        // dd($request->all());
        return redirect('/makeupartist')->with('pesan', 'Data Berhasil Di Tambahkan!');
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
    public function edit(muartis $muartis)
    {
        return view('Muartis.edit', compact('muartis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, muartis $muartis)
    {
        Muartis::where('id', $muartis->id)
            ->update([
                'nama' => $request->nama,
                'instagram' => $request->instagram,
                'contact' => $request->contact,
                'kawasan' => $request->kawasan,
                'provinsi' => $request->provinsi,
                'gambar' => $request->gambar,
            ]);

        return redirect('/makeupartist')->with('status', 'Data Berhasil Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(muartis $muartis)
    {
        Muartis::destroy($muartis->id);
        return redirect('/makeupartist')->with('notif', 'Data Berhasil Di Hapus!');
        // echo $request['muartis'];
    }
}
