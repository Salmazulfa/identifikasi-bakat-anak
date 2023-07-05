@extends('partials.main')

@section('container')
<div class="container-fluid">
    {{-- PESAN ALERT --}}
        @if (session()->has('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
    {{-- END OF PESAN ALERT --}}

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-5">Tambah Data Siswa</h4>
                    <div class="basic-form">
                        <form action="/admin/saveSiswa" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control input-default" id="username" name="username">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control input-default" id="password" name="password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Lengkap Siswa</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control input-default" id="nama" name="nama">
                                </div>
                            </div>
                            <fieldset class="form-group">
                                <div class="row">
                                    <label class="col-form-label col-sm-2 pt-0">Jenis Kelamin</label>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="jk" id="jk" value="Laki-Laki" checked="checked">
                                            <label class="form-check-label">Laki-Laki</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="jk" id="jk" value="Perempuan">
                                            <label class="form-check-label">Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tahun Masuk</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control input-default" id="th_masuk" name="th_masuk">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Wali</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control input-default" id="wali" name="wali">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control input-default h-150px" rows="6" id="alamat" name="alamat"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control input-default" id="lahir" name="lahir">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Berat Badan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control input-default" id="bb" name="bb">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tinggi Badan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control input-default" id="tb" name="tb">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10 ml-auto">
                                    <button type="submit" class="btn btn-primary float-right">Simpan</button>
                                    <a href="/admin/dataSiswa" type="button" class="btn btn-dark float-right mr-3">Kembali</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection