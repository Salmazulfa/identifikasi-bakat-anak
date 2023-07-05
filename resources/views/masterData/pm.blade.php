@extends('partials.main')

@section('container')
    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Master Data</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Siswa</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Hasil</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        
        {{-- NILAI CFSF --}}
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Core Factor & Secondary Factor</h4>

                        <!-- Tabel Data-->
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col" width="30px"><center>No</center></th>
                                        <th scope="col"><center>Alternatif</center></th>
                                        <?php $no=0; foreach($kriteria as $row):$no++; ?>
                                        <th scope="col"><center>{{ $row->kode }}</center></th>
                                        <?php endforeach ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=0; foreach($jenis as $key => $row):$no++; ?>
                                        <tr>
                                            <td><center><?= $no; ?></center></td>
                                            <td>{{ $key }}</td>
                                            @foreach ($row as $col)
                                                @if ($col == 1)
                                                    <td><center>CF</center></td>
                                                    @else
                                                    <td><center>SF</center></td>
                                                    @endif
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
        
        {{-- PROFIL IDEAL --}}
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Nilai Profil Ideal</h4>

                        <!-- Tabel Data-->
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col" width="30px"><center>No</center></th>
                                        <th scope="col"><center>Alternatif</center></th>
                                        <?php $no=0; foreach($kriteria as $row):$no++; ?>
                                        <th scope="col"><center>{{ $row->kode }}</center></th>
                                        <?php endforeach ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=0; foreach($new_pi as $key => $row):$no++; ?>
                                        <tr>
                                            <td><center><?= $no; ?></center></td>
                                            <td>{{ $key }}</td>
                                            @foreach ($row as $col)
                                                    <td><center>{{ $col }}</center></td>
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
@endsection