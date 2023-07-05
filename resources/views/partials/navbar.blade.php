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
                                <span>Welcome, {{ $user->username }}</span>  <i class="fa fa-angle-down f-s-14" aria-hidden="true"></i>
                            </a>
                            <div class="drop-down dropdown-language animated fadeIn dropdown-menu">
                                    <ul>
                                        <form action="/logout" method="POST">
                                        @csrf
                                        <li><a href="/logout" type="submit"><i class="icon-key"></i> <span>Keluar</span></a></li>
                                        </form>
                                    </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>