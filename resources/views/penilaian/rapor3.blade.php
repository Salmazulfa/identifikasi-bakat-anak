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

                            <form action="/aksik" method="POST" enctype="multipart/form-data">
                                @csrf
                                    <input type="hidden" class="form-control input-default" id="siswa_id" name="siswa_id" value="{{ $siswa->id }}">
                                    <div class="form-group">
                                        <h5>{{ $k1->no }} {{ $k1->ket }}</h5>
                                        <div class="form-group ml-5">
                                            <?php $no=0; foreach($level as $lv):$no++; ?>
                                            <label class="radio-inline mr-3">
                                                <input type="radio" name="nilai1" id="nilai1" value="{{ $lv->bobot }}"> <?= $lv->ket_nilai; ?></label>
                                            <?php endforeach ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>{{ $k2->no }} {{ $k2->ket }}</h5>
                                        <div class="form-group ml-5">
                                            <?php $no=0; foreach($level as $lv):$no++; ?>
                                            <label class="radio-inline mr-3">
                                                <input type="radio" name="nilai2" id="nilai2" value="{{ $lv->bobot }}"> <?= $lv->ket_nilai; ?></label>
                                            <?php endforeach ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>{{ $k3->no }} {{ $k3->ket }}</h5>
                                        <div class="form-group ml-5">
                                            <?php $no=0; foreach($level as $lv):$no++; ?>
                                            <label class="radio-inline mr-3">
                                                <input type="radio" name="nilai3" id="nilai3" value="{{ $lv->bobot }}"> <?= $lv->ket_nilai; ?></label>
                                            <?php endforeach ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>{{ $k4->no }} {{ $k4->ket }}</h5>
                                        <div class="form-group ml-5">
                                            <?php $no=0; foreach($level as $lv):$no++; ?>
                                            <label class="radio-inline mr-3">
                                                <input type="radio" name="nilai4" id="nilai4" value="{{ $lv->bobot }}"> <?= $lv->ket_nilai; ?></label>
                                            <?php endforeach ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>{{ $k5->no }} {{ $k5->ket }}</h5>
                                        <div class="form-group ml-5">
                                            <?php $no=0; foreach($level as $lv):$no++; ?>
                                            <label class="radio-inline mr-3">
                                                <input type="radio" name="nilai5" id="nilai5" value="{{ $lv->bobot }}"> <?= $lv->ket_nilai; ?></label>
                                            <?php endforeach ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>{{ $k6->no }} {{ $k6->ket }}</h5>
                                        <div class="form-group ml-5">
                                            <?php $no=0; foreach($level as $lv):$no++; ?>
                                            <label class="radio-inline mr-3">
                                                <input type="radio" name="nilai6" id="nilai6" value="{{ $lv->bobot }}"> <?= $lv->ket_nilai; ?></label>
                                            <?php endforeach ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>{{ $k7->no }} {{ $k7->ket }}</h5>
                                        <div class="form-group ml-5">
                                            <?php $no=0; foreach($level as $lv):$no++; ?>
                                            <label class="radio-inline mr-3">
                                                <input type="radio" name="nilai7" id="nilai7" value="{{ $lv->bobot }}"> <?= $lv->ket_nilai; ?></label>
                                            <?php endforeach ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>{{ $k8->no }} {{ $k8->ket }}</h5>
                                        <div class="form-group ml-5">
                                            <?php $no=0; foreach($level as $lv):$no++; ?>
                                            <label class="radio-inline mr-3">
                                                <input type="radio" name="nilai8" id="nilai8" value="{{ $lv->bobot }}"> <?= $lv->ket_nilai; ?></label>
                                            <?php endforeach ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>{{ $k9->no }} {{ $k9->ket }}</h5>
                                        <div class="form-group ml-5">
                                            <?php $no=0; foreach($level as $lv):$no++; ?>
                                            <label class="radio-inline mr-3">
                                                <input type="radio" name="nilai9" id="nilai9" value="{{ $lv->bobot }}"> <?= $lv->ket_nilai; ?></label>
                                            <?php endforeach ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>{{ $k10->no }} {{ $k10->ket }}</h5>
                                        <div class="form-group ml-5">
                                            <?php $no=0; foreach($level as $lv):$no++; ?>
                                            <label class="radio-inline mr-3">
                                                <input type="radio" name="nilai10" id="nilai10" value="{{ $lv->bobot }}"> <?= $lv->ket_nilai; ?></label>
                                            <?php endforeach ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>{{ $k11->no }} {{ $k11->ket }}</h5>
                                        <div class="form-group ml-5">
                                            <?php $no=0; foreach($level as $lv):$no++; ?>
                                            <label class="radio-inline mr-3">
                                                <input type="radio" name="nilai11" id="nilai11" value="{{ $lv->bobot }}"> <?= $lv->ket_nilai; ?></label>
                                            <?php endforeach ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>{{ $k12->no }} {{ $k12->ket }}</h5>
                                        <div class="form-group ml-5">
                                            <?php $no=0; foreach($level as $lv):$no++; ?>
                                            <label class="radio-inline mr-3">
                                                <input type="radio" name="nilai12" id="nilai12" value="{{ $lv->bobot }}"> <?= $lv->ket_nilai; ?></label>
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