<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="<?= base_url('assets/ruang-admin/') ?>img/logo/logo.png" rel="icon">
  <title>RuangAdmin - Dashboard</title>
  <link href="<?= base_url('assets/ruang-admin/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url('assets/ruang-admin/') ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url('assets/ruang-admin/') ?>css/ruang-admin.min.css" rel="stylesheet">
  <script src="https://cdn.tiny.cloud/1/1fq7uvs5qufixzvg3uhednu6yjvs7nhsrksdf4bajgqhsrjy/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url(); ?>">
        <div class="sidebar-brand-icon">
          <img src="<?= base_url('assets/ruang-admin/') ?>img/logo/logo2.png">
        </div>
        <div class="sidebar-brand-text mx-3">RuangAdmin</div>
      </a>
      <hr class="sidebar-divider my-0">
      <?php $menu = $this->uri->segment(2); ?>
      <li class="nav-item <?php if($menu=='home'){ echo"active";} ?>">
        <a class="nav-link" href="<?= site_url('admin/home') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Features
      </div>
      <li class="nav-item <?php if($menu=='caraousel'){ echo"active";} ?>">
        <a class="nav-link" href="<?= site_url('admin/caraousel') ?>">
          <i class="far fa-fw fa-window-maximize"></i>
          <span>Caraousel</span>
        </a>
      </li>
      <li class="nav-item <?php if($menu=='kategori'){ echo"active";} ?>">
        <a class="nav-link " href="<?= site_url('admin/kategori') ?>" >
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Kategori konten</span>
        </a>
      </li>
      <li class="nav-item <?php if($menu=='konten'){ echo"active";} ?>">
        <a class="nav-link " href="<?= site_url('admin/konten') ?>" >
          <i class="fas fa-fw fa-table"></i>
          <span>Konten</span>
        </a>
      </li>
      <?php if($this->session->userdata('level')=='Admin'){ ?>
      <li class="nav-item <?php if($menu=='user'){ echo"active";} ?>">
        <a class="nav-link" href="<?= site_url('admin/user') ?>">
          <i class="fas fa-fw fa-palette"></i>
          <span>User</span>
        </a>
      </li>
      <?php } ?>
      
      <?php if($this->session->userdata('level')=='Admin'){ ?>
      <li class="nav-item <?php if($menu=='konfigurasi'){ echo"active";} ?>">
        <a class="nav-link" href="<?= site_url('admin/konfigurasi') ?>">
          <i class="fas fa-fw fa-palette"></i>
          <span>Konfigurasi</span>
        </a>
      </li>
      <?php } ?> 
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
      </li>
      <hr class="sidebar-divider">
      <div class="version" id="version-ruangadmin"></div>
    </ul>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <li class="breadcrumb-item active text-light" aria-current="page"><?= $judul_halaman ?></li>
          <ul class="navbar-nav ml-auto">
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="<?= base_url('assets/ruang-admin/') ?>img/boy.png" style="max-width: 60px">
                <span class="ml-2 d-none d-lg-inline text-white small">Maman Ketoprak</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Password
                </a>
                <a class="dropdown-item" href="<?= base_url('auth/logout') ?>">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <?= $contents ?>
            <ol class="breadcrumb">
            </ol>
          </div>

          <div class="row mb-3">
            
            
        <!---Container Fluid-->
      </div>
    
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="<?= base_url('assets/ruang-admin/') ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/ruang-admin/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('assets/ruang-admin/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?= base_url('assets/ruang-admin/') ?>js/ruang-admin.min.js"></script>
  <script src="<?= base_url('assets/ruang-admin/') ?>vendor/chart.js/Chart.min.js"></script>
  <script src="<?= base_url('assets/ruang-admin/') ?>js/demo/chart-area-demo.js"></script>
  <script>
    $('#ngilang').delay('fast').slideDown('fast').delay(1000).slideUp(1000);
  </script>  
  <script>
  tinymce.init({
    selector: 'textarea',
    plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
    mergetags_list: [
      { value: 'First.Name', title: 'First Name' },
      { value: 'Email', title: 'Email' },
    ],
    ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
  });
</script>
</body>

</html>