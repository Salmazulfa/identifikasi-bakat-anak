@extends('partials.main')

@section('container')
    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Master Data</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Penilaian</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Aspek Penilaian</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

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
                        <h4 class="card-title">Aspek Penilaian</h4>
                        
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary mt-2" data-toggle="modal" data-target="#tambahAspek"><i class="fa fa-plus-circle mr-2" aria-hidden="true"></i>Tambah Data</button>
                        
                        <!-- Modal Tambah Data-->
                        <div class="modal fade" id="tambahAspek">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Form Tambah Data</h5>
                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="basic-form">
                                            <form action="/admin/saveAspek/" method="POST" enctype="multipart/form-data">
                                            @csrf
                                                <div class="form-group">
                                                    <label>Aspek Penilaian</label>
                                                    <input type="text" class="form-control input-default" id="kriteria" name="kriteria">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tabel Data-->
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th scope="col" width="30px"><center>No</center></th>
                                        <th scope="col">Aspek Penilaian</th>
                                        <th scope="col" width="100px"><center>Aksi</center></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=0; foreach($aspek as $row):$no++; ?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td><?= $row->kriteria; ?></td>
                                        <td><span>
                                            <button type="button" class="btn mb-1 btn-warning" data-toggle="modal" data-target="#editAspek" data-id="{{ $row->id }}" data-kriteria="{{ $row->kriteria }}"><i class="fa fa-pencil color-muted m-r-5"></i></button>
                                            <button type="button" class="btn mb-1 btn-danger" data-toggle="modal" data-target="#hapusAspek" data-id="{{ $row->id }}"><i class="fa fa-close color-danger"></i></button>
                                        </span></td>
                                    </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>

                        <!-- Modal Edit Data-->
                        <div class="modal fade" id="editAspek">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Form Update Data</h5>
                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="basic-form">
                                            <form action="/admin/updateAspek/{{ $row->id }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                                <div class="form-group">
                                                    <input type="hidden" class="form-control input-default" id="id" name="id" value="">
                                                    <label>Aspek Penilaian</label>
                                                    <input type="text" class="form-control input-default" id="kriteria" name="kriteria" value="">
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
                        
                        <!-- Modal Hapus Data-->
                        <div class="modal fade" id="hapusAspek">
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
                                                    <form action="/admin/hapusAspek/{{ $row->id }}" method="POST" enctype="multipart/form-data">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection