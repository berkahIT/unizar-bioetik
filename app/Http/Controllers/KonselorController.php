<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

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
            "konselor" => User::where('role', "konselor")->get()
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
            'name' => 'required',
            'username' => 'required',
            'password' => 'required',
            'jenis_kelamin' => 'required',
            'nim' => 'required',
            'email' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'spesialis' => 'required',
            'detail' => 'required',
            'jenis_konselor' => 'required',
            'role' => 'required',
            'profile_photo_path' => 'file|required'
        ]);

        if ($request->file('profile_photo_path')) {
            $validatedDate['profile_photo_path'] = $request->file('profile_photo_path')->store('/public/profile_photo_path');
        } else {
            echo "gagal";
        }

        User::create($validatedDate);

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
            "konselor" => User::where('id', $id)->first()
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
            'name' => 'required',
            'username' => 'required',
            'password' => 'required',
            'jenis_kelamin' => 'required',
            'nim' => 'required',
            'email' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'spesialis' => 'required',
            'detail' => 'required',
            'role' => 'required'
        ]);

        if ($request->file('profile_photo_path')) {

            if ($request->oldprofile_photo_path) {
                Storage::delete($request->oldprofile_photo_path);
            }
            $validatedDate['profile_photo_path'] = $request->file('profile_photo_path')->store('/public/profile_photo_path');
        }

        User::where('id', $id)->update($validatedDate);

        return redirect('/admin/konselor')->with('success', 'Konselor has been update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = User::where('id', $id)->first()->profile_photo_path;
        if ($data) {
            Storage::delete($data);
        }

        User::destroy($id);

        return redirect('/admin/konselor')->with('success', 'Konselor has been delted!');
    }
}
