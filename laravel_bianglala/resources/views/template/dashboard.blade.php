
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>B'Smart Staff</title>
  <link rel="shortcut icon" type="/image/png" href="images/logos/favicon.png" />
  <link rel="stylesheet" href="/css/styles.min.css" />
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
          <a href="./home" class="text-nowrap logo-img">
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
                <a class="sidebar-link" href="./template/dashboard" aria-expanded="false">
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
                <a class="sidebar-link" href="./karyawan/create" aria-expanded="false">
                  <span>
                    <i class="ti ti-article"></i>
                  </span>
                  <span class="hide-menu">Tambah Karyawan</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="./karyawan/daftar" aria-expanded="false">
                  <span>
                    <i class="ti ti-alert-circle"></i>
                  </span>
                  <span class="hide-menu">Daftar Karyawan</span>
                </a>
              </li>
              <li class="nav-small-cap">
                  <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                  <span class="hide-menu">PENGGAJIAN</span>
                </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="./gaji" aria-expanded="false">
                  <span>
                    <i class="ti ti-cards"></i>
                  </span>
                  <span class="hide-menu">Informasi Gaji</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="./riwayat" aria-expanded="false">
                  <span>
                    <i class="ti ti-file-description"></i>
                  </span>
                  <span class="hide-menu">Riwayat Penggajian</span>
                </a>
              </li>
              <li class="nav-small-cap">
                  <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                  <span class="hide-menu">CUTI</span>
                </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="./status_cuti/create" aria-expanded="false">
                  <span>
                    <i class="ti ti-typography"></i>
                  </span>
                  <span class="hide-menu">Status Cuti</span>
                </a>
              </li>
              <li class="sidebar-item">
                  <a class="sidebar-link" href="./daftar_cuti/index" aria-expanded="false">
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
                <a class="sidebar-link" href="./ui-typography.html" aria-expanded="false">
                  <span>
                    <i class="ti ti-typography"></i>
                  </span>
                  <span class="hide-menu">Tambah Evaluasi</span>
                </a>
              </li>
              <li class="sidebar-item">
                  <a class="sidebar-link" href="./ui-typography.html" aria-expanded="false">
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
                        <button type="submit">Logout</button>
                    </form>
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
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
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
      <section class="content">

        @yield('content')
      </section>
      <div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
            <div class="col-lg-4 d-flex align-items-stretch">
              <div class="card w-100">
                <div class="card-body p-4">
                  <div class="mb-4">
                    <h5 class="card-title fw-semibold">Tentang PT. Bianglala Metropolitan</h5>
                  </div>
                  <p class="fs-4 text-dark">PT. Bianglala Metropolitan merupakan sebuah perusahaan yang bergerak dibidang transportasi sejak tahun 2001</p>
                  <!-- Add more information about the company here -->
                </div>
              </div>
            </div>
            <div class="col-lg-8 d-flex align-items-stretch">
              <div class="card w-100">
                <div class="card-body p-4">
                  <h5 class="card-title fw-semibold mb-4">Jam Operasional</h5>
                  <div class="table-responsive">
                    <table class="table text-nowrap mb-0 align-middle">
                      <thead class="text-dark fs-4">
                        <tr>
                          <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Hari</h6>
                          </th>
                          <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Waktu Buka</h6>
                          </th>
                          <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Waktu Tutup</h6>
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="border-bottom-0"><h6 class="fw-semibold mb-0">Senin-Sabtu</h6></td>
                          <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">8:00 AM</h6>
                          </td>
                          <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">5:00 PM</h6>
                          </td>
                        </tr>
                        <tr>
                          <td class="border-bottom-0"><h6 class="fw-semibold mb-0">Minggu</h6></td>
                          <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">9:00 AM</h6>
                          </td>
                          <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">2:00 PM</h6>
                          </td>
                        </tr>
                        <!-- Add more rows for each day -->
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>

        <div class="row">
          <div class="col-sm-6 col-xl-3">
            <div class="card overflow-hidden rounded-2">
              <div class="position-relative">
                <a href="javascript:void(0)"><img src="/images/products/buslistrik.jpeg" class="card-img-top rounded-0" alt="..."></a>
                                </div>
              <div class="card-body pt-3 p-4">
                <h6 class="fw-semibold fs-4">Peresmian Bus Listrik</h6>
                <div class="d-flex align-items-center justify-content-between">

                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3">
            <div class="card overflow-hidden rounded-2">
              <div class="position-relative">
                <a href="javascript:void(0)"><img src="/images/products/dalam.jpeg" class="card-img-top rounded-0" alt="..."></a>
                        </div>
              <div class="card-body pt-3 p-4">
                <h6 class="fw-semibold fs-4">Suasana Bus</h6>
                <div class="d-flex align-items-center justify-content-between">

                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3">
            <div class="card overflow-hidden rounded-2">
              <div class="position-relative">
                <a href="javascript:void(0)"><img src="/images/products/haltehalte.jpg" class="card-img-top rounded-0" alt="..."></a>
                               </div>
              <div class="card-body pt-3 p-4">
                <h6 class="fw-semibold fs-4">Halte Bus</h6>
                <div class="d-flex align-items-center justify-content-between">

                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3">
            <div class="card overflow-hidden rounded-2">
              <div class="position-relative">
                <a href="javascript:void(0)"><img src="/images/products/electric.jpg" class="card-img-top rounded-0" alt="..."></a>
                            </div>
              <div class="card-body pt-3 p-4">
                <h6 class="fw-semibold fs-4">Peninjauan Bus</h6>
                <div class="d-flex align-items-center justify-content-between">

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="py-6 px-6 text-center">
          <p class="mb-0 fs-4">Design and Developed by <a href="https://bsmartstaff.com/" target="_blank" class="pe-1 text-primary text-decoration-underline">B'SmartStaff.com</a> Distributed by <a href="https://bianglalametropolitan">PT.Bianglala Metropolitan</a></p>
        </div>
      </div>
    </div>
  </div>
  <script src="libs/jquery/dist/jquery.min.js"></script>
  <script src="libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/sidebarmenu.js"></script>
  <script src="js/app.min.js"></script>
  <script src="libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="libs/simplebar/dist/simplebar.js"></script>
  <script src="js/dashboard.js"></script>
  @yield('js')
</body>

</html>
