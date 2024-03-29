
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>B'Smart Staff</title>
  <link rel="shortcut icon" type="image/png" href="images/logos/favicon.png" />
  <link rel="stylesheet" href="{{ url('css/styles.min.css') }}" />
  @yield('css')
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./index.html" class="text-nowrap logo-img">
            <img src="{{ url('images/logos/LOGO.png') }}" width="180" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/template/dashboard" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">KARYAWAN</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/karyawan/create" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Tambah Karyawan</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/karyawan/daftar" aria-expanded="false">
                <span>
                  <i class="ti ti-alert-circle"></i>
                </span>
                <span class="hide-menu">Daftar Karyawan</span>
              </a>
            </li>
            <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">JADWAL GAJI</span>
              </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/gaji/tambah" aria-expanded="false">
                <span>
                  <i class="ti ti-cards"></i>
                </span>
                <span class="hide-menu">Tambah Gaji</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/gaji/riwayat" aria-expanded="false">
                <span>
                  <i class="ti ti-file-description"></i>
                </span>
                <span class="hide-menu">Riwayat Penggajian</span>
              </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="/gaji/informasi" aria-expanded="false">
                  <span>
                    <i class="ti ti-file-description"></i>
                  </span>
                  <span class="hide-menu">Informasi Gaji</span>
                </a>
              </li>
            <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">CUTI</span>
              </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/user-status-cuti" aria-expanded="false">
                <span>
                  <i class="ti ti-typography"></i>
                </span>
                <span class="hide-menu">Status Cuti</span>
              </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="/admin-daftar-cuti" aria-expanded="false">
                  <span>
                    <i class="ti ti-typography"></i>
                  </span>
                  <span class="hide-menu">Daftar Cuti</span>
                </a>
              </li>
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Evaluasi Kinerja</span>
              </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/evaluasi/create" aria-expanded="false">
                <span>
                  <i class="ti ti-typography"></i>
                </span>
                <span class="hide-menu">Tambah Evaluasi</span>
              </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="/evaluasi" aria-expanded="false">
                  <span>
                    <i class="ti ti-typography"></i>
                  </span>
                  <span class="hide-menu">Riwayat Evaluasi</span>
                </a>
              </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">AUTH</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./login" aria-expanded="false">
                <span>
                  <i class="ti ti-login"></i>
                </span>
                <span class="hide-menu">Login</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./register " aria-expanded="false">
                <span>
                  <i class="ti ti-user-plus"></i>
                </span>
                <span class="hide-menu">Register</span>
              </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="./login" aria-expanded="false">
                  <span>
                    <i class="ti ti-login"></i>
                  </span>
                  <span class="hide-menu">Logout</span>
                </a>
              </li>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>

          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">

              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="{{ url('images/profile/aca.jpeg') }}" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="{{ route('profil.index') }}" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-mail fs-6"></i>
                      <p class="mb-0 fs-3">My Account</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-list-check fs-6"></i>
                      <p class="mb-0 fs-3">My Task</p>
                    </a>
                    <a href="./login" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <div class="container-fluid">
      <section class="content">

        @yield('content')
      </section>


      <script src="{{url('/libs/jquery/dist/jquery.min.js') }}"></script>
      <script src="{{url('/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{url('/js/sidebarmenu.js') }}"></script>
      <script src="{{url('/js/app.min.js') }}"></script>
      <script src="{{url('/libs/simplebar/dist/simplebar.js') }}"></script>

      <!-- Tambahkan script JavaScript untuk pencarian -->
      <script>
        $(document).ready(function() {
          // Fungsi untuk melakukan pencarian
          $('#searchInput').on('keyup', function() {
            var searchText = $(this).val().toLowerCase();

            // Menyaring baris tabel berdasarkan teks pencarian
            $('tbody tr').each(function() {
              var rowData = $(this).text().toLowerCase();
              if (rowData.indexOf(searchText) === -1) {
                $(this).hide();
              } else {
                $(this).show();
              }
            });
          });
        });
      </script>

      @yield('js') <!-- Pastikan Anda tetap menyertakan yield('js') untuk keperluan lainnya -->
      </body>

      </html>
