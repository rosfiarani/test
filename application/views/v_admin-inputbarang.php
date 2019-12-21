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
          <li class="active">
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
                <h3 class="card-title">Input Barang</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <!-- <form role="form"> -->
                <div style="color:red">
                    <?php echo validation_errors(); ?>
                    <?php if(isset($error)){print $error;}?>
                </div>
                <div class="card-body">
                  <?= form_open_multipart('admin_barang/inputBarang'); ?>

                  <div class="form-group">
                    <label for="Inputnama">Nama</label>
                    <input type="text" class="form-control" id="Inputnama" placeholder="Enter nama" name="Inputnama" value="<?= set_value('Inputnama');?>">
                  </div>
                  <div class="form-group">
                    <label for="Inputwarna">Warna</label>
                    <input type="text" class="form-control" id="Inputwarna" placeholder="Enter Warna" name="Inputwarna" value="<?= set_value('Inputwarna');?>">
                  </div>
                  <div class="form-group">
                    <label for="Inputbahan">Bahan</label>
                    <input type="text" class="form-control" id="Inputbahan" placeholder="Enter bahan" name="Inputbahan" value="<?= set_value('Inputbahan');?>">
                  </div>
                  <div class="form-group">
                    <label for="Inputharga">Harga</label>
                    <input type="text" class="form-control" id="Inputharga" placeholder="Enter harga" name="Inputharga" value="<?= set_value('Inputharga');?>">
                  </div>
                  <div class="form-group">
                    <label for="Inputukuran">Ukuran</label>
                    <input type="number"  min="36" max="43"class="form-control" id="Inputukuran" placeholder="Enter ukuran" name="Inputukuran" value="<?= set_value('Inputukuran');?>">
                  </div>
                  <div class="form-group">
                    <label for="Inputstok">Stock</label>
                    <input type="number"  class="form-control" id="Inputstok" placeholder="Enter Stock" name="Inputstok" value="<?= set_value('Inputstok');?>">
                  </div>
                  <div class="form-group">
                    <label for="Inputberat">Berat</label>
                    <input type="number"  class="form-control" id="Inputberat" placeholder="Enter Berat" name="Inputberat" value="<?= set_value('Inputberat');?>">
                  </div>
                  <div class="form-group">
                    <label for="Inputkategori">Kategori</label>
                    <input type="text"  class="form-control" id="Inputkategori" placeholder="Enter kategori" name="Inputkategori" value="<?= set_value('Inputkategori');?>">
                  </div>
                  <div class="form-group">
                    <label for="Inputdesc">Deskripsi</label>
                    <textarea class="form-control" id="Inputdesc" placeholder="Enter Stock" name="Inputdesc"  > <?=set_value('Inputdesc');?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="InputFile1">Gambar Produk 1</label>
                    <input type="file" class="form-control" id="InputFile1" name="InputFile1">
                  </div>
                  <div class="form-group">
                    <label for="InputFile2">Gambar Produk 2</label>
                    <input type="file" class="form-control" id="InputFile2" name="InputFile2">
                  </div>
                  <div class="form-group">
                    <label for="InputFile3">Gambar Produk 3</label>
                        <input type="file" class="form-control" id="InputFile3" name="InputFile3">
                  </div>
                
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <?= form_close(); ?>
              <!-- </form> -->
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
