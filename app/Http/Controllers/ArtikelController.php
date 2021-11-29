<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.artikel', [
            "artikel" => Artikel::all(),
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
            'judul' => 'required',
            'isi' => 'required',
            'is_show' => 'required',
            'photo_artikel' => 'file|required'
        ]);

        if ($request->file('photo_artikel')) {
            $validatedDate['photo_artikel'] = $request->file('photo_artikel')->store('/public/photo_artikel');
        } else {
            echo "gagal";
        }

        Artikel::create($validatedDate);

        return redirect('/admin/artikel ')->with('success', 'New Artikel has been addedd!');
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
        return view('admin.artikel_e', [
            "title" => "artikel",
            "artikel" => Artikel::where('id', $id)->first()
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
            'judul' => 'required',
            'isi' => 'required',
            'is_show' => 'required'
        ]);

        if ($request->file('photo_artikel')) {

            if ($request->oldphoto_artikel) {
                Storage::delete($request->oldphoto_artikel);
            }
            $validatedDate['photo_artikel'] = $request->file('photo_artikel')->store('/public/photo_artikel');
        }

        Artikel::where('id', $id)->update($validatedDate);

        return redirect('/admin/artikel ')->with('success', 'Artikel has been update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Artikel::where('id', $id)->first()->photo_artikel;
        if ($data) {
            Storage::delete($data);
        }

        Artikel::destroy($id);

        return redirect('/admin/artikel ')->with('success', 'Artikel has been delted!');
    }
}
