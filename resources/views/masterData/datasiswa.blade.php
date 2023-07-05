@extends('partials.main')

@section('container')
    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Master Data</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Siswa</a></li>
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
                        <h4 class="card-title">Data Siswa</h4>
                        <a href="/admin/tambahSiswa" type="button" class="btn btn-primary mt-2"><i class="fa fa-plus-circle mr-2" aria-hidden="true"></i>Tambah Data</a>

                        <!-- Tabel Data-->
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th scope="col" width="30px">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">No. Induk</th>
                                        <th scope="col">Tahun Masuk</th>
                                        <th scope="col">Nama Wali</th>
                                        <th scope="col"><center>Hasil Bakat</center></th>
                                        <th scope="col"><center>Aksi</center></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=0; foreach($siswa as $row):$no++; ?>
                                    <tr>
                                        <td><center><?= $no; ?></center></td>
                                        <td><?= $row->nama; ?></td>
                                        <td><center><?= $row->user->username; ?></center></td>
                                        <td><center><?= $row->th_masuk; ?></center></td>
                                        <td><?= $row->wali; ?></td>
                                        <td><span>
                                            <button type="button" class="btn mb-1 btn-info" onclick="window.location='/hasil/{{ $row->id }}'"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                        </span></td>
                                        <td><span>
                                            <button type="button" class="btn mb-1 btn-warning" onclick="window.location='/admin/editSiswa/{{ $row->id }}'"><i class="fa fa-pencil color-muted m-r-5"></i></button>
                                            <button type="button" class="btn mb-1 btn-danger" data-toggle="modal" data-target="#hapusSiswa" data-id="{{ $row->id }}"><i class="fa fa-close"></i></button>
                                        </span></td>
                                    </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                        
                        <!-- Modal Hapus Data-->
                        <div class="modal fade" id="hapusSiswa">
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
                                                    <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                                                    <form action="/admin/hapusSiswa/{{ $row->id }}" method="POST" enctype="multipart/form-data">
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