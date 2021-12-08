<?php

namespace App\Http\Controllers;

use App\Siswa;
use Illuminate\Http\Request;

class ControllerSiswa extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswas = Siswa::all();
        return view('siswa', ['siswas' => $siswas, 'layout' => 'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siswas = Siswa::all();
        return view('siswa', ['siswas' => $siswas, 'layout' => 'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!is_null($request->foto)) {

            $this->validate($request, [
                'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:5120',
            ]);


            $foto = $request->file('foto');

            $nama_foto = time() . "_" . $foto->getClientOriginalName();

            $tujuan_upload = 'image';
            $foto->move($tujuan_upload, $nama_foto);
        } else {
            $nama_foto = ' ';
        }

        $siswa = new Siswa();
        $siswa->noinduk = $request->input('noinduk');
        $siswa->foto = $nama_foto;
        $siswa->namapanjang = $request->input('namapanjang');
        $siswa->nama = $request->input('nama');
        $siswa->umur = $request->input('umur');
        $siswa->minat = $request->input('minat');
        $siswa->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = Siswa::find($id);
        $siswas = Siswa::all();
        return view('siswa', ['siswas' => $siswas, 'siswa' => $siswa, 'layout' => 'show']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswa = Siswa::find($id);
        $siswas = Siswa::all();
        return view('siswa', ['siswas' => $siswas, 'siswa' => $siswa, 'layout' => 'edit']);
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
        if (!is_null($request->foto)) {

            $this->validate($request, [
                'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:5120',
            ]);

            // menyimpan data file yang diupload ke variabel $file
            $foto = $request->file('foto');

            $nama_foto = time() . "_" . $foto->getClientOriginalName();

            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'image';
            $foto->move($tujuan_upload, $nama_foto);
        } else {
            $nama_foto = " ";
        }


        $siswa = Siswa::find($id);
        $siswa->noinduk = $request->input('noinduk');
        if ($nama_foto != " ") {
            $siswa->foto = $nama_foto;
        }
        $siswa->namapanjang = $request->input('namapanjang');
        $siswa->nama = $request->input('nama');
        $siswa->umur = $request->input('umur');
        $siswa->minat = $request->input('minat');
        $siswa->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Siswa::find($id);
        $siswa->delete();
        return redirect('/');
    }
}
