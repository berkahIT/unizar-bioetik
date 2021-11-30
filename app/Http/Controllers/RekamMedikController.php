<?php

namespace App\Http\Controllers;

use App\Models\Konsultasi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RekamMedikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.rekam_medik', [
            "rekam_medik" => Konsultasi::where('rekam_medik', true)->get(),
            "mahasiswa" => User::where('role', "mahasiswa")->get()
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
        return view('admin.rekam_medik_e', [
            "title" => "rekam_medik",
            "rekam_medik" => Konsultasi::where('id', $id)->first(),
            "mahasiswa" => User::where('role', "mahasiswa")->get()
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
            'status' => 'required'
        ]);

        if ($request->file('photo_rekam_medik')) {

            if ($request->oldphoto_rekam_medik) {
                Storage::delete($request->oldphoto_rekam_medik);
            }
            $validatedDate['photo_rekam_medik'] = $request->file('photo_rekam_medik')->store('/public/photo_rekam_medik');
        }

        Konsultasi::where('id', $id)->update($validatedDate);

        return redirect('/admin/rekam_medik')->with('success', 'Rekam Medik has been update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Konsultasi::where('id', $id)->first()->photo_rekam_medik;
        if ($data) {
            Storage::delete($data);
        }

        Konsultasi::destroy($id);

        return redirect('/admin/rekam_medik')->with('success', 'Rekam Medik has been delted!');
    }
}
