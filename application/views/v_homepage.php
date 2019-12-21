<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/homepage.css">
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
				<div class="header-icons">
					<a href="<?php echo site_url('account'); ?>" class="header-wrapicon1 dis-block">
						<img src="<?php echo base_url();?>assets/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a>

					<span class="linedivide1"></span>

					<div class="header-wrapicon2">
						<img src="<?php echo base_url();?>assets/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti"><?php echo count($productdata) ?></span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
								<?php if ($view == True): ?>
									<?php foreach ($productdata as $d ) { ?>
										<li class="header-cart-item">
											<div class="header-cart-item-img">
												<img src="<?php echo base_url();?><?php echo $d->gambar1?>" alt="IMG">
											</div>
											<div class="header-cart-item-txt">
												<a href="#" class="header-cart-item-name">
													<?php echo $d->namaBarang?>
												</a>
												<span class="header-cart-item-info">
													<?php echo $d->jumlah?>
												</span>
											</div>
										</li>
									<?php } ?>
								<?php endif; ?>
							</ul>
							<div class="header-cart-total">
								<?php if ($view == True): ?>
									<?php echo $d->totalBayar?>
								<?php endif; ?>
							</div>
							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="<?php echo site_url('cart'); ?>" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										View Cart
									</a>
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="<?php echo site_url('account'); ?>" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Check Out
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="index.html" class="logo-mobile">
				<img src="<?php echo base_url();?>assets/icons/logo2.png" alt="IMG-LOGO"> Xhoes
			</a>
			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">
					<a href="#" class="header-wrapicon1 dis-block">
						<img src="<?php echo base_url();?>assets/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a>

					<span class="linedivide2"></span>

					<div class="header-wrapicon2">
						<img src="<?php echo base_url();?>assets/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti">0</span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="<?php echo base_url();?>images/item-cart-01.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											White Shirt With Pleat Detail Back
										</a>

										<span class="header-cart-item-info">
											1 x $19.00
										</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="<?php echo base_url();?>images/item-cart-02.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											Converse All Star Hi Black Canvas
										</a>

										<span class="header-cart-item-info">
											1 x $39.00
										</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="<?php echo base_url();?>images/item-cart-03.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											Nixon Porter Leather Watch In Tan
										</a>

										<span class="header-cart-item-info">
											1 x $17.00
										</span>
									</div>
								</li>
							</ul>

							<div class="header-cart-total">
								Total: $75.00
							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										View Cart
									</a>
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Check Out
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>

		<!-- Menu Mobile -->
		<div class="wrap-side-menu" >
			<nav class="side-menu">
				<ul class="main-menu">
					<li class="item-menu-mobile">
						<a href="">Home</a>
					</li>
					<li class="item-menu-mobile">
						<a href="">Shops</a>
					</li>
					<li class="item-menu-mobile">
						<a href="">About</a>
					</li>
					<li class="item-menu-mobile">
						<a href="">Contact</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>

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
	</script>
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
	<script src="<?php echo base_url();?>js/main.js"></script>

<!-- HEADERRRRRRRRRRRRRRRRRRRRRR -->

	<div class="banner p-t-40">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-md-8 col-lg-3 m-l-r-auto">
					<div class="catblock">
					<div class="catblock-img">
						<img src="<?php echo base_url();?>assets/flatshoes.jpg" alt="IMG-BENNER">
						<div class="overlay">
						<a href="<?php echo base_url();?>product/filter/flat" class="overlay-content">
								View Flat Shoes
							</a>
						</div>
						</div>
						<div class="catblock-content">
							<a href="<?php echo base_url();?>product/filter/flat" class="flex-c-m size2 m-text2">
								Flat Shoes
							</a>
					</div>
				</div>
				</div>
				<div class="col-sm-10 col-md-8 col-lg-3 m-l-r-auto">
					<div class="catblock">
					<div class="catblock-img">
						<img src="<?php echo base_url();?>assets/sneakers.jpg" alt="IMG-BENNER">
						<div class="overlay">
						<a href="<?php echo base_url();?>product/filter/sneakers" class="overlay-content">
								View Sneakers
							</a>
						</div>
						</div>
						<div class="catblock-content">
							<a href="<?php echo base_url();?>product/filter/sneakers" class="flex-c-m size2 m-text2">
								Sneakers
							</a>
					</div>
				</div>
				</div>
				<div class=" col-sm-10 col-md-8 col-lg-3 m-l-r-auto">
					<div class="catblock">
					<div class="catblock-img">
						<img src="<?php echo base_url();?>assets/heels.jpg" alt="IMG-BENNER">
						<div class="overlay">
						<a href="<?php echo base_url();?>product/filter/heels" class="overlay-content">
								View Heels
							</a>
						</div>
						</div>
						<div class="catblock-content">
							<a href="<?php echo base_url();?>product/filter/heels" class="flex-c-m size2 m-text2">
								Heels
							</a>
						</div>
					</div>
				</div>
				<div class=" col-sm-10 col-md-8 col-lg-3 m-l-r-auto">
					<div class="catblock">
					<div class="catblock-img">
						<img src="<?php echo base_url();?>assets/sandals.jpg" alt="IMG-BENNER">
						<div class="overlay">
						<a href="<?php echo base_url();?>product/filter/sandals" class="overlay-content">
								View Sandals
							</a>
						</div>
						</div>
						<div class="catblock-content">
							<a href="<?php echo base_url();?>product/filter/sandals" class="flex-c-m size2 m-text2">
								Sandals
							</a>
						</div>
					</div>
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

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>

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
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url();?>vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url();?>vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url();?>vendor/lightbox2/js/lightbox.min.js"></script>
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
	<script src="<?php echo base_url();?>js/main.js"></script>

</body>
</html>
