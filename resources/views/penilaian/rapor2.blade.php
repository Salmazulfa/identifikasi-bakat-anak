    @extends('partials.main')
    @section('container')
        @if ($level_user == 'Admin')    
            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Master Data</a></li>
                        <li class="breadcrumb-item active"><a href="/admin/dataSiswa">Data Siswa</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Pengisian Rapor</a></li>
                    </ol>
                </div>
            </div>
        @else
            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Pengisian Rapor</a></li>
                    </ol>
                </div>
            </div>        
        @endif
        <!-- row -->
    
        <div class="container-fluid">
            {{-- PESAN ALERT --}}
                @if (session()->has('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
            {{-- END OF PESAN ALERT --}}
            
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-5">{{ $header }}</h4>
    
                            <form action="/aksifm" method="POST" enctype="multipart/form-data">
                                @csrf
                                    <div class="col-sm-10">
                                        <input type="hidden" class="form-control input-default" id="siswa_id" name="siswa_id" value="{{ $siswa->id }}">
                                    </div>
                                    <div class="form-group">
                                        <h5>{{ $fm1->no }} {{ $fm1->ket }}</h5>
                                        <div class="form-group ml-5">
                                            <?php $no=0; foreach($level as $lv):$no++; ?>
                                            <label class="radio-inline mr-3">
                                                <input type="radio" name="nilai1" id="nilai1" value="{{ $lv->bobot }}"> <?= $lv->ket_nilai; ?></label>
                                            <?php endforeach ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>{{ $fm2->no }} {{ $fm2->ket }}</h5>
                                        <div class="form-group ml-5">
                                            <?php $no=0; foreach($level as $lv):$no++; ?>
                                            <label class="radio-inline mr-3">
                                                <input type="radio" name="nilai2" id="nilai2" value="{{ $lv->bobot }}"> <?= $lv->ket_nilai; ?></label>
                                            <?php endforeach ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>{{ $fm3->no }} {{ $fm3->ket }}</h5>
                                        <div class="form-group ml-5">
                                            <?php $no=0; foreach($level as $lv):$no++; ?>
                                            <label class="radio-inline mr-3">
                                                <input type="radio" name="nilai3" id="nilai3" value="{{ $lv->bobot }}"> <?= $lv->ket_nilai; ?></label>
                                            <?php endforeach ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>{{ $fm4->no }} {{ $fm4->ket }}</h5>
                                        <div class="form-group ml-5">
                                            <?php $no=0; foreach($level as $lv):$no++; ?>
                                            <label class="radio-inline mr-3">
                                                <input type="radio" name="nilai4" id="nilai4" value="{{ $lv->bobot }}"> <?= $lv->ket_nilai; ?></label>
                                            <?php endforeach ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>{{ $fm5->no }} {{ $fm5->ket }}</h5>
                                        <div class="form-group ml-5">
                                            <?php $no=0; foreach($level as $lv):$no++; ?>
                                            <label class="radio-inline mr-3">
                                                <input type="radio" name="nilai5" id="nilai5" value="{{ $lv->bobot }}"> <?= $lv->ket_nilai; ?></label>
                                            <?php endforeach ?>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" onclick="window.location='javascript: history.go(-1)'">Kembali</button>
                                        <button type="submit" class="btn btn-primary">Selanjutnya</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

