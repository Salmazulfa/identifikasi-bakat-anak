@extends('partials.main')

@section('container')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3">Edit Data Siswa</h4>

                    <button type="button" class="btn mb-1 btn-warning mb-5" data-toggle="modal" data-target="#editPass" data-id="{{ $siswa->user_id }}" data-username="{{ $siswa->user->username }}" data-nama ="{{ $siswa->nama }}"><i class="fa fa-pencil color-muted m-r-5"></i> Edit Password</button>

                    <div class="basic-form">
                        <form action="/admin/updateSiswa" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="col-sm-10">
                                <input type="hidden" class="form-control input-default" id="id" name="id" value="{{ $siswa->id }}">
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Lengkap Siswa</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control input-default" id="nama" name="nama" value="{{ $siswa->nama }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">No. Induk</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control input-default" id="induk" name="induk" value="{{ $siswa->user->username }}" disabled>
                                </div>
                            </div>
                            <fieldset class="form-group">
                                <?php if ($siswa->jk == "Perempuan") { ?>
                                <div class="row">
                                    <label class="col-form-label col-sm-2 pt-0">Jenis Kelamin</label>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="jk" id="jk" value="Laki-Laki">
                                            <label class="form-check-label">Laki-Laki</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="jk" id="jk" value="Perempuan" checked>
                                            <label class="form-check-label">Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                                <?php } else { ?>
                                    <div class="row">
                                        <label class="col-form-label col-sm-2 pt-0">Jenis Kelamin</label>
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="jk" id="jk" value="Laki-Laki" checked>
                                                <label class="form-check-label">Laki-Laki</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="jk" id="jk" value="Perempuan">
                                                <label class="form-check-label">Perempuan</label>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                            </fieldset>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tahun Masuk</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control input-default" id="th_masuk" name="th_masuk"  value="{{ $siswa->th_masuk }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Wali</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control input-default" id="wali" name="wali" value="{{ $siswa->wali }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control input-default h-150px" rows="6" id="alamat" name="alamat">{{ $siswa->alamat }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control input-default" id="lahir" name="lahir"  value="{{ $siswa->lahir }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tinggi Badan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control input-default" id="tb" name="tb"  value="{{ $siswa->tb }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Berat Badan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control input-default" id="bb" name="bb"  value="{{ $siswa->bb }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10 ml-auto">
                                    <button type="submit" class="btn btn-primary float-right">Perbarui</button>
                                    <a href="/admin/dataSiswa" type="button" class="btn btn-dark float-right mr-3">Kembali</a>
                                </div>
                            </div>
                        </form>
                    </div>

                        <!-- Modal Edit Pass-->
                        <div class="modal fade" id="editPass">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Form Update Password</h5>
                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="basic-form">
                                            <form action="/admin/updatePass" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <input type="hidden" class="form-control input-default" id="id" name="id">
                                            </div>
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control input-default" id="username" name="username" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Lengkap</label>
                                                <input type="text" class="form-control input-default" id="nama" name="nama" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label>Password Baru</label>
                                                <input type="password" class="form-control input-default" id="password" name="password" value="">
                                            </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-primary">Perbarui</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection