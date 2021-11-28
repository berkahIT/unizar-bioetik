<?php

namespace App\Http\Controllers;

use App\Models\Konselor;
use App\Models\User;
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
        return view('admin.konselor', [
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
            'tanggal' => 'required',
        ]);

        Konselor::create($validatedDate);

        return redirect('/admin/konselor')->with('success', 'New Konselor has been addedd!');
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
        return view('admin.konselor_e', [
            "title" => "Konselor",
            "konselor" => Konselor::where('id', $id)->first()
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
            'nidn' => 'required',
            'email' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal' => 'required'
        ]);

        Konselor::where('id', $id)->update($validatedDate);

        return redirect('/admin/konselor')->with('success','Konselor has been update!');
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

        return redirect('/admin/konselor')->with('success', 'Konselor has been delted!');
    }
}
