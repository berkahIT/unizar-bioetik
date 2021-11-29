<?php

namespace App\Http\Controllers;

use App\Models\Assesment;
use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Http\Request;

class AssesmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.assesment', [
            "assesment" => Assesment::all(),
            "mahasiswa" => Mahasiswa::where('id', "1")->get()
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
        return view('admin.assesment_e', [
            "title" => "Assesment Mandiri",
            "assesment" => Assesment::where('id', $id)->first(),
            "mahasiswa" => Mahasiswa::where('id', "1")->get()
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
            'user_id' => 'required',
            'nama'  => 'required',
            'skor' => 'required',
            'keterangan' => 'required'
        ]);

        Assesment::where('id', $id)->update($validatedDate);

        return redirect('/admin/assesment')->with('success', 'Assesment has been update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Assesment::destroy($id);

        return redirect('/admin/assesment')->with('success', 'Assesment has been delted!');
    }
}
