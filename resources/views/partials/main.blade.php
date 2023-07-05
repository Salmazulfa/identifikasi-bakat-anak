<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    @if ($level_user == 'Admin')
    <title>{{ $title }}</title>
    @else
    <title>{{ $title1 }}</title>
    @endif
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png') }}">
    <!-- Pignose Calender -->
    <link href="{{ asset('assets/plugins/pg-calendar/css/pignose.calendar.min.css') }}" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/chartist/css/chartist.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css') }}">
    <!-- Custom Stylesheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/tables/css/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

</head>

<body>

    {{-- @include('partials.preloader') --}}

    <div id="main-wrapper">

        @if ($level_user == 'Admin')    
            @include('partials.navbar')
            @include('partials.sidebar')
        @elseif ($level_user == 'Siswa')  
            @include('partials.navbar1')
            @include('partials.sidebar1')
        @endif

        <div class="content-body">
            @yield('container')
        </div>
        
        @include('partials.footer')
        
    </div>

    <script>
        window.setTimeout(function() {
        $(".alert").fadeTo(1500, 0).slideUp(1200, function(){
            $(this).remove(); 
        });
        }, 800);
      </script>

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="{{ asset('assets/plugins/common/common.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.min.js') }}"></script>
    <script src="{{ asset('assets/js/settings.js') }}"></script>
    <script src="{{ asset('assets/js/gleek.js') }}"></script>
    <script src="{{ asset('assets/js/styleSwitcher.js') }}"></script>

    <!-- Chartjs -->
    <script src="{{ asset('assets/plugins/chart.js/Chart.bundle.min.js') }}"></script>
    <!-- Circle progress -->
    <script src="{{ asset('assets/plugins/circle-progress/circle-progress.min.js') }}"></script>
    <!-- Datamap -->
    <script src="{{ asset('assets/plugins/d3v3/index.js') }}"></script>
    <script src="{{ asset('assets/plugins/topojson/topojson.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datamaps/datamaps.world.min.js') }}"></script>
    <!-- Morrisjs -->
    <script src="{{ asset('assets/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/morris/morris.min.js') }}"></script>
    <!-- Pignose Calender -->
    <script src="{{ asset('assets/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/pg-calendar/js/pignose.calendar.min.js') }}"></script>
    <!-- ChartistJS -->
    <script src="{{ asset('assets/plugins/chartist/js/chartist.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js') }}"></script>

    <script src="{{ asset('assets/js/dashboard/dashboard-1.js') }}"></script>

    <script src="{{ asset('assets/plugins/tables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/tables/js/datatable/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/tables/js/datatable-init/datatable-basic.min.js') }}"></script>

    <script>
        $('#editAspek').on('show.bs.modal', function (event) {
          
          var button = $(event.relatedTarget)
          var id = button.data('id')
          var kriteria = button.data('kriteria')

          var modal = $(this)
          modal.find('.modal-body #id').val(id);
          modal.find('.modal-body #kriteria').val(kriteria);
        })
        
        $('#editLevel').on('show.bs.modal', function (event) {
          
          console.log('Modal Open');
          var button = $(event.relatedTarget)
          var id = button.data('id')
          var level = button.data('level')
          var ket_nilai = button.data('ket_nilai')
          var bobot = button.data('bobot')

          var modal = $(this)
          modal.find('.modal-body #id').val(id);
          modal.find('.modal-body #level').val(level);
          modal.find('.modal-body #ket_nilai').val(ket_nilai);
          modal.find('.modal-body #bobot').val(bobot);
        })
        
        $('#editKd').on('show.bs.modal', function (event) {
          
          console.log('Modal Open');
          var button = $(event.relatedTarget)
          var id = button.data('id')
          var kriteria_id = button.data('kriteria_id')
          var no = button.data('no')
          var ket = button.data('ket')

          var modal = $(this)
          modal.find('.modal-body #id').val(id);
          modal.find('.modal-body #kriteria_id').val(kriteria_id);
          modal.find('.modal-body #no').val(no);
          modal.find('.modal-body #ket').val(ket);
        })

        $('#editPass').on('show.bs.modal', function (event) {
          
          var button = $(event.relatedTarget)
          var id = button.data('id')
          var username = button.data('username')
          var nama = button.data('nama')

          var modal = $(this)
          modal.find('.modal-body #id').val(id);
          modal.find('.modal-body #username').val(username);
          modal.find('.modal-body #nama').val(nama);
        })
    </script>
  

</body>

</html>