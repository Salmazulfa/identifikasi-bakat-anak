<?php

namespace App\Http\Controllers;

use App\Models\Bakat;
use App\Models\Rapor;
use App\Models\Kriteria;
use App\Models\levelPenilaian;
use App\Models\NilaiCfsf;
use App\Models\NilaiBobot;
use App\Models\User;
use App\Models\Siswa;
use Illuminate\Http\Request;

class NilaiCfsfController extends Controller
{
    public function pm()
    {
        $level_user = auth()->user()->level;
        $kriteria = Kriteria::all();

        // Jenis cf & sf
        $cfsf = NilaiCfsf::select('bakat_id', 'kriteria_id', 'jenis')->get();
        foreach ($cfsf as $row) {
            $jenis[$row->bakat->kode][$row->kriteria_id] = $row->jenis;
        }

        // Profil Ideal
        $nilai_pi = NilaiCfsf::select('bakat_id', 'kriteria_id', 'level_id')->get();
        foreach ($nilai_pi as $row) {
            $new_pi[$row->bakat->kode][$row->kriteria_id] = $row->level->bobot;
        }

        return view('masterData.pm', [
            'title' => "Admin - Profile Matching",
            'new_pi' => $new_pi,
            'jenis' => $jenis,
            'kriteria' => $kriteria,
            'user' => auth()->user(),
            'level_user' => $level_user,
        ]);
    }

    public function perhitungan($id)
    {
        $user_id = auth()->user()->id;
        $level_user = auth()->user()->level;
        $siswa_user = Siswa::where('user_id', $user_id)->get();

        $siswa = Siswa::where('id', $id)->get();

        $cek_data = Rapor::where('siswa_id', $id)->first();
        if ($cek_data) {

            $rapor = Rapor::where('siswa_id', $id)->get();
            $bobot_gap = NilaiBobot::all();
            $level_nilai = levelPenilaian::all();
            $kriteria = Kriteria::all();
            $bakat = Bakat::all();
            $precf = [60, 70, 80];
            $presf = [40, 30, 20];

            // Menyimpan nilai rapor dalam array
            foreach ($rapor as $row) {
                $nilai = [
                    $row->nilai_nam,
                    $row->nilai_fm,
                    $row->nilai_k,
                    $row->nilai_b,
                    $row->nilai_se,
                    $row->nilai_s,
                ];
            }

            // Kategori nilai rapor
            foreach ($nilai as $i => $val) {
                foreach ($level_nilai as $lv) {
                    if ($lv->bobot == $val) {
                        $kategori_nilai[] = $lv->level;
                    }
                }
            }

            // Loop setiap item dalam array
            foreach ($bakat as $row) {
                // Duplikat item dan tambahkan ke array baru
                foreach ($nilai as $item) {
                    $new_rapor[] = $item;
                }
            }

            // Profil Ideal
            $nilai_pi = NilaiCfsf::select('bakat_id', 'kriteria_id', 'level_id')->get();

            // $nilai_pi = [];
            foreach ($nilai_pi as $row) {
                $new_pi[$row->bakat->kode][$row->kriteria_id] = $row->level->bobot;
                $pi[] = $row->level->bobot;
            }

            // nilai gap
            for ($i = 0; $i < count($new_rapor); $i++) {
                $gap[] = $new_rapor[$i] - $pi[$i];
            }

            $chunk_gap = array_chunk($gap, 6);

            $new_gap = [];
            foreach ($chunk_gap as $key => $chunk) {
                $new_gap['A' . ($key + 1)] = $chunk;
            }

            // pembobotan nilai gap
            foreach ($gap as $i => $nilai) {
                foreach ($bobot_gap as $bg) {
                    if ($bg->selisih == $nilai) {
                        $bobot[] = $bg->nilai_bobot;
                    }
                }
            }

            $chunk_bobot = array_chunk($bobot, 6);

            $new_bobot = [];
            foreach ($chunk_bobot as $key => $chunk) {
                $new_bobot['A' . ($key + 1)] = $chunk;
            }


            // Menampilkan Jenis cf & sf di tiap alternatif
            $cfsf = NilaiCfsf::select('bakat_id', 'kriteria_id', 'jenis')->get();
            foreach ($cfsf as $row) {
                $jenis[$row->bakat->kode][$row->kriteria_id] = $row->jenis;
            }

            // PERHITUNGAN CF SF & NT MASING-MASING ALTERNATIF
            // A1
            foreach ($jenis['A1'] as $key => $val) {
                if ($val == 1) {
                    $arr_c[] = $key - 1;
                } else {
                    $arr_s[] = $key - 1;
                }
            }

            // MENGHITUNG CF
            foreach ($new_bobot['A1'] as $key => $val) {
                foreach ($arr_c as $k => $v) {
                    if ($key == $v) {
                        $cf[] = $val;
                    }
                }
            }

            // MENGHITUNG SF
            foreach ($new_bobot['A1'] as $key => $val) {
                foreach ($arr_s as $k => $v) {
                    if ($key == $v) {
                        $sf[] = $val;
                    }
                }
            }

            $ncf1 = (array_sum($cf)) / count($cf);
            $nsf1 = (array_sum($sf)) / count($sf);

            // A2
            $arr_c = [];
            $arr_s = [];
            $cf = [];
            $sf = [];
            foreach ($jenis['A2'] as $key => $val) {
                if ($val == 1) {
                    $arr_c[] = $key - 1;
                } else {
                    $arr_s[] = $key - 1;
                }
            }

            foreach ($new_bobot['A2'] as $key => $val) {
                foreach ($arr_c as $k => $v) {
                    if ($key == $v) {
                        $cf[] = $val;
                    }
                }
            }

            foreach ($new_bobot['A2'] as $key => $val) {
                foreach ($arr_s as $k => $v) {
                    if ($key == $v) {
                        $sf[] = $val;
                    }
                }
            }

            $ncf2 = (array_sum($cf)) / count($cf);
            $nsf2 = (array_sum($sf)) / count($sf);

            // A3
            $arr_c = [];
            $arr_s = [];
            $cf = [];
            $sf = [];
            foreach ($jenis['A3'] as $key => $val) {
                if ($val == 1) {
                    $arr_c[] = $key - 1;
                } else {
                    $arr_s[] = $key - 1;
                }
            }

            foreach ($new_bobot['A3'] as $key => $val) {
                foreach ($arr_c as $k => $v) {
                    if ($key == $v) {
                        $cf[] = $val;
                    }
                }
            }

            foreach ($new_bobot['A3'] as $key => $val) {
                foreach ($arr_s as $k => $v) {
                    if ($key == $v) {
                        $sf[] = $val;
                    }
                }
            }

            $ncf3 = (array_sum($cf)) / count($cf);
            $nsf3 = (array_sum($sf)) / count($sf);

            // A4
            $arr_c = [];
            $arr_s = [];
            $cf = [];
            $sf = [];
            foreach ($jenis['A4'] as $key => $val) {
                if ($val == 1) {
                    $arr_c[] = $key - 1;
                } else {
                    $arr_s[] = $key - 1;
                }
            }

            foreach ($new_bobot['A4'] as $key => $val) {
                foreach ($arr_c as $k => $v) {
                    if ($key == $v) {
                        $cf[] = $val;
                    }
                }
            }

            foreach ($new_bobot['A4'] as $key => $val) {
                foreach ($arr_s as $k => $v) {
                    if ($key == $v) {
                        $sf[] = $val;
                    }
                }
            }

            $ncf4 = (array_sum($cf)) / count($cf);
            $nsf4 = (array_sum($sf)) / count($sf);

            // A5
            $arr_c = [];
            $arr_s = [];
            $cf = [];
            $sf = [];
            foreach ($jenis['A5'] as $key => $val) {
                if ($val == 1) {
                    $arr_c[] = $key - 1;
                } else {
                    $arr_s[] = $key - 1;
                }
            }

            foreach ($new_bobot['A5'] as $key => $val) {
                foreach ($arr_c as $k => $v) {
                    if ($key == $v) {
                        $cf[] = $val;
                    }
                }
            }

            foreach ($new_bobot['A5'] as $key => $val) {
                foreach ($arr_s as $k => $v) {
                    if ($key == $v) {
                        $sf[] = $val;
                    }
                }
            }

            $ncf5 = (array_sum($cf)) / count($cf);
            $nsf5 = (array_sum($sf)) / count($sf);

            // A6
            $arr_c = [];
            $arr_s = [];
            $cf = [];
            $sf = [];
            foreach ($jenis['A6'] as $key => $val) {
                if ($val == 1) {
                    $arr_c[] = $key - 1;
                } else {
                    $arr_s[] = $key - 1;
                }
            }

            foreach ($new_bobot['A6'] as $key => $val) {
                foreach ($arr_c as $k => $v) {
                    if ($key == $v) {
                        $cf[] = $val;
                    }
                }
            }

            foreach ($new_bobot['A6'] as $key => $val) {
                foreach ($arr_s as $k => $v) {
                    if ($key == $v) {
                        $sf[] = $val;
                    }
                }
            }

            $ncf6 = (array_sum($cf)) / count($cf);
            $nsf6 = (array_sum($sf)) / count($sf);

            // A7
            $arr_c = [];
            $arr_s = [];
            $cf = [];
            $sf = [];
            foreach ($jenis['A7'] as $key => $val) {
                if ($val == 1) {
                    $arr_c[] = $key - 1;
                } else {
                    $arr_s[] = $key - 1;
                }
            }

            foreach ($new_bobot['A7'] as $key => $val) {
                foreach ($arr_c as $k => $v) {
                    if ($key == $v) {
                        $cf[] = $val;
                    }
                }
            }

            foreach ($new_bobot['A7'] as $key => $val) {
                foreach ($arr_s as $k => $v) {
                    if ($key == $v) {
                        $sf[] = $val;
                    }
                }
            }

            $ncf7 = (array_sum($cf)) / count($cf);
            $nsf7 = (array_sum($sf)) / count($sf);

            // A8
            $arr_c = [];
            $arr_s = [];
            $cf = [];
            $sf = [];
            foreach ($jenis['A8'] as $key => $val) {
                if ($val == 1) {
                    $arr_c[] = $key - 1;
                } else {
                    $arr_s[] = $key - 1;
                }
            }

            foreach ($new_bobot['A8'] as $key => $val) {
                foreach ($arr_c as $k => $v) {
                    if ($key == $v) {
                        $cf[] = $val;
                    }
                }
            }

            foreach ($new_bobot['A8'] as $key => $val) {
                foreach ($arr_s as $k => $v) {
                    if ($key == $v) {
                        $sf[] = $val;
                    }
                }
            }

            $ncf8 = (array_sum($cf)) / count($cf);
            $nsf8 = (array_sum($sf)) / count($sf);


            // Menyimpan nilai cf sf tiap alternatif dalam 1 array
            $ncf = [$ncf1, $ncf2, $ncf3, $ncf4, $ncf5, $ncf6, $ncf7, $ncf8];
            $nsf = [$nsf1, $nsf2, $nsf3, $nsf4, $nsf5, $nsf6, $nsf7, $nsf8];


            // Perhitungan NT
            for ($j = 0; $j < count($ncf); $j++) {
                $nt[] = ($ncf[$j] * 0.6) + ($nsf[$j] * 0.4);
            }


            // Menyimpan nilai cf, sf dan nt dalam 1 array
            for ($i = 0; $i < count($ncf); $i++) {
                $res["A" . $i + 1] = [$ncf[$i], $nsf[$i], $nt[$i]];
            }

            // PERANGKINGAN
            arsort($nt);

            foreach ($nt as $i => $item) {
                $rank_index[] = $i + 1;
            }

            foreach ($rank_index as $i => $item) {
                foreach ($bakat as $bk) {
                    if ($bk->id == $item) {
                        $hasil_bakat[] = $bk->bakat;
                    }
                }
            }

            return view('penilaian.hasilpm', [
                'title' => "Admin - Hasil Perhitungan",
                'title1' => "Hasil Perhitungan",
                'rapor' => $rapor,
                'kriteria' => $kriteria,
                'bakat' => $bakat,
                'jenis' => $jenis,
                'new_pi' => $new_pi,
                'new_gap' => $new_gap,
                'new_bobot' => $new_bobot,
                'res' => $res,
                'hasil_bakat1' => $hasil_bakat,
                'user' => auth()->user(),
                'level_user' => $level_user,
                'siswa_user' => $siswa_user,
                'siswa' => $siswa,
                'nt' => $nt,
                'kategori_nilai' => $kategori_nilai,
            ]);
        } else {
            return redirect('/rapor1/' . $id);
        }
    }
}
