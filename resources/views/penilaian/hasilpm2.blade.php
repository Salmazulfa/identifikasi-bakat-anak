@extends('partials.main')

@section('container')
    @if ($level_user == 'Admin')    
    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Master Data</a></li>
                <li class="breadcrumb-item active"><a href="/admin/dataSiswa">Data Siswa</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Hasil</a></li>
            </ol>
        </div>
    </div>
    @else
    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Hasil Bakat Anak</a></li>
            </ol>
        </div>
    </div>
    @endif

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <!-- Nav tabs -->
                        <div class="default-tab">
                            <ul class="nav nav-tabs mb-3" role="tablist">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#bakat">Bakat Anak</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#perhitungan">Perhitungan</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="bakat" role="tabpanel">
                                    {{-- NILAI RAPOR --}}
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title">Nilai Rapor</h4>

                                                    <!-- Tabel Data-->
                                                    <div class="table-responsive">
                                                        <table class="table table-striped table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col"><center>No Induk</center></th>
                                                                    <th scope="col"><center>Nama</center></th>
                                                                    <?php $no=0; foreach($kriteria as $row):$no++; ?>
                                                                    <th scope="col"><center>{{ $row->kriteria }}</center></th>
                                                                    <?php endforeach ?>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    @if ($level_user == 'Admin')
                                                                    @foreach ($siswa as $siswa)
                                                                    <td>{{ $siswa->user->username }}</td>
                                                                    <td>{{ $siswa->nama }}</td>
                                                                    @endforeach
                                                                    @else    
                                                                    @foreach ($siswa_user as $siswa)
                                                                    <td>{{ $siswa->user->username }}</td>
                                                                    <td>{{ $siswa->nama }}</td>
                                                                    @endforeach
                                                                    @endif
                                                                    @foreach($kategori_nilai as $key => $val)
                                                                    <td><center>{{ $val }}</center></td>
                                                                    @endforeach
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- HASIL --}}
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title mb-3">Hasil Identifikasi Bakat</h4>
                                                    {{-- <ul>
                                                        @foreach($hasil_bakat1 as $key => $val)
                                                            <li>- {{ $val }}</li>
                                                        @endforeach
                                                    </ul> --}}
                                                    <!-- Tabel Data-->
                                                    <div class="table-responsive">
                                                        <table class="table table-striped table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col"><center>Hasil</center></th>
                                                                    {{-- <th scope="col"><center>7030</center></th>
                                                                    <th scope="col"><center>8020</center></th> --}}
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <ul>
                                                                            <?php $no=0; foreach ($hasil_bakat1 as $key => $val):$no++;?>
                                                                                <li>{{ $no }}. {{ $val }}</li>
                                                                            <?php endforeach ?>
                                                                        </ul>
                                                                    </td>
                                                                    {{-- <td>
                                                                        <ul>
                                                                            @foreach($hasil_bakat2 as $key => $val)
                                                                                <li>{{ $val }}</li>
                                                                            @endforeach
                                                                        </ul>
                                                                    </td>
                                                                    <td>
                                                                        <ul>
                                                                            @foreach($hasil_bakat3 as $key => $val)
                                                                                <li>{{ $val }}</li>
                                                                            @endforeach
                                                                        </ul>
                                                                    </td> --}}
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-10 ml-auto">
                                                            <a href="/rapor1/{{ $siswa->id }}" type="button" class="btn btn-primary float-right mr-3">Perbarui Bakat</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="perhitungan">
                                    {{-- NILAI RAPOR --}}
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title">Nilai Rapor Modus</h4>

                                                    <!-- Tabel Data-->
                                                    <div class="table-responsive">
                                                        <table class="table table-striped table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    {{-- <th scope="col"><center>No Induk</center></th>
                                                                    <th scope="col"><center>Nama</center></th> --}}
                                                                    <?php $no=0; foreach($kriteria as $row):$no++; ?>
                                                                    <th scope="col"><center>{{ $row->kriteria }}</center></th>
                                                                    <?php endforeach ?>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    @foreach($rapor as $key)
                                                                    <td><center>{{ $key->nilai_nam }}</center></td>
                                                                    <td><center>{{ $key->nilai_fm }}</center></td>
                                                                    <td><center>{{ $key->nilai_k }}</center></td>
                                                                    <td><center>{{ $key->nilai_b }}</center></td>
                                                                    <td><center>{{ $key->nilai_se }}</center></td>
                                                                    <td><center>{{ $key->nilai_s }}</center></td>
                                                                    @endforeach
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- NILAI GAP --}}
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title">Nilai GAP</h4>

                                                    <!-- Tabel Data-->
                                                    <div class="table-responsive">
                                                        <table class="table table-striped table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col" width="30px"><center>No</center></th>
                                                                    <th scope="col"><center>Keterangan</center></th>
                                                                    @foreach ($kriteria as $row)
                                                                    <th scope="col"><center>{{ $row->kode }}</center></th>
                                                                    @endforeach
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $no=0; foreach($new_gap as $key => $row):$no++; ?>
                                                                    <tr>
                                                                        <td><center><?= $no; ?></center></td>
                                                                        <td>{{ $key }}</td>
                                                                        @foreach ($row as $col)
                                                                        <td>{{ $col }}</td>
                                                                        @endforeach
                                                                    </tr>
                                                                <?php endforeach ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- PEMBOBOTAN NILAI GAP --}}
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title">Pembobotan Nilai GAP</h4>

                                                    <!-- Tabel Data-->
                                                    <div class="table-responsive">
                                                        <table class="table table-striped table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col" width="30px"><center>No</center></th>
                                                                    <th scope="col"><center>Keterangan</center></th>
                                                                    @foreach ($kriteria as $row)
                                                                    <th scope="col"><center>{{ $row->kode }}</center></th>
                                                                    @endforeach
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $no=0; foreach($new_bobot as $key => $row):$no++; ?>
                                                                    <tr>
                                                                        <td><center><?= $no; ?></center></td>
                                                                        <td>{{ $key }}</td>
                                                                        @foreach ($row as $col)
                                                                        <td>{{ $col }}</td>
                                                                        @endforeach
                                                                    </tr>
                                                                <?php endforeach ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- NCF, NSF & Nilai Total --}}
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title">NCF, NSF & Nilai Total</h4>

                                                    <!-- Tabel Data-->
                                                    <div class="table-responsive">
                                                        <table class="table table-striped table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col" width="30px"><center>No</center></th>
                                                                    <th scope="col"><center>Alternatif</center></th>
                                                                    <th scope="col"><center>NCF</center></th>
                                                                    <th scope="col"><center>NSF</center></th>
                                                                    <th>Nilai Total 60 40</th>
                                                                    <th>Nilai Total 70 30</th>
                                                                    <th>Nilai Total 80 20</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $no=0; foreach($res as $key => $row):$no++; ?>
                                                                <tr>
                                                                    <td><center><?= $no; ?></center></td>
                                                                    <td>{{ $key }}</td>
                                                                    @foreach ($row as $col)
                                                                    <td>{{ $col }}</td>
                                                                    @endforeach
                                                                </tr>
                                                                <?php endforeach ?>
                                                            </tbody>
                                                        </table>
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
        </div> 
    </div>
@endsection