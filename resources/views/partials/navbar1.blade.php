        <div class="nav-header">
            <div class="brand-logo">
                <a href="index.html">
                    <b class="logo-abbr"><img src="{{ asset('assets/images/logo.png') }}" alt=""> </b>
                    <span class="logo-compact"><img src="{{ asset('assets/images/logo-compact.png') }}" alt=""></span>
                    <span class="brand-title">
                        <img src="{{ asset('assets/images/logo-text.png') }}" alt="">
                    </span>
                </a>
            </div>
        </div>
        
        <div class="header">    
            <div class="header-content clearfix">
                
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>

                <div class="header-right">
                    <ul class="clearfix">
                        <li class="icons dropdown d-none d-md-flex">
                            <a href="javascript:void(0)" class="log-user"  data-toggle="dropdown">
                        @foreach ($siswa_user as $siswa)
                        <span>Welcome, {{ $siswa->nama }}</span>  <i class="fa fa-angle-down f-s-14" aria-hidden="true"></i>
                        @endforeach
                            </a>
                            <div class="drop-down dropdown-language animated fadeIn  dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        @foreach ($siswa_user as $siswa)
                                        <li><a href="/profil/{{ $siswa->id }}"><i class="icon-user"></i> <span>Profil</span></a></li>
                                        @endforeach
                                        <form action="/logout" method="POST">
                                        @csrf
                                        <li><a href="/logout" type="submit"><i class="icon-key"></i> <span>Keluar</span></a></li>
                                        </form>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>