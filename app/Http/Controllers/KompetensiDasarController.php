<?php

namespace App\Http\Controllers;

use App\Models\KompetensiDasar;
use App\Models\Kriteria;
use Illuminate\Http\Request;

class KompetensiDasarController extends Controller
{
    public function kd()
    {
        $level_user = auth()->user()->level;

        return view('masterData.dataKd', [
            'title' => "Admin - Kompetensi Dasar",
            'kd' => KompetensiDasar::all(),
            'aspek' => Kriteria::all(),
            'user' => auth()->user(),
            'level_user' => $level_user,
        ]);
    }

    public function saveKd(Request $request)
    {

        $validatedData = $request->validate([
            'kriteria_id' => 'required',
            'no' => 'required',
            'ket' => 'required',
        ]);

        KompetensiDasar::create($validatedData);

        return redirect('/admin/kd')->with('success', 'Data berhasil disimpan');
    }

    public function updateKd(Request $request)
    {
            $validatedData = $request->validate([
                'id' => 'required',
                'kriteria_id' => 'required',
                'no' => 'required',
                'ket' => 'required',
            ]);

            KompetensiDasar::where('id', $validatedData['id'])->update($validatedData);
            return back()->with('success', 'Data berhasil diperbarui');
    }

    public function hapusKd($id)
    {
        KompetensiDasar::find($id)->delete();
        return redirect('/admin/kd')->with('success', 'Data berhasil dihapus');
    }
}
