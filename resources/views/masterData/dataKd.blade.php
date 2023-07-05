@extends('partials.main')

@section('container')
    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Master Data</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Penilaian</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Kompetensi Dasar</a></li>
            </ol>
        </div>
    </div>

    <div class="container-fluid">
        {{-- PESAN ALERT --}}
            @if (session()->has('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
            @endif
        {{-- END OF PESAN ALERT --}}

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Kompetensi Dasar</h4>
                        
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary mt-2" data-toggle="modal" data-target="#tambahKd"><i class="fa fa-plus-circle mr-2" aria-hidden="true"></i>Tambah Data</button>

                        <!-- Tabel Data -->
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">KD</th>
                                        <th scope="col" width="500px">Keterangan</th>
                                        <th scope="col">Aspek Penilaian</th>
                                        <th scope="col" width="100px"><center>Aksi</center></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=0; foreach($kd as $row):$no++; ?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td><?= $row->no; ?></td>
                                        <td><?= $row->ket; ?></td>
                                        <td><?= $row->kriteria->kriteria; ?></td>
                                        <td><span>
                                            <button type="button" class="btn mb-1 btn-warning" data-toggle="modal" data-target="#editKd" data-id="{{ $row->id }}" data-kriteria_id="{{ $row->kriteria_id }}" data-no="{{ $row->no }}" data-ket="{{ $row->ket }}"><i class="fa fa-pencil color-muted m-r-5"></i></button>
                                            <button type="button" class="btn mb-1 btn-danger" data-toggle="modal" data-target="#hapusKd" data-id="{{ $row->id }}"><i class="fa fa-close"></i></button>
                                            </span>
                                        </td>
                                    </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                        
                        <!-- Modal Hapus Data-->
                        <div class="modal fade" id="hapusKd">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">WARNING !!!</h5>
                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="basic-form">
                                                <div class="form-group">
                                                    <p class="mt-3">Anda yakin ingin menghapus data?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
                                                    <form action="/admin/hapusKd/{{ $row->id }}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-primary my-2">Yakin</button>
                                                    </form>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal Edit Data-->
                        <div class="modal fade" id="editKd">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Form Edit Data</h5>
                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="basic-form">
                                            <form action="/admin/updateKd/{{ $row->id }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <input type="hidden" class="form-control input-default" id="id" name="id">
                                                <label>Aspek Penilaian</label>
                                                <select class="form-control input-default" id="kriteria_id" name="kriteria_id">
                                                    <option value=""></option>
                                                    <?php $no=0; foreach($aspek as $row):$no++; ?>
                                                    <option value="<?= $row->id; ?>"><?= $row->kriteria; ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Kompetensi Dasar</label>
                                                <input type="text" class="form-control input-default" id="no" name="no" value="">
                                            </div>
                                            <div class="form-group">
                                                <label>Keterangan</label>
                                                <textarea class="form-control input-default h-150px" rows="6" id="ket" name="ket"></textarea>
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
                        
                        <!-- Modal Tambah Data -->
                        <div class="modal fade" id="tambahKd">
                            <div class="modal-dialog" role="document" id="tambahKd">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Tambah Data KD</h5>
                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="/admin/saveKd/" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="basic-form">
                                                <div class="form-group">
                                                    <label>Aspek Penilaian</label>
                                                    <select class="form-control input-default" id="kriteria_id" name="kriteria_id">
                                                        <?php $no=0; foreach($aspek as $row):$no++; ?>
                                                        <option value="<?= $row->id; ?>"><?= $row->kriteria; ?></option>
                                                        <?php endforeach ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Kompetensi Dasar</label>
                                                    <input type="text" class="form-control input-default" id="no" name="no">
                                                </div>
                                                <div class="form-group">
                                                    <label>Keterangan</label>
                                                    <textarea class="form-control input-default h-150px" rows="6" id="kat" name="ket"></textarea>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                                    <button type="submit" type="button" class="btn btn-primary">Simpan</button>
                                                </div>
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
@endsection