<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\siswakelas;
use App\kelas;
use Illuminate\Support\Facades\DB;

class siswacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data = DB::table('t_siswakelas', 't_kelas')
        ->Join('t_siswa', 't_siswakelas.idsiswa', '=', 't_siswa.id')
        ->Join('t_kelas', 't_siswakelas.idkelas', '=', 't_kelas.id')
        ->Join('t_jurusan', 't_kelas.idjurusan', '=', 't_jurusan.id')
        ->select('t_siswakelas.*', 't_siswa.*', 't_kelas.*', 't_jurusan.*')
        ->get ();
        return view('index', ['data'=>$data]);
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
