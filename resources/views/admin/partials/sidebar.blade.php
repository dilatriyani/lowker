<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      <a class="sidebar-brand brand-logo" href="index.html">
        {{-- <img src="" alt="logo" /> --}}
        Jogja Lowker
      </a>
    </div>
    <ul class="nav">
    
      <li class="nav-item menu-items">
        <a class="nav-link" href="/dashboard">
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-icon">
            <i class="mdi mdi-laptop"></i>
          </span>
          <span class="menu-title">Category</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{url('view_category')}}">Category Lulusan</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{url('view_catelulusan')}}">Category Lokasi</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{url('view_catekerja')}}">Category Waktu Kerja</a></li>
          </ul>
        </div>
      </li>
      {{-- <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-icon">
            <i class="mdi mdi-laptop"></i>
          </span>
          <span class="menu-title">Data Lowker</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{url('lowkers')}}">Data lowker</a></li>
            
          </ul>
        </div>
      </li> --}}
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url('lowker')}}">
          <span class="menu-icon">
            <i class="mdi mdi-playlist-play"></i>
          </span>
          <span class="menu-title">Data Lowker</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-icon">
            <i class="mdi mdi-laptop"></i>
          </span>
          <span class="menu-title">Data Home</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="/slider_home">Slider Home</a></li>
            <li class="nav-item"> <a class="nav-link" href="/slider_mitra">Slider Mitra</a></li>
            <li class="nav-item"> <a class="nav-link" href="/kebijakanuser">Kebijakan</a></li>
            <li class="nav-item"> <a class="nav-link" href="/pasangloker">Pasang Lowongan</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="pages/tables/basic-table.html">
          <span class="menu-icon">
            <i class="mdi mdi-table-large"></i>
          </span>
          <span class="menu-title">Tables</span>
        </a>
    </ul>
  </nav>