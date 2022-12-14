<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PengumumanController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:admin', 'can:role,'. '"'. Role::INPOS. '\''])->except('show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengumuman = Pengumuman::paginate(10);
        return view('pengumuman/daftarPengumuman', compact('pengumuman'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengumuman/tambahPengumuman');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'gambar'        => 'required|image|file|max:5120',
            'judul'         => 'required',
            'penyelenggara' => 'required',
            'deskripsi'     => 'required'
        ]);

        $data['gambar'] = $request->file('gambar')->store('post-gambar');

        Pengumuman::create($data);

        return redirect('admin/pengumuman')->with('success', 'Barhasil!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function show(Pengumuman $pengumuman)
    {
        return view('pengumuman/detailPengumuman', compact('pengumuman'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengumuman $pengumuman)
    {
        return view('pengumuman/editPengumuman', compact('pengumuman'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Models\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengumuman $pengumuman)
    {
        $data = $this->validate($request, [
            'gambar'        => 'image|file|max:5120',
            'judul'         => 'required',
            'penyelenggara' => 'required',
            'deskripsi'     => 'required'
        ]);

        if ($request->file('gambar')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $data['gambar'] = $request->file('gambar')->store('post-gambar');
        }

        $pengumuman->update($data);

        return redirect('admin/pengumuman')->with('success', 'Barhasil!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengumuman $pengumuman)
    {
        if ($pengumuman->gambar) {
            Storage::delete($pengumuman->gambar);
        }
        $pengumuman->delete();
        return redirect()->back()->with(['success', 'Data berhasil dihapus!']);
    }
}
