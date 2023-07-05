<?php

namespace App\Http\Controllers;

use App\Models\KompetensiDasar;
use App\Models\levelPenilaian;
use App\Models\Rapor;
use App\Models\Siswa;
use Illuminate\Http\Request;

class RaporController extends Controller
{

    // ASPEK FM
    public function rapor($id)
    {
        $user_id = auth()->user()->id;
        $level_user = auth()->user()->level;
        $siswa = Siswa::find($id);
        $siswa_user = Siswa::where('user_id', $user_id)->get();

        $fm1 = KompetensiDasar::find(29);
        $fm2 = KompetensiDasar::find(30);
        $fm3 = KompetensiDasar::find(31);
        $fm4 = KompetensiDasar::find(32);

        return view('penilaian.rapor', [
            'title' => "Admin - Penilaian Rapor",
            'title1' => "Penilaian Rapor",
            'header' => "Fisik Motorik",
            'level' => Rapor::all(),
            'fm1' => $fm1,
            'fm2' => $fm2,
            'fm3' => $fm3,
            'fm4' => $fm4,
            'level' => levelPenilaian::all(),
            'siswa' => $siswa,
            'user' => auth()->user(),
            'level_user' => $level_user,
            'siswa_user' => $siswa_user,
        ]);
    }

    public function aksi_fm(Request $request)
    {
        $siswa_id = $request->siswa_id;
        $nilai1 = $request->nilai1;
        $nilai2 = $request->nilai2;
        $nilai3 = $request->nilai3;
        $nilai4 = $request->nilai4;

        $data = array($nilai1, $nilai2, $nilai3, $nilai4);

        // menghapus nilai null
        $data_length = count($data);
        for ($i = 0; $i < $data_length; $i++) {
            if ($data[$i] == null) {
                unset($data[$i]);
            }
        }

        // Mencari nilai modus
        $arr = array_count_values($data);
        $rapor = 0;
        foreach ($arr as $key => $val) {
            if ($val == max($arr)) {
                // KONDISI JIKA MODUS LEBIH DARI 1
                if ($rapor < $key) {
                    $rapor = $key;
                }
            }
        }

        $cek_data = Rapor::where('siswa_id', $siswa_id)->first();
        if ($cek_data) {
            Rapor::where('siswa_id', $siswa_id)->update(['modus_fm' => $rapor]);
        } else {
            Rapor::create([
                'siswa_id' => $siswa_id,
                'modus_sek' => $rapor,
            ]);
        }

        return redirect('/rapor2/' . $siswa_id);
    }

    // ASPEK K
    public function rapor2($id)
    {
        $user_id = auth()->user()->id;
        $level_user = auth()->user()->level;
        $siswa = Siswa::find($id);
        $siswa_user = Siswa::where('user_id', $user_id)->get();

        $k1 = KompetensiDasar::find(20);
        $k2 = KompetensiDasar::find(21);
        $k3 = KompetensiDasar::find(22);
        $k4 = KompetensiDasar::find(23);
        $k5 = KompetensiDasar::find(24);
        $k6 = KompetensiDasar::find(25);
        $k7 = KompetensiDasar::find(26);
        $k8 = KompetensiDasar::find(27);
        $k9 = KompetensiDasar::find(28);

        return view('penilaian.rapor2', [
            'title' => "Admin - Penilaian Rapor",
            'title1' => "Penilaian Rapor",
            'header' => "Kognitif",
            'level' => Rapor::all(),
            'k1' => $k1,
            'k2' => $k2,
            'k3' => $k3,
            'k4' => $k4,
            'k5' => $k5,
            'k6' => $k6,
            'k7' => $k7,
            'k8' => $k8,
            'k9' => $k9,
            'level' => levelPenilaian::all(),
            'siswa' => $siswa,
            'user' => auth()->user(),
            'level_user' => $level_user,
            'siswa_user' => $siswa_user,
        ]);
    }

    public function aksi_k(Request $request)
    {
        $siswa_id = $request->siswa_id;
        $nilai1 = $request->nilai1;
        $nilai2 = $request->nilai2;
        $nilai3 = $request->nilai3;
        $nilai4 = $request->nilai4;
        $nilai5 = $request->nilai5;
        $nilai6 = $request->nilai6;
        $nilai7 = $request->nilai7;
        $nilai8 = $request->nilai8;
        $nilai9 = $request->nilai9;

        $data = array($nilai1, $nilai2, $nilai3, $nilai4, $nilai5, $nilai6, $nilai7, $nilai8, $nilai9);

        // menghapus nilai null
        $data_length = count($data);
        for ($i = 0; $i < $data_length; $i++) {
            if ($data[$i] == null) {
                unset($data[$i]);
            }
        }

        // Mencari nilai modus
        $arr = array_count_values($data);
        $rapor = 0;
        foreach ($arr as $key => $val) {
            if ($val == max($arr)) {
                // KONDISI JIKA MODUS LEBIH DARI 1
                if ($rapor < $key) {
                    $rapor = $key;
                }
            }
        }

        Rapor::where('siswa_id', $siswa_id)->update(['modus_k' => $rapor]);

        return redirect('/rapor3/' . $siswa_id);
    }

    // ASPEK B
    public function rapor3($id)
    {
        $user_id = auth()->user()->id;
        $level_user = auth()->user()->level;
        $siswa = Siswa::find($id);
        $siswa_user = Siswa::where('user_id', $user_id)->get();

        $b1 = KompetensiDasar::find(13);
        $b2 = KompetensiDasar::find(14);
        $b3 = KompetensiDasar::find(15);
        $b4 = KompetensiDasar::find(16);
        $b5 = KompetensiDasar::find(17);
        $b6 = KompetensiDasar::find(18);
        $b7 = KompetensiDasar::find(19);

        return view('penilaian.rapor3', [
            'title' => "Admin - Penilaian Rapor",
            'title1' => "Penilaian Rapor",
            'header' => "Bahasa",
            'level' => Rapor::all(),
            'b1' => $b1,
            'b2' => $b2,
            'b3' => $b3,
            'b4' => $b4,
            'b5' => $b5,
            'b6' => $b6,
            'b7' => $b7,
            'level' => levelPenilaian::all(),
            'siswa' => $siswa,
            'user' => auth()->user(),
            'level_user' => $level_user,
            'siswa_user' => $siswa_user,
        ]);
    }

    public function aksi_b(Request $request)
    {
        $siswa_id = $request->siswa_id;
        $nilai1 = $request->nilai1;
        $nilai2 = $request->nilai2;
        $nilai3 = $request->nilai3;
        $nilai4 = $request->nilai4;
        $nilai5 = $request->nilai5;
        $nilai6 = $request->nilai6;
        $nilai7 = $request->nilai7;

        $data = array($nilai1, $nilai2, $nilai3, $nilai4, $nilai5, $nilai6, $nilai7);

        // menghapus nilai null
        $data_length = count($data);
        for ($i = 0; $i < $data_length; $i++) {
            if ($data[$i] == null) {
                unset($data[$i]);
            }
        }

        // Mencari nilai modus
        $arr = array_count_values($data);
        $rapor = 0;
        foreach ($arr as $key => $val) {
            if ($val == max($arr)) {
                // KONDISI JIKA MODUS LEBIH DARI 1
                if ($rapor < $key) {
                    $rapor = $key;
                }
            }
        }

        Rapor::where('siswa_id', $siswa_id)->update(['modus_b' => $rapor]);

        return redirect('/rapor4/' . $siswa_id);
    }

    // ASPEK SE
    public function rapor4($id)
    {
        $user_id = auth()->user()->id;
        $level_user = auth()->user()->level;
        $siswa = Siswa::find($id);
        $siswa_user = Siswa::where('user_id', $user_id)->get();

        $sek1 = KompetensiDasar::find(1);
        $sek2 = KompetensiDasar::find(2);
        $sek3 = KompetensiDasar::find(3);
        $sek4 = KompetensiDasar::find(4);
        $sek5 = KompetensiDasar::find(5);
        $sek6 = KompetensiDasar::find(6);
        $sek7 = KompetensiDasar::find(7);
        $sek8 = KompetensiDasar::find(8);
        $sek9 = KompetensiDasar::find(9);
        $sek10 = KompetensiDasar::find(10);
        $sek11 = KompetensiDasar::find(11);
        $sek12 = KompetensiDasar::find(12);

        return view('penilaian.rapor4', [
            'title' => "Admin - Penilaian Rapor",
            'title1' => "Penilaian Rapor",
            'header' => "Sosial-Emosional",
            'level' => Rapor::all(),
            'sek1' => $sek1,
            'sek2' => $sek2,
            'sek3' => $sek3,
            'sek4' => $sek4,
            'sek5' => $sek5,
            'sek6' => $sek6,
            'sek7' => $sek7,
            'sek8' => $sek8,
            'sek9' => $sek9,
            'sek10' => $sek10,
            'sek11' => $sek11,
            'sek12' => $sek12,
            'level' => levelPenilaian::all(),
            'siswa' => $siswa,
            'user' => auth()->user(),
            'level_user' => $level_user,
            'siswa_user' => $siswa_user,
        ]);
    }

    public function aksi_se(Request $request)
    {
        $nilai1 = $request->nilai1;
        $nilai2 = $request->nilai2;
        $nilai3 = $request->nilai3;
        $nilai4 = $request->nilai4;
        $nilai5 = $request->nilai5;
        $nilai6 = $request->nilai6;
        $nilai7 = $request->nilai7;
        $nilai8 = $request->nilai8;
        $nilai9 = $request->nilai9;
        $nilai10 = $request->nilai10;
        $nilai11 = $request->nilai11;
        $nilai12 = $request->nilai12;
        $siswa_id = $request->siswa_id;

        $data = array($nilai1, $nilai2, $nilai3, $nilai4, $nilai5, $nilai6, $nilai7, $nilai8, $nilai9, $nilai10, $nilai11, $nilai12);

        // menghapus nilai null
        $data_length = count($data);
        for ($i = 0; $i < $data_length; $i++) {
            if ($data[$i] == null) {
                unset($data[$i]);
            }
        }

        // Mencari nilai modus
        $arr = array_count_values($data);
        $rapor = 0;
        foreach ($arr as $key => $val) {
            if ($val == max($arr)) {
                // KONDISI JIKA MODUS LEBIH DARI 1
                if ($rapor < $key) {
                    $rapor = $key;
                }
            }
        }

        Rapor::where('siswa_id', $siswa_id)->update(['modus_se' => $rapor]);
        return redirect('/rapor5/' . $siswa_id);
    }

    // ASPEK S
    public function rapor5($id)
    {
        $user_id = auth()->user()->id;
        $level_user = auth()->user()->level;
        $siswa = Siswa::find($id);
        $siswa_user = Siswa::where('user_id', $user_id)->get();

        $s1 = KompetensiDasar::find(33);
        $s2 = KompetensiDasar::find(34);

        return view('penilaian.rapor5', [
            'title' => "Admin - Penilaian Rapor",
            'title1' => "Penilaian Rapor",
            'header' => "Seni",
            'level' => Rapor::all(),
            's1' => $s1,
            's2' => $s2,
            'level' => levelPenilaian::all(),
            'siswa' => $siswa,
            'user' => auth()->user(),
            'level_user' => $level_user,
            'siswa_user' => $siswa_user,
        ]);
    }

    public function aksi_s(Request $request)
    {
        $siswa_id = $request->siswa_id;
        $nilai1 = $request->nilai1;
        $nilai2 = $request->nilai2;

        $data = array($nilai1, $nilai2);

        // menghapus nilai null
        $data_length = count($data);
        for ($i = 0; $i < $data_length; $i++) {
            if ($data[$i] == null) {
                unset($data[$i]);
            }
        }

        // Mencari nilai modus
        $arr = array_count_values($data);
        $rapor = 0;
        foreach ($arr as $key => $val) {
            if ($val == max($arr)) {
                // KONDISI JIKA MODUS LEBIH DARI 1
                if ($rapor < $key) {
                    $rapor = $key;
                }
            }
        }

        Rapor::where('siswa_id', $siswa_id)->update(['modus_s' => $rapor]);

        return redirect('/hasil/' . $siswa_id);
    }
}
