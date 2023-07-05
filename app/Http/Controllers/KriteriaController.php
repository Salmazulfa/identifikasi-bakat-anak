<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    public function aspek()
    {
        $level_user = auth()->user()->level;

        return view('masterData.dataAspek', [
            'title' => "Admin - Aspek Penilaian",
            'aspek' => Kriteria::all(),
            'user' => auth()->user(),
            'level_user' => $level_user,
        ]);
    }

    public function saveAspek(Request $request)
    {

        $validatedData = $request->validate([
            'kriteria' => 'required',
        ]);

        Kriteria::create($validatedData);

        return redirect('/admin/aspek')->with('success', 'Data berhasil disimpan');
    }

    public function updateAspek(Request $request)
    {
            $validatedData = $request->validate([
                'id' => 'required',
                'kriteria' => 'required',
            ]);

            Kriteria::where('id', $validatedData['id'])->update($validatedData);
            return back()->with('success', 'Data berhasil diperbarui');
    }

    public function hapusAspek($id)
    {
        Kriteria::find($id)->delete();
        return redirect('/admin/aspek')->with('success', 'Data berhasil dihapus');
    }
}
