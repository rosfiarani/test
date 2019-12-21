<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    XHOES ADMIN
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="<?php echo base_url();?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>css/paper-dashboard.css" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo base_url();?>css/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="<?php echo base_url();?>assets/img/logo-small.png">
          </div>
        </a>
        <a href="" class="simple-text logo-normal">
          Admin
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="">
            <a href="<?php echo site_url('admin'); ?>">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="">
            <a href="<?php echo site_url('admin_pesanan'); ?>">
              <i class="nc-icon nc-tile-56"></i>
              <p>Pemesanan</p>
            </a>
          </li>
          <li class="">
            <a href="<?php echo site_url('admin/inputBarang'); ?>">
              <i class="fa fa-plus-circle"></i>
              <p>Input Barang</p>
            </a>
          </li>
           <li class="">
            <a href="<?php echo site_url('admin_barang'); ?>">
              <i class="fa fa-folder-o"></i>
              <p>List Barang</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Admin Page</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">List Barang</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body row">
                  <div class="col-2">
                  </div>
                  <div class="col-8">
                    <div class="row">
                      <div class="col-3">ID</div>
                      <div class="col-1">:</div>
                      <div class="col-4"><?php echo $data['0']->idBarang; ?></div>
                    </div>
                    <div class="row">
                      <div class="col-3">Nama</div>
                      <div class="col-1">:</div>
                      <div class="col-4"><?php echo $data['0']->namaBarang; ?></div>
                    </div>
                    <div class="row">
                      <div class="col-3">Warna</div>
                      <div class="col-1"> : </div>
                      <div class="col-4"><?php echo $data['0']->warna; ?></div>
                    </div>
                    <div class="row">
                      <div class="col-3">Harga</div>
                      <div class="col-1"> : </div>
                      <div class="col-4"><?php echo $data['0']->harga; ?> </div>
                    </div>
                    <div class="row">
                      <div class="col-3">Bahan</div>
                      <div class="col-1"> : </div>
                      <div class="col-4"><?php echo $data['0']->bahan; ?></div>
                    </div>
                    <div class="row">
                      <div class="col-3">Stok</div>
                      <div class="col-1">:</div>
                      <div class="col-4"><?php echo $data['0']->stok; ?></div>
                    </div>
                    <div class="row">
                      <div class="col-4"><img src="<?php echo base_url();?><?php echo $data['0']->gambar1;?>" alt="no image"></div>
                      <div class="col-4"><img src="<?php echo base_url();?><?php echo $data['0']->gambar2;?>" alt="no image"></div>
                      <div class="col-4"><img src="<?php echo base_url();?><?php echo $data['0']->gambar3;?>" alt="no image"></div>
                    </div>
                  </div>
                
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- Form Element sizes -->
            
    </section>

  </div>
   <!--   Core JS Files   -->
  <script src="<?php echo base_url();?>js/core/jquery.min.js"></script>
  <script src="<?php echo base_url();?>js/core/popper.min.js"></script>
  <script src="<?php echo base_url();?>js/core/bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="<?php echo base_url();?>js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo base_url();?>js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?php echo base_url();?>js/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
</body>

</html>
