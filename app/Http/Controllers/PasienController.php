<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function create()
    {
        return view('pasien.create');
    }

    public function store(Request $request)
    {
        Pasien::create([
            'no_rekam_medis' => $request->no_rekam_medis,
            'nama_pasien' => $request->nama_pasien,
            'jenis_kelamin' => $request->jenis_kelamin,
            'umur' => $request->umur,
        ]);

        return redirect()->route('pasien.index');
    }

    public function index()
    {
        $pasien = Pasien::all();
        return view('pasien.index', compact('pasien'));
    }

    // EDIT
    public function edit($id)
    {
        $pasien = Pasien::findOrFail($id);
        return view('pasien.edit', compact('pasien'));
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $pasien = Pasien::findOrFail($id);

        $pasien->update([
            'no_rekam_medis' => $request->no_rekam_medis,
            'nama_pasien' => $request->nama_pasien,
            'jenis_kelamin' => $request->jenis_kelamin,
            'umur' => $request->umur
        ]);

        return redirect('/pasien');
    }

    // DELETE
    public function destroy($id)
    {
        $pasien = Pasien::findOrFail($id);
        $pasien->delete();

        return redirect('/pasien');
    }
}
