<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<title>jadigampang.id</title>
	<meta name='robots' content='noindex, follow, max-image-preview:large' />

	<link rel='stylesheet' href='<?php echo $root ?>/assets/css/style.css?ver=1.0.0' media='all' />
	<link rel='stylesheet' href='<?php echo $root ?>/assets/css/main.css?ver=1.0.0' media='all' />

	<script src='<?php echo $root ?>/assets/vendor/jquery/jquery.min.js?ver=3.6.0' id='jquery-core-js'></script>
	<link rel="icon" href="https://jadigampang.id/wp-content/uploads/2022/06/cropped-favicon-32x32.png" sizes="32x32" />

</head>

<body class="homepage">
<div id="page" class="hfeed site font-primary" style="background-color: #F5F5F5">
	
	<div class="bg-primary text-white text-xs px-10 py-2.5">
 		<div class="w-full">
 			<nav id="site-navigation" class="main-navigation">
				<div class="flex justify-end text-right">
					<ul class="flex justify-between" aria-expanded="false">
						<li class="pl-8"><a href="#">Tentang Kami</a></li>
						<li class="pl-8"><a href="#">Bantuan</a></li>
						<li class="pl-8 flex items-center">
							<img class="svg fill-current text-white mr-2" src="<?php echo $root ?>/assets/image/icon/earth.svg">
							<a href="#">Bahasa Indonesia</a>
						</li>
					</ul>
				</div>			
			</nav><!-- #site-navigation -->
 		</div>
 	</div>

 	<!-- =============================================================================== -->
 	<header class="bg-white jg-site-header px-10 py-3 z-50 relative shadow-jgseller">
    <!-- function line 182 -->
    <section class="block md:flex justify-between">
      <!-- Logo  -->
      <div class="flex-none flex py-2">
        <a href="<?php echo $root ?>/page/dashboard-seller/">
          <img src="<?php echo $root ?>/assets/image/logo-seller.svg" class="seller-logo" alt="seller-logo">
        </a>
      </div>
      <!-- Chart, Right button -->
      <div class="w-full md:block">
        <div class="flex w-full justify-end relative text-gray90">
          <div class="flex items-center pr-5">
          	<a class="flex flex-col relative items-center" href="">
              <img class="svg fill-current text-primary mb-1" src="<?php echo $root ?>/assets/image/icon/home.svg">
              <span class="text-xs w-16 text-center">Home</span>
            </a>
            <a href="<?php echo $root ?>/page/cart.php" class="flex flex-col relative items-center" title="View your shopping cart">
              <img class="svg fill-current text-primary mb-1" src="<?php echo $root ?>/assets/image/icon/user.svg">
              <span class="text-xs w-16 text-center">Admin</span>
            </a>
            <span class="button-dropdown header-dropdown cursor-pointer">
              <div class="dropdown-toggle flex flex-col items-center">
              	<img class="svg fill-current text-primary mb-1" src="<?php echo $root ?>/assets/image/icon/mail.svg">
              	<span class="text-xs w-16 text-center">Pesan</span>
              </div>
            </span>
          	<span class="button-dropdown header-dropdown cursor-pointer">
          		<div class="dropdown-toggle flex flex-col items-center">
              	<img class="svg fill-current text-primary mb-1" src="<?php echo $root ?>/assets/image/icon/bell.svg">
              	<span class="text-xs w-16 text-center">Notifikasi</span>
              </div>
						</span>
          </div>
          <div class="flex flex-none py-2 items-center justify-end text-xs text-gray90 relative">
           	<div class="button-dropdown header-dropdown">
           		<button class="dropdown-toggle flex items-center">
           			<img class="mr-1 w-6 h-6" src="<?php echo $root ?>/assets/image/static/store.png">
           			<span>Nama Toko</span>
           		</button>
           		<!-- Akun Dropdown -->
	            <ul class="dropdown-menu w-max border absolute hidden bg-white rounded mt-1 p-5 z-30 text-xs text-gray90" style="top: 35px; right: 0;">
	              <li class="flex pb-3">
	              	<img class="flex-none mr-2 w-8 h-8" src="<?php echo $root ?>/assets/image/static/store2.png">
	              	<div class="grow mr-5">
	              		<h4 class="font-bold">Nama Toko 1</h4>
	              		<a class="text-primary" href="<?php echo $root ?>/page/store.php?mode=seller">Lihat akun saya</a>
	              	</div>
	            	</li>
	            	<li class="flex pb-3 border-b">
	              	<img class="flex-none mr-2 w-8 h-8" src="<?php echo $root ?>/assets/image/static/store.png">
	              	<div class="grow mr-5">
	              		<h4 class="font-bold">Nama Toko 2</h4>
	              		<a class="text-primary" href="<?php echo $root ?>/page/store.php?mode=seller">Lihat akun saya</a>
	              	</div>
	            	</li>
	            	<li class="py-3">
	            		<a href="<?php echo $root ?>/page/store.php?mode=seller" class="hover:text-primary">Kelola Toko Saya</a>
	            	</li>
	            	<li class="pb-3">
	            		<a class="hover:text-primary">Tambah Toko</a>
	            	</li>
	            	<li>
	            		<button class="py-1 text-white bg-primary text-xs rounded-md font-normal w-full">
	  								Pusat Edukasi Seller
		 							</button>
	            	</li>
	            </ul>
           	</div>
          </div>
        </div>
      </div>
    </section>
	</header>
 	<!-- =============================================================================== -->

	<div id="content" class="site-content relative" tabindex="-1">
		<div  class="js-category-backdrop hidden bg-black w-full h-screen absolute z-40 opacity-50" data-origin=""></div>
		<div class="">