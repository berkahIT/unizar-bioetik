<?php

namespace App\Http\Controllers;

use App\Models\Konselor;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class KonselorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.konselor',[
            "konselor" => Konselor::all(),
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
            'nidn' => 'required',
            'email' => 'required',
            'tgl' => 'required',
        ]);

        Konselor::create($validatedDate);

        return redirect('/admin/konselor')->with('success','New Konselor has been addedd!');
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
        return view('admin.konselor_e');
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
        Konselor::destroy($id);

        return redirect('/admin/konselor')->with('success','Konselor has been delted!');
    }
}
