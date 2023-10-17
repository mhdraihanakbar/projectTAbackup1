<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title Page-->
    <title>TA</title>

    <!-- Fontfaces CSS-->
    <link href="{{ asset('css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset('vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet"
        media="all">
    <link href="{{ asset('vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet" media="all">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        {{-- <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            {{-- <img src="images/icon/logo.png" alt="CoolAdmin" />
                            <h1>Inventory</h1>
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div> --}}
        {{-- <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="/home">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.html">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="index2.html">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index3.html">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">Dashboard 4</a>
                                </li>
                            </ul>
                        </li>
                        {{-- <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li> --}}
        {{-- </ul>
                    </li>
                    </ul>
                </div>
            </nav> --}}
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    {{-- <img src="images/icon/logo.png" alt="Cool Admin" /> --}}
                    <h1>Inventory</h1>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">

                        <li class="nav-item @if ($activePage == 'dashboard') active @endif">
                            <a class="js-arrow" href="/home">
                                <i class="fas fa-home"></i>Dashboard</a>

                            {{-- <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="index.html">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="index2.html">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index3.html">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">Dashboard 4</a>
                                </li>
                            </ul> --}}
                        </li>


                        @if (auth()->check() && auth()->user()->role)
                            <!-- Pastikan objek relasi 'role' ada -->
                            @if (auth()->user()->role->namarole === 'Administrator')
                                <li class="nav-item @if ($activePage == 'supplier') active @endif">
                                    <a href="{{ url('/supplier') }}">
                                        <i class="	fas fa-address-card"></i>Supplier</a>
                                </li>
                                <li class="nav-item @if ($activePage == 'barang') active @endif">
                                    <a class="js-arrow" href="#">
                                        <i class="fas fa-folder"></i>Barang</a>
                                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                                        {{-- <li>
                                    <a href="{{ url('/jenis') }}">Jenis</a>
                                </li> --}}
                                        <li>
                                            <a href="{{ url('/satuan') }}">Satuan</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/tipe') }}">Merk / Type</a>
                                        </li>


                                        <li>
                                            <a href="{{ url('/databarang') }}">Data Barang Total</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item @if ($activePage == 'jurusan') active @endif">
                                    <a href="{{ url('/jurusan') }}">
                                        <i class="fas fa-chart-bar"></i>Data Jurusan</a>
                                </li>
                                <li class="nav-item @if ($activePage == 'cetak') active @endif">
                                    <a href="{{ url('/cetak') }}">
                                        <i class="far fa-edit"></i>Cetak Laporan</a>
                                </li>
                                <li class="nav-item @if ($activePage == 'user') active @endif">
                                    <a class="js-arrow" href="#">
                                        <i class="fas fa-user-circle"></i>User</a>
                                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                                        <li>
                                            <a href="{{ url('/role') }}">Role</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/user') }}">Data User</a>
                                        </li>
                                    </ul>
                                </li>
                            @elseif (auth()->user()->role->namarole === 'Simak BMN')
                                <li class="nav-item @if ($activePage == 'barangmasuk') active @endif">
                                    <a class="js-arrow" href="#">
                                        <i class="fas fa-universal-access"></i>SIMAK BMN</a>
                                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                                        {{-- <li>
                                    <a href="{{ url('/jenis') }}">Jenis</a>
                                </li> --}}
                                        <li>
                                            <a href="{{ url('/barangmasuk') }}">Barang Masuk</a>
                                        </li>
                                    </ul>
                                </li>
                            @elseif (auth()->user()->role->namarole === 'Kasubag TU')

                            @elseif (auth()->user()->role->namarole === 'Petugas Gudang Mesin')
                                <li class="nav-item @if ($activePage == 'petugasgudangmesin') active @endif">
                                    <a class="js-arrow" href="#">
                                        <i class="far fa-folder"></i>Gudang Mesin</a>
                                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                                        {{-- <li>
                                    <a href="{{ url('/jenis') }}">Jenis</a>
                                </li> --}}
                                        <li>
                                            <a href="{{ url('/databarang/mesin') }}">Data Barang Mesin</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/barangmasuk/mesin') }}">Barang Masuk Mesin</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/barangkeluar/mesin') }}">Barang Keluar Mesin</a>
                                        </li>
                                    </ul>
                                </li>
                            @elseif (auth()->user()->role->namarole === 'Petugas Gudang Sipil')

                            @elseif (auth()->user()->role->namarole === 'Petugas Gudang Elektro')

                            @elseif (auth()->user()->role->namarole === 'Petugas Gudang Adm Niaga')

                            @elseif (auth()->user()->role->namarole === 'Petugas Gudang Akuntansi')

                            @elseif (auth()->user()->role->namarole === 'Petugas Gudang Ti')
                                <li class="nav-item @if ($activePage == 'petugasgudangti') active @endif">
                                    <a class="js-arrow" href="#">
                                        <i class="far fa-folder"></i>Gudang TI</a>
                                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                                        {{-- <li>
                                    <a href="{{ url('/jenis') }}">Jenis</a>
                                </li> --}}
                                        <li>
                                            <a href="{{ url('/databarang/ti') }}">Data Barang TI</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/barangmasukjurusan/ti') }}">Barang Masuk TI</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/barangkeluar/ti') }}">Barang Keluar TI</a>
                                        </li>
                                    </ul>
                                </li>
                            @elseif (auth()->user()->role->namarole === 'Petugas Gudang Bing')
                            @endif
                        @endif


                        {{-- <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li> --}}
                    </ul>
                    </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search"
                                    placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    {{-- START MESSAGE --}}
                                    {{-- <div class="noti__item js-item-menu"> --}}
                                    {{-- <i class="zmdi zmdi-comment-more"></i> --}}
                                    {{-- <span class="quantity">1</span> --}}
                                    {{-- <div class="mess-dropdown js-dropdown"> --}}
                                    {{-- <div class="mess__title">
                                                <p>You have 2 news message</p>
                                            </div> --}}
                                    {{-- <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div> --}}
                                    {{-- <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                                </div>
                                                <div class="content">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div> --}}
                                    {{-- <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div> --}}
                                    {{-- </div> --}}
                                    {{-- END MESSAGE --}}

                                    {{-- START EMAIL --}}
                                    {{-- <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, April 12,,2018</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div> --}}
                                    {{-- END EMAIL --}}


                                    {{-- START NOTIFICATIONS --}}
                                    {{-- <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                    {{-- END NOTIFICATIONS --}}

                                    <div class="account-wrap">
                                        <div class="account-item clearfix js-item-menu">
                                            {{-- <div class="image">
                                                <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                            </div> --}}
                                            <div class="content">
                                                {{-- <a class="js-acc-btn" href="#">john doe</a> --}}
                                                <a href="#" role="button" aria-haspopup="true"
                                                    aria-expanded="false" v-pre>
                                                    {{ Auth::user()->name }}
                                                </a>
                                            </div>
                                            <div class="account-dropdown js-dropdown">
                                                <div class="info clearfix">
                                                    <div class="image">
                                                        <a href="#">
                                                            <img src="{{ asset('images/icon/avatar-01.jpg') }}"
                                                                alt="John Doe" />
                                                        </a>
                                                    </div>
                                                    <div class="content">
                                                        <h5 class="name">
                                                            <a href="#" role="button" aria-haspopup="true"
                                                                aria-expanded="false" v-pre>
                                                                {{ Auth::user()->name }}
                                                            </a>
                                                        </h5>
                                                        <span class="email"><a href="#" role="button"
                                                                aria-haspopup="true" aria-expanded="false" v-pre>
                                                                {{ Auth::user()->email }}
                                                            </a></span>
                                                    </div>
                                                </div>
                                                <div class="account-dropdown__body">
                                                    <div class="account-dropdown__item">
                                                        <a href="#">
                                                            <i class="zmdi zmdi-account"></i>Reset Password</a>
                                                    </div>
                                                    {{-- <div class="account-dropdown__item">
                                                        <a href="#">
                                                            <i class="zmdi zmdi-settings"></i>Setting</a>
                                                    </div> --}}
                                                    {{-- <div class="account-dropdown__item">
                                                        <a href="#">
                                                            <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                    </div> --}}
                                                </div>
                                                <div class="account-dropdown__footer">
                                                    {{-- <i class="zmdi zmdi-power"></i>Logout</a> --}}
                                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                        <i class="zmdi zmdi-power"></i>
                                                        {{ __('Logout') }}
                                                    </a>

                                                    <form id="logout-form" action="{{ route('logout') }}"
                                                        method="POST" class="d-none">
                                                        @csrf
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </header>
            <!-- HEADER DESKTOP-->
