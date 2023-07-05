<?php

namespace App\Http\Controllers;

use App\Models\Bakat;
use App\Models\Siswa;
use Illuminate\Http\Request;

class BakatController extends Controller
{
    public function dataBakat()
    {
        $user_id = auth()->user()->id;
        $level_user = auth()->user()->level;
        $siswa_user = Siswa::where('user_id', $user_id)->get();

        return view('masterData.dataBakat', [
            'title' => "Admin - Data Bakat",
            'title1' => "Macam-macam Bakat",
            'bakat' => Bakat::all(),
            'user' => auth()->user(),
            'level_user' => $level_user,
            'siswa_user' => $siswa_user,
        ]);
    }
}
