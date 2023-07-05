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

        <div class="container-fluid">
            
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-5">{{ $header }}</h4>

                            <form action="/aksib" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" class="form-control input-default" id="siswa_id" name="siswa_id" value="{{ $siswa->id }}">
                                <div class="form-group">
                                    <h5>{{ $b1->no }} {{ $b1->ket }}</h5>
                                    <div class="form-group ml-5">
                                        <?php $no=0; foreach($level as $lv):$no++; ?>
                                        <label class="radio-inline mr-3">
                                            <input type="radio" name="nilai1" id="nilai1" value="{{ $lv->bobot }}"> <?= $lv->ket_nilai; ?></label>
                                        <?php endforeach ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>{{ $b2->no }} {{ $b2->ket }}</h5>
                                    <div class="form-group ml-5">
                                        <?php $no=0; foreach($level as $lv):$no++; ?>
                                        <label class="radio-inline mr-3">
                                            <input type="radio" name="nilai2" id="nilai2" value="{{ $lv->bobot }}"> <?= $lv->ket_nilai; ?></label>
                                        <?php endforeach ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>{{ $b3->no }} {{ $b3->ket }}</h5>
                                    <div class="form-group ml-5">
                                        <?php $no=0; foreach($level as $lv):$no++; ?>
                                        <label class="radio-inline mr-3">
                                            <input type="radio" name="nilai3" id="nilai3" value="{{ $lv->bobot }}"> <?= $lv->ket_nilai; ?></label>
                                        <?php endforeach ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>{{ $b4->no }} {{ $b4->ket }}</h5>
                                    <div class="form-group ml-5">
                                        <?php $no=0; foreach($level as $lv):$no++; ?>
                                        <label class="radio-inline mr-3">
                                            <input type="radio" name="nilai4" id="nilai4" value="{{ $lv->bobot }}"> <?= $lv->ket_nilai; ?></label>
                                        <?php endforeach ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>{{ $b5->no }} {{ $b5->ket }}</h5>
                                    <div class="form-group ml-5">
                                        <?php $no=0; foreach($level as $lv):$no++; ?>
                                        <label class="radio-inline mr-3">
                                            <input type="radio" name="nilai5" id="nilai5" value="{{ $lv->bobot }}"> <?= $lv->ket_nilai; ?></label>
                                        <?php endforeach ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>{{ $b6->no }} {{ $b6->ket }}</h5>
                                    <div class="form-group ml-5">
                                        <?php $no=0; foreach($level as $lv):$no++; ?>
                                        <label class="radio-inline mr-3">
                                            <input type="radio" name="nilai6" id="nilai6" value="{{ $lv->bobot }}"> <?= $lv->ket_nilai; ?></label>
                                        <?php endforeach ?>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="reset" class="btn btn-secondary" onclick="window.location='javascript: history.go(-1)'">Sebelumnya</button>
                                    <button type="submit" class="btn btn-primary">Selanjutnya</button>
                                </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection