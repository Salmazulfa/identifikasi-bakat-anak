<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Validation\Rules\RequiredIf;
use Symfony\Contracts\Service\Attribute\Required;

class UserController extends Controller
{

    // LOGIN
    public function index()
    {
        return view('login', [
            'title' => 'Login'
        ]);
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (auth()->user()->level == 'Admin' || 'Siswa') {
                if ($request->has('rememberme')) {
                    Cookie::queue('username', $request->username, 1440);
                    Cookie::queue('password', $request->password, 1440);
                }
                return redirect()->intended('/dashboard');
            } else {
                return back()->with('loginError', 'Login gagal!');
            }
        }

        return back()->with('loginError', 'Login failed!');
    }

    public function dashboard()
    {
        $user_id = auth()->user()->id;
        $level_user = auth()->user()->level;
        $siswa_user = Siswa::where('user_id', $user_id)->get();

        return view('dashboard', [
            'title' => "Admin - Dashboard",
            'title1' => "Dashboard",
            'user' => auth()->user(),
            'level_user' => $level_user,
            'siswa_user' => $siswa_user,
        ]);
    }

    // FUNCTION FOR ADMIN
    public function saveUser(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        $user = new User();
        $user->username = $username;
        $user->password = bcrypt($password);
        $user->level = 'Siswa';

        $cek_data = User::where('username', $username)->first();
        if ($cek_data) {
            return redirect()->back()->with('error', 'Data siswa dengan no induk : ' . $username . ' sudah ada');
        } else {
            $user->save();

            $last_id = User::max('id');

            $nama = $request->nama;
            $jk = $request->jk;
            $alamat = $request->alamat;
            $th_masuk = $request->th_masuk;
            $lahir = $request->lahir;
            $tb = $request->tb;
            $bb = $request->bb;
            $wali = $request->wali;

            $siswa = new Siswa();

            $siswa->user_id = $last_id;
            $siswa->nama = $nama;
            $siswa->jk = $jk;
            $siswa->alamat = $alamat;
            $siswa->th_masuk = $th_masuk;
            $siswa->lahir = $lahir;
            $siswa->tb = $tb;
            $siswa->bb = $bb;
            $siswa->wali = $wali;
            $siswa->save();

            return redirect('/admin/dataSiswa')->with('success', 'Data berhasil disimpan');
        }
    }

    public function updatePass(Request $request)
    {
        $id_user = $request->validate(['id' => 'required']);
        $credentials = $request->validate([
            // 'username' => 'required',
            'password' => 'required'
        ]);

        $password = bcrypt($credentials['password']);
        User::where('id', $id_user)->update(['password' => $password]);
        return redirect('/admin/dataSiswa')->with('success', 'Data berhasil diperbarui');
    }

    // LOGOUT
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
