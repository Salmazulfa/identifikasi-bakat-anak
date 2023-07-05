<?php

namespace App\Http\Controllers;

use App\Models\levelPenilaian;
use Illuminate\Http\Request;
use Monolog\Level;

class LevelPenilaianController extends Controller
{
    public function level()
    {
        $level_user = auth()->user()->level;

        return view('masterData.level', [
            'title' => "Admin - Level Penilaian",
            'level' => levelPenilaian::all(),
            'user' => auth()->user(),
            'level_user' => $level_user,
        ]);
    }

    public function saveLevel(Request $request)
    {

        $validatedData = $request->validate([
            'level' => 'required',
            'ket_nilai' => 'required',
            'bobot' => 'required',
        ]);

        levelPenilaian::create($validatedData);

        return redirect('/admin/level')->with('success', 'Data berhasil disimpan');
    }

    public function updateLevel(Request $request)
    {
            $validatedData = $request->validate([
                'id' => 'required',
                'level' => 'required',
                'ket_nilai' => 'required',
                'bobot' => 'required',
            ]);

            levelPenilaian::where('id', $validatedData['id'])->update($validatedData);
            return back()->with('success', 'Data berhasil diperbarui');
    }

    public function hapusLevel($id)
    {
        levelPenilaian::find($id)->delete();
        return redirect('/admin/level')->with('success', 'Data berhasil dihapus');
    }
}
