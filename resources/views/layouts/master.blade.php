<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Planet Shop</title>
  <link rel="shortcut icon" type="image/png" href="/src/assets/images/logos/planetshop.png" />
  <link rel="stylesheet" href="/src/assets/css/styles.min.css" />
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
            <img src="/src/assets/images/logos/planetshop.png" width="140" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
            @include ('partial.sidebar')
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">

      <!--  Header Start -->
            @include ('partial.nav')
      <!--  Header End -->

      <div class="container-fluid">
        @yield ('content')
      </div>
    </div>
  </div>
  <script src="/src/assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="/src/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="/src/assets/js/sidebarmenu.js"></script>
  <script src="/src/assets/js/app.min.js"></script>
  <script src="/src/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="/src/assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="/src/assets/js/dashboard.js"></script>
</body>

</html>
