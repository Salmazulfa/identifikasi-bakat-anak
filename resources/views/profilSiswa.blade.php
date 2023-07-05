@extends('partials.main')

@section('container')

<div class="container-fluid">
        {{-- PESAN ALERT --}}
        @if (session()->has('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        {{-- END OF PESAN ALERT --}}

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3">Profil Siswa</h4>

                    <div class="basic-form">
                        <form action="/updateProfil" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-sm-10">
                            <input type="hidden" class="form-control input-default" id="id" name="id" value="{{ $siswa->id }}">
                        </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Lengkap Siswa</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control input-default" id="nama" name="nama" value="{{ $siswa->nama }}" disabled>
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
                                    <input type="text" class="form-control input-default" id="th_masuk" name="th_masuk"  value="{{ $siswa->th_masuk }}" disabled>
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
                                <label class="col-sm-2 col-form-label">Berat Badan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control input-default" id="bb" name="bb"  value="{{ $siswa->bb }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tinggi Badan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control input-default" id="tb" name="tb"  value="{{ $siswa->tb }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10 ml-auto">
                                    <button type="submit" class="btn btn-primary float-right">Perbarui</button>
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