<!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li>
                        <a href="/dashboard" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="/bakat" aria-expanded="false">
                          <i class="icon-badge menu-icon"></i>
                          <span class="nav-text">Macam-Macam Bakat</span>
                        </a>
                    </li>
                    <li>
                        @foreach ($siswa_user as $siswa)    
                        <a href="/hasil/{{ $siswa->id }}" aria-expanded="false">
                          <i class="icon-notebook menu-icon"></i>
                          <span class="nav-text">Hasil Bakat</span>
                        </a>
                        @endforeach
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->