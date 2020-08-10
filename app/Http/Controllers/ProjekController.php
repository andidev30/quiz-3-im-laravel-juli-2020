<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProjekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = DB::table('projek')->get();
        // dd($data);
        return view('projek.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('projek.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $query = DB::table('projek')->insert([
            "nama_projek"     => $request->name_projek,
            "deskripsi"       => $request->deskripsi,
            "tangal_mulai"       => $request->date_start,
            "tanggal_deadline"       => $request->date_end,
            "status"       => false,
        ]);

        return redirect('/projek');
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
        //
        $data = DB::table('projek')->where('id', $id)->first();
        return view('projek.edit', compact('data'));
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
        //
        $query = DB::table('projek')
                            ->where('id', $id)
                            ->update([
                                "nama_projek"     => $request->name_projek,
                                "deskripsi"       => $request->deskripsi,
                                "tangal_mulai"       => $request->date_start,
                                "tanggal_deadline"       => $request->date_end,
                                "status"                => false
                            ]);
        return redirect('/projek')->with('success', 'berhasil update');
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
        $query = DB::table('projek')->where('id', $id)->delete();

        return redirect('/projek')->with('success', 'berhasil dihapus');
    }
}
