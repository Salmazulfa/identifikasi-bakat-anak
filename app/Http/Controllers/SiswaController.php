<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Rapor;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function dataSiswa()
    {
        $level_user = auth()->user()->level;
        // dd($level_user);

        return view('masterData.dataSiswa', [
            'title' => "Admin - Data Siswa",
            'siswa' => Siswa::all(),
            'user' => auth()->user(),
            'level_user' => $level_user,
        ]);
    }

    public function tambahSiswa()
    {
        $level_user = auth()->user()->level;

        return view('masterData.tambahSiswa', [
            'title' => "Admin - Data Siswa",
            'user' => auth()->user(),
            'level_user' => $level_user,
        ]);
    }

    public function editSiswa($id)
    {
        $siswa = Siswa::find($id);
        $level_user = auth()->user()->level;

        return view('masterData.editSiswa', [
            'title' => "Admin - Data Siswa",
            'siswa' => $siswa,
            'user' => auth()->user(),
            'level_user' => $level_user,
        ]);
    }

    public function updateSiswa(Request $request)
    {
        $id = $request->id;
        $nama = $request->nama;
        $jk = $request->jk;
        $alamat = $request->alamat;
        $th_masuk = $request->th_masuk;
        $lahir = $request->lahir;
        $tb = $request->tb;
        $bb = $request->bb;
        $wali = $request->wali;

        $siswa = Siswa::find($id);

        $siswa->nama = $nama;
        $siswa->jk = $jk;
        $siswa->alamat = $alamat;
        $siswa->th_masuk = $th_masuk;
        $siswa->lahir = $lahir;
        $siswa->bb = $bb;
        $siswa->tb = $tb;
        $siswa->wali = $wali;
        $siswa->save();

        return redirect('/admin/dataSiswa')->with('success', 'Data berhasil diperbarui');
    }

    public function hapusSiswa($id)
    {
        Rapor::where('siswa_id', $id)->delete();
        Siswa::find($id)->delete();
        return redirect('/admin/dataSiswa')->with('success', 'Data berhasil dihapus');
    }

    public function profil($id)
    {
        $level_user = auth()->user()->level;
        $siswa = Siswa::find($id);
        $user_id = auth()->user()->id;
        $siswa_user = Siswa::where('user_id', $user_id)->get();

        return view('profilSiswa', [
            'title1' => "Profil SIswa",
            'siswa' => $siswa,
            'user' => auth()->user(),
            'level_user' => $level_user,
            'siswa_user' => $siswa_user,
        ]);
    }

    public function updateProfil(Request $request)
    {
        $id = $request->id;
        $jk = $request->jk;
        $alamat = $request->alamat;
        $lahir = $request->lahir;
        $tb = $request->tb;
        $bb = $request->bb;
        $wali = $request->wali;

        $siswa = Siswa::find($id);

        $siswa->jk = $jk;
        $siswa->alamat = $alamat;
        $siswa->lahir = $lahir;
        $siswa->bb = $bb;
        $siswa->tb = $tb;
        $siswa->wali = $wali;
        $siswa->save();

        return back()->with('success', 'Data berhasil diperbarui');
    }
}
