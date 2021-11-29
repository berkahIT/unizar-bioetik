<?php

namespace App\Http\Controllers;

use App\Models\Konselor;
use App\Models\Konsultasi;
use App\Models\Mahasiswa;
use App\Models\RekamMedik;
use Illuminate\Http\Request;

class KonsultasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.konsultasi ', [
            "konsultasi" => Konsultasi::all(),
            "mahasiswa" => Mahasiswa::all(),
            "konselor" => Konselor::all(),
            "rekam_medik" => RekamMedik::all(),
        ]);
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
        $validatedDate = $request->validate([
            'mahasiswa_id' => 'required',
            'konselor_id' => 'required',
            'rekam_medik' => 'required',
            'rekam_medik_id' => 'required',
            'tanggal' => 'required',
            'jenis_konsultasi' => 'required',
            'status' => 'required'
        ]);

        Konsultasi::create($validatedDate);

        return redirect('/admin/konsultasi')->with('success', 'New Konsultasi has been addedd!');
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
        return view('admin.konsultasi_e', [
            "title" => "konsultasi",
            "konsultasi" => Konsultasi::where('id', $id)->first(),
            "mahasiswa" => Mahasiswa::all(),
            "konselor" => Konselor::all(),
            "rekam_medik" => RekamMedik::all(),
        ]);
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
        $validatedDate = $request->validate([
            'mahasiswa_id' => 'required',
            'konselor_id' => 'required',
            'rekam_medik' => 'required',
            'rekam_medik_id' => 'required',
            'tanggal' => 'required',
            'jenis_konsultasi' => 'required',
            'status' => 'required'
        ]);

        Konsultasi::where('id', $id)->update($validatedDate);

        return redirect('/admin/konsultasi')->with('success', 'Konsultasi has been update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Konsultasi::destroy($id);

        return redirect('/admin/konsultasi')->with('success', 'Konsultasi has been delted!');
    }
}
