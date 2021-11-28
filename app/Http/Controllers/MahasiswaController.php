<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;


class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.mahasiswa', [
            "mahasiswa" => Mahasiswa::all(),
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
            'nama' => 'required',
            'username' => 'required',
            'passwords' => 'required',
            'jenis_kelamin' => 'required',
            'nim' => 'required',
            'email' => 'required',
            'tanggal' => 'required',
        ]);

        Mahasiswa::create($validatedDate);

        return redirect('/admin/mahasiswa')->with('success', 'New mahasiswa has been addedd!');
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
        return view('admin.mahasiswa_e', [
            "title" => "mahasiswa",
            "mahasiswa" => Mahasiswa::where('id', $id)->first()
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
            'nama' => 'required',
            'username' => 'required',
            'passwords' => 'required',
            'nim' => 'required',
            'email' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal' => 'required'
        ]);

        Mahasiswa::where('id', $id)->update($validatedDate);

        return redirect('/admin/mahasiswa')->with('success', 'mahasiswa has been update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Mahasiswa::destroy($id);

        return redirect('/admin/mahasiswa')->with('success', 'mahasiswa has been delted!');
    }
}
