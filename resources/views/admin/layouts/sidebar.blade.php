</head>

<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0 text-center" href="#" target="_blank">
        <img class="align-center rounded-circle" src="{{ url('/') }}/user_def.jpg" class="navbar-brand-img h-250" alt="main_logo">
        <span class="ms-3 font-weight-bold text-warning text-s">{{ Auth::user()->name}}</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white {{ Request::url() == url('/admin/dashboard') ? 'active bg-gradient-warning' : '' }}" href="{{ url('/') }}/admin/dashboard">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ Request::url() == url('/admin/artikel') ? 'active bg-gradient-warning' : '' }} " href="{{ url('/') }}/admin/artikel">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Artikel</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ Request::url() == url('/admin/kategori-artikel') ? 'active bg-gradient-warning' : '' }}" href="{{ url('/') }}/admin/kategori-artikel">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Kategori Artikel</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ Request::url() == url('/admin/tags') ? 'active bg-gradient-warning' : '' }}" href="{{ url('/') }}/admin/tags">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">view_in_ar</i>
            </div>
            <span class="nav-link-text ms-1">Tags</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ Request::url() == url('/admin/banner-head') ? 'active bg-gradient-warning' : '' }}" href="{{ url('/') }}/admin/banner-head">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">format_textdirection_r_to_l</i>
            </div>
            <span class="nav-link-text ms-1">Banner Head</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ Request::url() == url('/admin/banner-side') ? 'active bg-gradient-warning' : '' }}" href="{{ url('/') }}/admin/banner-side">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">format_textdirection_r_to_l</i>
            </div>
            <span class="nav-link-text ms-1">Banner Side</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ Request::url() == url('/admin/sosmed') ? 'active bg-gradient-warning' : '' }}" href="{{ url('/') }}/admin/sosmed">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">notifications</i>
            </div>
            <span class="nav-link-text ms-1">Sosial Media</span>
          </a>
        </li>
        <li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Kelola Tags & Kategori</h6>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white {{ Request::url() == url('/admin/kelola-kategori') ? 'active bg-gradient-warning' : '' }}" href="{{ url('/') }}/admin/kelola-kategori">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">receipt_long</i>
              </div>
              <span class="nav-link-text ms-1">Artikel Kategori</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white {{ Request::url() == url('/admin/kelola-tags') ? 'active bg-gradient-warning' : '' }}" href="{{ url('/') }}/admin/kelola-tags">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">view_in_ar</i>
              </div>
              <span class="nav-link-text ms-1">Artikel Tags</span>
            </a>
          </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ Request::url() == url('/admin/manajemen-user') ? 'active bg-gradient-warning' : '' }}" href="{{ url('/') }}/admin/manajemen-user">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Manajemen User</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="text-danger material-icons opacity-10">login</i>
            </div>
            <span class="nav-link-text text-danger font-weight-bold ms-1">Keluar</span>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none">
          {{ csrf_field() }}
        </form>
        </li>
      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      <a class="navbar-brand m-0 text-center" href="https://kolakaupdate.com" target="_blank">
        <img src="{{ url('/') }}/logo-panjang-kolakaupdate1.png" class="navbar-brand-img h-250" style="max-height: 5rem;" alt="main_logo">
      </br>
        {{-- <span class="ms-3 font-weight-bold text-white align-center" style="padding-right: 20px;">Kolaka Update</span> --}}
      </a>
      <div class="mx-3">
        <a class="btn bg-gradient-white text-warning  mt-4 w-100" href="https://kolakaupdate.com" type="button">Go To Website</a>
      </div>
    </div>
