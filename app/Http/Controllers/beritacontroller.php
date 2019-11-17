<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\berita;
use Illuminate\Support\Facades\DB;

class beritacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $berita= DB::table('t_berita')
        ->select('t_berita.*')
        ->orderBy('t_berita.update_at')
        ->get();

        $data = DB::table('t_siswakelas', 't_kelas')
        ->Join('t_siswa', 't_siswakelas.idsiswa', '=', 't_siswa.id')
        ->Join('t_kelas', 't_siswakelas.idkelas', '=', 't_kelas.id')
        ->Join('t_jurusan', 't_kelas.idjurusan', '=', 't_jurusan.id')
        ->select('t_siswakelas.*', 't_siswa.*', 't_kelas.*', 't_jurusan.*')
        ->get ();
        $data1 = DB::table('t_karyawan')->get();
        return view('index',compact('berita', 'data', 'data1'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $data=berita::where('id',$id)->first();
        return view('detil', compact('data'));
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
