@extends('partials.main')

@section('container')
    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Macam-macam Bakat</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        
        <div class="row">
            <div class="col-12 m-b-30">
              <h4 class="d-inline">Macam-Macam Bakat</h4>
              <p class="text-muted">Menurut teori Howard Gardner</p>
              <div class="row">
                @foreach ($bakat as $bakat)    
                <div class="col-md-6 col-lg-3">
                  <div class="card">
                    <img class="img-fluid" src="{{ asset('storage/files/'.$bakat->img) }}" alt="" />
                    <div class="card-body">
                      <h6 class="card-title">{{ $bakat->bakat }}</h6>
                      <p class="card-text">
                        {{$bakat->ket}}
                      </p>
                      <hr>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
    </div>
@endsection