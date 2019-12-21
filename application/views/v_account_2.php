<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Profile</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
  <link href="<?php echo base_url();?>css/style.css" rel="stylesheet" media="all">
 <link href="<?php echo base_url();?>css/util.css" rel="stylesheet" media="all">
  <link href="<?php echo base_url();?>vendor/select2/select2.min.css" rel="stylesheet" media="all">
  <link href="<?php echo base_url();?>vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
  <link href="<?php echo base_url();?>vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
  <link href="<?php echo base_url();?>vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
</head>
<body>
   <!-- Header -->
  <header class="header1">
    <!-- Header desktop -->
    <div class="container-menu-header">
      <div class="wrap_header">
        <!-- Logo -->
        <div>
          <a href="index.html" class="logo">
            <img src="<?php echo base_url();?>assets/icons/logo2.png" alt="IMG-LOGO">
            <span>Xhoes</span>
          </a>
        </div>
        <!-- Menu -->
        <div class="wrap_menu">
          <nav class="menu">
            <ul class="main_menu">
              <li><a href="<?php echo site_url('homepage'); ?>">Home</a></li>
              <li><a href="<?php echo site_url('product'); ?>">Shops</a></li>
              <li><a href="<?php echo site_url('about_us'); ?>">About</a></li>
              <li><a href="<?php echo site_url('contact'); ?>">Contact</a></li>
              <li><a href="#"><?php echo $this->session->userdata('alamat'); ?></a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <?php $d = $this->session->all_data;?>
  <?php var_dump($d) ?>
  <!-- <?php echo element('namaPembeli', $d);?> -->
  <div class="container p-t-40">
    <div class="row">
      <div class="col-3">
        <div class="list-group" id="list-tab" role="tablist">
          <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile" aria-selected="false">Detail Account</a>
          <a class="list-group-item list-group-item-action" id="list-order-list" data-toggle="list" href="#list-order" role="tab" aria-controls="order" aria-selected="false">List Order</a>
          <a class="list-group-item list-group-item-action active show" id="list-payment-list" data-toggle="list" href="#list-payment" role="tab" aria-controls="messages" aria-selected="true">Payment Confirmation</a>
          <a class="list-group-item list-group-item-action" id="list-logout-list" href="<?php echo site_url('account/logout'); ?>"  aria-controls="messages" aria-selected="true">Log Out</a>
        </div>
      </div>
      <div class="col-9">
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                    <form action="<?php echo site_url('account/editAkun'); ?>" method="post" class="p-b-10 p-l-10 p-r-10 p-t-10 m-b-20 bo9">
                    <h2 class="title">Profile</h2>
                        <div class="form-group row">
                          <label for="inputnama" class="col-sm-2 col-form-label">Name</label>
                          <div class="col-sm-10">
                            <input type="nama" class="form-control" name ="nama" id="inputnama" placeholder="<?php echo $d['0']->namaPembeli ?>">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                          <div class="col-sm-10">
                            <input type="Email" class="form-control" name ="email" id="inputEmail" placeholder="<?php echo $d['0']->email ?>">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputphone" class="col-sm-2 col-form-label">Phone Number</label>
                          <div class="col-sm-10">
                            <input type="Phone" class="form-control" name ="no_telp" id="inputphone" placeholder="<?php echo $d['0']->noTelp ?>">
                          </div>
                        </div>
                        <div class="form- row">
                          <label for="inputaddress"  class="col-sm-2 col-form-label">Address</label>
                          <div class="col-sm-10">
                          <textarea type="textarea" class="form-control" name ="alamat" id="inputaddress" rows="3"placeholder="<?php echo $d['0']->alamat ?>"></textarea>
                        </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary bg1 hov1 trans-0-4">Save</button>
                          </div>
                        </div>
                      </form>
                      
                      <form action="<?php echo site_url('account/editPassword'); ?>" method="post" class="p-b-10 p-l-10 p-r-10 p-t-10 m-b-20 bo9">
                        <h2 class="title">Change Password</h2>
                        <div class="form-group">
                          <div class="row">
                          <label for="Inputcurrent" class="col-sm-3 col-form-label">Current Password</label>
                           <div class="col-sm-7">
                          <input type="password" name="currpassword" class="form-control" id="Inputcurrent" placeholder="Current Password">
                        </div>
                          <!-- <small id="currentHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                          <label for="Inputnew" class="col-sm-3 col-form-label">New Password</label>
                           <div class="col-sm-9">
                          <input type="password" name="newpassword" class="form-control" id="Inputnew" placeholder="New Password">
                        </div>
                          </div>
                          <small id="currentHelp" class="form-text text-muted">Must be 8-20 characters long.</small>
                        </div>
                        <div class="form-group">
                          <div class="row">
                          <label for="Inputconfirm" class="col-sm-3 col-form-label">Confirm Password</label>
                           <div class="col-sm-9">
                          <input type="password" name="confirmpassword" class="form-control" id="Inputconfirm" placeholder="Confirm Password">
                        </div>
                        </div>
                          <small id="currentHelp" class="form-text text-muted">Must be 8-20 characters long.</small>
                        </div>
                        <!-- <div class="form-group form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div> -->
                        <button type="submit" class="btn btn-primary bg1 hov1 trans-0-4">Submit</button>
                      </form>
          </div>
          <div class="tab-pane" id="list-order" role="tabpanel" aria-labelledby="list-order-list">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Date</th>
                  <th scope="col">Payment Code</th>
                  <th scope="col">Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>05 May 2020</td>
                  <td>TP12340999000</td>
                  <td>Not Payed</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>02 January 2020</td>
                  <td>TP12220888880</td>
                  <td>Payed</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>11 November 2019</td>
                  <td>TP11110777770</td>
                  <td>Payed</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="tab-pane active show" id="list-payment" role="tabpanel" aria-labelledby="list-payment-list">
            <h3 class="title m-b-20">Payment Confirmation</h3>
              <form method="post" action="<?php echo site_url('account/pembayaran');?>">
                <div class="form-group row">
                  <label for="paymentcode" class="col-sm-3 col-form-label">Payment Code</label>
                  <div class="col-sm-9">
                  <?php $code = 'TP674830'.$cartdata[0]->idCart ?>
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" name="idTransaksi" value="<?php echo $code?>">
                </div>
                </div>
                <div class="form-group row">
                  <label for="staticprice" class="col-sm-3 col-form-label">Price</label>
                  <div class="col-sm-9">
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="$<?php echo $cartdata[0]->totalBayar ?>">
                  </div>
                </div>
                <div class="form-group row">
                <label for="example-date-input" class="col-3 col-form-label">Payment Date</label>
                <div class="col-sm-9">
                  <input class="form-control" type="date" value="today();" name="tanggalPembayaran" id="datepayment">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="staticmethod" class="col-sm-3 col-form-label">Payment Method</label>
                  <div class="col-sm-9">
                    <input type="text" readonly class="form-control-plaintext" id="staticmethod" value="ATM">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="staticpayment" class="col-sm-3 col-form-label">Bank Account</label>
                  <div class="col-sm-9">
                    <input type="text" readonly class="form-control-plaintext" id="staticpayment" value="Bank Tabungan Nuaing a/n XHOES">
                  </div>
                </div>
                <div class="input-group-icon">
                    <input class="input--style-4 js-datepicker" type="text" name="birthday">
                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
              </form>
                  <!-- <div class="file-field">
                    <div class="btn btn-primary btn-sm float-left">
                      <span>Choose file</span>
                      <input type="file">
                    </div>
                    <div class="file-path-wrapper">
                      <input type="text" class="file-path validate" placeholder="Upload your file">
                    </div>
                  </div> -->
          </div>
        </div>
      </div>
    </div>
    </div>

    <footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
    <div class="flex-w p-b-90">
      <div class="image-footer w-size6 t-center">
        <img src="assets/icons/logo2.png">
      </div>
      <div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
        <h4 class="s-text12 p-b-30">
          GET IN TOUCH
        </h4>

        <div>
          <p class="s-text7 w-size27">
            Any questions? Let us know in store at Telkom University or call us on 08131313131313
          </p>

          <div class="flex-col p-t-30">
            <a href="#" class="fs-18 color1 p-r-20 p-b-10 fa fa-facebook"> 
            <span class=" s-text20">
              xhoes official
            </span></a>
            <a href="#" class="fs-18 color1 p-r-20 p-b-10 fa fa-instagram"><span class=" s-text20">
              xhoes.official
            </span></a>
            <a href="#" class="fs-18 color1 p-r-20 p-b-10 fa fa-twitter"><span class=" s-text20">
              xhoes.official
            </span></a>
          </div>
        </div>
      </div>
      </div>
    </div>
  </footer>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>vendor/datepicker/moment.min.js"></script>
  <script src="<?php echo base_url();?>vendor/datepicker/daterangepicker.js"></script>
  <script src="<?php echo base_url();?>js/global.js"></script>
  <script src="<?php echo base_url();?>vendor/jquery/jquery.min.js"></script>


</body>
</html>