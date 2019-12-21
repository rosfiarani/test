<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?php echo base_url();?>images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>vendor/noui/nouislider.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css">
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
	<!-- Content page -->
	<section class="bgwhite p-t-55 p-b-65">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
					<div class="leftbar p-r-20 p-r-0-sm">
						<!--  -->
						<h4 class="m-text14 p-b-7">
							Categories
						</h4>

						<ul class="p-b-54">
							<li class="p-t-4">
								<?php if ($all == True): ?>
									<a href="<?php echo base_url();?>product/index" class="s-text13 active1">
										All
									</a>
								<?php else:?>
									<a href="<?php echo base_url();?>product/index" class="s-text13">
										All
									</a>
								<?php endif; ?>
							</li>

							<li class="p-t-4">
								<?php if ($productdata[0]->kategori == 'sneakers' && $all == False): ?>
									<a href="<?php echo base_url();?>product/filter/sneakers" class="s-text13 active1">
										Sneakers
									</a>
								<?php else:?>
									<a href="<?php echo base_url();?>product/filter/sneakers" class="s-text13">
										Sneakers
									</a>
								<?php endif; ?>
							</li>

							<li class="p-t-4">
								<?php if ($productdata[0]->kategori == 'heels' && $all == False): ?>
									<a href="<?php echo base_url();?>product/filter/heels" class="s-text13 active1">
										Heels
									</a>
								<?php else:?>
									<a href="<?php echo base_url();?>product/filter/heels" class="s-text13">
										Heels
									</a>
								<?php endif; ?>
							</li>

							<li class="p-t-4">
								<?php if ($productdata[0]->kategori == 'flat' && $all == False): ?>
									<a href="<?php echo base_url();?>product/filter/flat" class="s-text13 active1">
										Flat
									</a>
								<?php else:?>
									<a href="<?php echo base_url();?>product/filter/flat" class="s-text13">
										Flat
									</a>
								<?php endif; ?>
							</li>

							<li class="p-t-4">
								<?php if ($productdata[0]->kategori == 'sandals' && $all == False): ?>
									<a href="<?php echo base_url();?>product/filter/sandals" class="s-text13 active1">
										Sandals
									</a>
								<?php else:?>
									<a href="<?php echo base_url();?>product/filter/sandals" class="s-text13">
										Sandals
									</a>
								<?php endif; ?>
							</li>
						</ul>

						<!--  -->
						<h4 class="m-text14 p-b-32">
							Filters
						</h4>

						<div class="filter-price p-t-22 p-b-50 bo3">
							<div class="m-text15 p-b-17">
								Price
							</div>

							<div class="wra-filter-bar">
								<div id="filter-bar"></div>
							</div>

							<div class="flex-sb-m flex-w p-t-16">
								<div class="w-size11">
									<!-- Button -->
									<button class="flex-c-m size4 bg7 bo-rad-15 hov1 s-text14 trans-0-4">
										Filter
									</button>
								</div>

								<div class="s-text3 p-t-10 p-b-10">
									Range: Rp.<span id="value-lower">610</span> - Rp.<span id="value-upper">980</span>
								</div>
							</div>
						</div>
						<div class="search-product pos-relative bo4 of-hidden">
							<input class="s-text7 size6 p-l-23 p-r-50" type="text" name="search-product" placeholder="Search Products...">

							<button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
								<i class="fs-12 fa fa-search" aria-hidden="true"></i>
							</button>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
					<!--  -->
					<div class="flex-sb-m flex-w p-b-35">
						<div class="flex-w">
							<div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
								<select class="selection-2" name="sorting">
									<option>Default Sorting</option>
									<option>Popularity</option>
									<option>Price: low to high</option>
									<option>Price: high to low</option>
								</select>
							</div>

							<div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
								<select class="selection-2" name="sorting">
									<option>Price</option>
									<option>Rp.0.00 - Rp.50.000</option>
									<option>Rp.50.000 - Rp.100.000</option>
									<option>Rp.100.000 - Rp.150.000</option>
									<option>Rp.150.000 - Rp.200.000</option>
									<option>Rp.200.000+</option>

								</select>
							</div>
						</div>

						<span class="s-text8 p-t-5 p-b-5">
							Showing 1–12 of 16 results
						</span>
					</div>

					<!-- Product -->
					<div class="row">
						<?php
				         foreach ($productdata as $d ) { ?>
				          <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
							<!-- Block2 -->
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
									<img src="<?php echo base_url();?><?php echo $d->gambar1?>" alt="IMG-PRODUCT">
									<div class="block2-overlay trans-0-4">
										<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
											<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
											<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
										</a>

										<div class="block2-btn-addcart w-size1 trans-0-4">
											<!-- Button -->
											<a href="<?php echo base_url();?>product/add_to_cart_just_1?idBarang=<?php echo $d->idBarang ?>" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
												Add to Cart
											</a>
										</div>
									</div>
								</div>

								<div class="block2-txt p-t-20">
									<a href="<?php echo base_url();?>product_detail/index?idBarang=<?php echo $d->idBarang ?>" class="block2-name dis-block s-text3 p-b-5">
										<?php echo $d->namaBarang?>
									</a>
									<span class="block2-price m-text6 p-r-5">
										Rp.<?php echo $d->harga?>
									</span>
								</div>
							</div>
						</div>
						<?php } ?>
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
	<script type="text/javascript" src="<?php echo base_url();?>vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url();?>vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url();?>vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url();?>vendor/select2/select2.min.js"></script>
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
	<script type="text/javascript" src="<?php echo base_url();?>vendor/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url();?>vendor/sweetalert/sweetalert.min.js"></script>
	<script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>

<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url();?>vendor/noui/nouislider.min.js"></script>
	<script type="text/javascript">
		/*[ No ui ]
	    ===========================================================*/
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 50, 200 ],
	        connect: true,
	        range: {
	            'min': 50,
	            'max': 200
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]) ;
	    });
	</script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>js/main.js"></script>

</body>
</html>
