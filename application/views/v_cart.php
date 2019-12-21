<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cart</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
<!--===============================================================================================-->
</head>
<body class="animsition">
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
	<!-- Title Page -->
	<section class="bg-title-page p-t-10 p-b-10 flex-col-c-m">
		<h2 class="l-text2 t-center">
			Cart
		</h2>
	</section>

	<!-- Cart -->
	<section class="cart bgwhite p-t-70 p-b-100 ">
		<div class="container flex-w flex-sb">
			<!-- Cart item -->
			<div class="cart-items w-size20 respon5 bo9">
				<h5 class="m-text20 p-b-24 p-t-10 t-center">
					Cart Items
				</h5>

			<div class="container-table-cart pos-relative">
				<div class="wrap-table-shopping-cart bgwhite">
					<table class="table-shopping-cart">
						<tr class="table-head">
							<th class="column-1"></th>
							<th class="column-2">Product</th>
							<th class="column-3">Price</th>
							<th class="column-4 t-center">Quantity</th>
							<th class="column-5">Total</th>
						</tr>

						<?php
						$totalharga = 0;
						$tharga = array();
						for ($x = 0; $x < count($productdata) ; $x++){
							$tharga[$x] = (int)$productdata[$x]->harga;
						}
						// var_dump($tharga);
						for ($x = 0; $x < count($tharga) ; $x++){
							$totalharga = $totalharga + $tharga[$x];
						}
						$test = (int)$productdata[0]->harga;
						var_dump($totalharga);
						foreach ($productdata as $d ) { ?>
						<tr class="table-row">
							<td class="column-1">
								<div class="cart-img-product b-rad-4 o-f-hidden">
									<img src="<?php echo base_url();?><?php echo $d->gambar1?>" alt="IMG-PRODUCT">
								</div>
							</td>
							<td class="column-2"><?php echo $d->namaBarang?></td>
							<td class="column-3">Rp.<?php echo $d->harga?></td>
							<td class="column-4">
								<div class="flex-w  of-hidden w-size17">
									<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
										<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
									</button>

									<input class="size8 m-text18 t-center num-product" type="number" name="num-product1" value="1">

									<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
										<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
									</button>
								</div>	
							</td>
							<td class="column-5">Rp.<?php $total = ($d->harga)*($d->jumlah);echo $total;?></td>
						</tr>
						<?php } ?>
					</table>
				</div>
			</div>

			<div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
				<div class="size10 trans-0-4 m-t-10 m-b-10">
					<!-- Button -->
					<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
						Update Cart
					</button>
				</div>
			</div>
			</div>
			<div class="cart-bayar w-size19 respon5">
			<!-- Total -->
			<div class="bo9 w-size18 p-l-40 p-r-40 p-t-5 p-b-38 m-l-5 p-lr-15-sm">
				<h5 class="m-text20 p-t-5 p-b-24 t-center">
					Cart Totals
				</h5>

				<!--  -->
				<div class="flex-w flex-sb-m p-b-12">
					<span class="s-text18 w-size19 w-full-sm">
						Subtotal:
					</span>

					<span class="m-text21 w-size20 w-full-sm">
						Rp. 15.000
					</span>
				</div>

				<!--  -->
				<div class="flex-w flex-sb bo10 p-t-15 p-b-20">
					<span class="s-text18 w-size19 w-full-sm">
						Shipping:
					</span>

					<div class="w-size20 w-full-sm">
						<p class="s-text8 p-b-23">
							Choose your area
						</p>

						<span class="s-text19">
							Calculate Shipping
						</span>

						<div class="rs2-select2 rs3-select2 rs4-select2 bo4 of-hidden w-size21 m-t-8 m-b-12">
							<select class="selection-2" name="city">
								<option>Select a city </option>
								<option>Jakarta</option>
								<option>Bandung</option>
								<option>Semarang</option>
							</select>
						</div>
						<div class="size13 bo4 m-b-22">
							<input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="address" placeholder=" write your address">
						</div>

						<div class="size14 trans-0-4 m-b-10">
							<!-- Button -->
							<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
								Update Totals
							</button>
						</div>
					</div>
				</div>

				<!--  -->
				<div class="flex-w flex-sb-m p-t-26 p-b-30">
					<span class="m-text22 w-size19 w-full-sm">
						Total:
					</span>

					<span class="m-text21 w-size20 w-full-sm">
						<?php echo $totalharga+15000; ?>
					</span>
				</div>

				<div class="size15 trans-0-4">
					<!-- Button -->
					<a class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" href="<?php echo base_url();?>account/checkout?totHarga=<?php echo $totalharga ?>">
						Proceed to Checkout
					</a>
				</div>
			</div>
			</div>
		</div>
	</section>
	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection -->
	<div id="dropDownSelect1"></div>
	<div id="dropDownSelect2"></div>

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



<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});

		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect2')
		});
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
