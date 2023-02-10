<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\DataSiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;

class DataSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = DataSiswa::all()->latest();
        if ($request->ajax()) {
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn =
                        '
                        <form onsubmit="return confirm(\'Apakah anda yakin ingin menghapus ' .
                        $row->name .
                        ' ?\');"  action="dataSiswas/' .
                        $row->id .
                        '" method="POST">

                            <a class="btn btn-primary" href="dataSiswas/' .
                        $row->id .
                        '/edit" >
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg>
                            </a>

                            ' .
                        csrf_field() .
                        '
                            ' .
                        method_field('DELETE') .
                        '

                            <button type="submit" class="btn btn-danger">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                </svg>
                            </button>
                        </form>
                        ';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('dataSiswas.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dataSiswas.registrasi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nisn' => 'required',
            'jk' => 'required',
            'name' => 'required',
            'asal_sekolah' => 'required',
            'email' => 'required',
            'no_tlp' => 'required',
            'no_tlp_ibu' => 'required',
            'no_tlp_ayah' => 'required',
            'referensi' => 'required',
        ]);

        $data = DataSiswa::create([
            'nisn' => $request->nisn,
            'jk' => $request->jk,
            'name' => $request->name,
            'asal_sekolah' => $request->asal_sekolah,
            'email' => $request->email,
            'no_tlp' => $request->no_tlp,
            'no_tlp_ibu' => $request->no_tlp_ibu,
            'no_tlp_ayah' => $request->no_tlp_ayah,
            'referensi' => $request->referensi,
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'user' => $request->name,
            'password' => Hash::make($request->nisn),
        ])->attachRole('siswa');

        if($data) {
            toast('Registrasi Berhasil Di Buat!','success');
        }else {
            toast('Registrasi Gagal Di Buat!','error');
        }

        return redirect()->route('dataSiswas.info');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataSiswa  $dataSiswa
     * @return \Illuminate\Http\Response
     */
    public function show(DataSiswa $dataSiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataSiswa  $dataSiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(DataSiswa $dataSiswa)
    {
        return view('dataSiswas.edit', compact('dataSiswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataSiswa  $dataSiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataSiswa $dataSiswa)
    {
        $request->validate([
            'nisn' => 'required',
            'jk' => 'required',
            'name' => 'required',
            'asal_sekolah' => 'required',
            'email' => 'required',
            'no_tlp' => 'required',
            'no_tlp_ibu' => 'required',
            'no_tlp_ayah' => 'required',
            'referensi' => 'required',
            'status' => 'required',
        ]);

        $data = $dataSiswa->update([
            'nisn' => $request->nisn,
            'jk' => $request->jk,
            'name' => $request->name,
            'asal_sekolah' => $request->asal_sekolah,
            'email' => $request->email,
            'no_tlp' => $request->no_tlp,
            'no_tlp_ibu' => $request->no_tlp_ibu,
            'no_tlp_ayah' => $request->no_tlp_ayah,
            'referensi' => $request->referensi,
            'status' => $request->status,
        ]);

        if($data) {
            toast('Registrasi Berhasil Di Buat!','success');
        }else {
            toast('Registrasi Gagal Di Buat!','error');
        }

        return redirect()->route('dataSiswas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataSiswa  $dataSiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataSiswa $dataSiswa)
    {
        $dataSiswa->delete();

        if($dataSiswa) {
            toast('Deleted Successfully!','success');
        }else {
            toast('Failed To Delete!','error');
        }

        return redirect()->route('dataSiswas.index');
    }

    public function showAccount()
    {
        return view('dataSiswas.info');
    }
}
