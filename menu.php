<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="assets/img/finger.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">FINGERPRINT AK GANI</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="index.php" class="nav-link <?= isset($_GET['pages']) ? $_GET['pages'] == 'beranda' ? 'active' : '' : 'active'; ?>">
            <i class="nav-icon fas fa-tv"></i>
            <p>
              Beranda
            </p>
          </a>
        </li>
        <li class="nav-header">DATA PERSONAL</li>
        <li class="nav-item">
          <a href="?pages=dataPersonal" class="nav-link <?= isset($_GET['pages']) ? $_GET['pages'] == 'dataPersonal' ? 'active' : '' : ''; ?>">
            <i class="nav-icon fas fa-hospital-user"></i>
            <p>
              Upload Personal ke Mesin
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="?pages=dataPersonal" class="nav-link <?= isset($_GET['pages']) ? $_GET['pages'] == 'dataPersonal' ? 'active' : '' : ''; ?>">
            <i class="nav-icon fas fa-hospital-user"></i>
            <p>
              Hapus Personal di Mesin
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="?pages=dataPersonal" class="nav-link <?= isset($_GET['pages']) ? $_GET['pages'] == 'dataPersonal' ? 'active' : '' : ''; ?>">
            <i class="nav-icon fas fa-hospital-user"></i>
            <p>
              Data Personal
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>