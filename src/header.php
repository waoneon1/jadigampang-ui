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
	
	<div class="bg-primary text-white text-xs px-10 pt-4 pb-4">
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
 	<header class="bg-primary jg-site-header px-10 pb-4 z-50 relative">
	  <div class="col-full">
	    <!-- function line 182 -->
	    <section class="block md:flex">
	      <!-- Logo  -->
	      <div class="flex-none flex flex-col justify-start pr-4 pb-4">
	        <a href="<?php echo $root ?>" class="custom-logo-link" rel="home" aria-current="page">
	          <img width="162" height="44" src="<?php echo $root ?>/assets/image/logo.png" class="custom-logo" alt="">
	        </a>
	      </div>
	      <!-- Search -->
	      <div class="grow hidden md:flex items-center pl-5">
	        <div class="block w-full">
	          <form role="search" method="get" class="jg-input-form mb-0 relative text-jgtext" action="">
	            <div class="block md:flex items-center">
	             
	              <div class="button-dropdown header-dropdown w-full md:w-2/12">
	                <input id="jg-product-cat" type="hidden" name="product_cat" value="">
	                <div class="dropdown-toggle px-4 py-2 w-full bg-white shadow-none rounded-l-lg flex cursor-pointer justify-between border">
	                  <span class="js-category-name text-jgtext text-xs mr-1">Kategori</span>
	                  <span class="dashicons dashicons-arrow-down-alt2 text-sm h-4"></span>
	                </div>
	                <!-- Category Dropdown -->
			            <div class="dropdown-menu hidden absolute w-full bg-white rounded mt-1 px-3 py-5">
			              <h4 class="text-sm font-bold px-2 mb-4">Kategori</h4>
			              <div class="w-full grid grid-cols-2 md:grid-cols-4 gap-2 text-xs">
			                <a href="#" class="js-items-category text-jgtext hover:bg-blue-100 py-1 px-2" data-slug="accessories" data-name="Accessories">Accessories</a>
			                <a href="#" class="js-items-category text-jgtext hover:bg-blue-100 py-1 px-2" data-slug="hoodies" data-name="Hoodies">Hoodies</a>
			                <a href="#" class="js-items-category text-jgtext hover:bg-blue-100 py-1 px-2" data-slug="tshirts" data-name="Tshirts">Tshirts</a>
			              </div>
			            </div>
	              </div>

	              <div class="button-dropdown header-dropdown w-full md:w-10/12 flex">
	                <input type="search" class="dropdown-toggle px-4 py-2 leading-normal w-full bg-white shadow-none text-xs" placeholder="I'm looking for" value="" name="s" autocomplete="off">
	                <a href="<?php echo $root ?>/page/search.php" type="submit" value="Search" class="rounded-r-lg py-1 px-4 flex items-center bg-primary border-2 border-white">
	                  <img class="svg fill-current text-white" src="<?php echo $root ?>/assets/image/icon/search.svg">
	                </a>
	                <!-- Search Dropdown -->
			            <div class="dropdown-menu hidden absolute w-full bg-white rounded mt-1 px-3 py-5" style="top: 34px;left: 0px;">
			              <h4 class="text-sm font-bold px-2 mb-4">SEARCH</h4>
			              <div class="w-full grid grid-cols-2 md:grid-cols-4 gap-2 text-xs">
			                <a href="#" class="js-items-search text-jgtext hover:bg-blue-100 py-1 px-2" data-slug="thin-wall" data-name="Thin Wall">Thin Wall</a>
			                <a href="#" class="js-items-search text-jgtext hover:bg-blue-100 py-1 px-2" data-slug="thin-wall2" data-name="Thin Wall 2">Thin Wall 2</a>
			                <a href="#" class="js-items-search text-jgtext hover:bg-blue-100 py-1 px-2" data-slug="thin-wall3" data-name="Thin Wall 3">Thin Wall 3</a>
			                <a href="#" class="js-items-search text-jgtext hover:bg-blue-100 py-1 px-2" data-slug="thin-wall4" data-name="Thin Wall 4">Thin Wall 4</a>
			              </div>
			            </div>
	              </div>
	            </div>

	            <div class="mt-2 pl-2 text-white text-xs">
	              <span class="mr-4">Accessories</span>
	              <span class="mr-4">Hoodies</span>
	              <span class="mr-4">Tshirts</span>
	            </div>
	          </form>
	        </div>
	      </div>
	      <!-- Chart, Right button -->
	      <div class="flex-none pl-8 w-full hidden md:block" style="max-width: 500px;">
	        <div class="flex w-full justify-between relative">
	          <div class="flex grow justify-between items-center pr-6">
            	<a class="flex flex-col relative items-center text-white" href="">
	              <img class="svg fill-current" src="<?php echo $root ?>/assets/image/icon/home.svg">
	              <span class="text-xs mt-1">Home</span>
	            </a>
	            <a href="<?php echo $root ?>/page/cart.php" class="flex flex-col relative items-center text-white" title="View your shopping cart">
                <img class="svg svg fill-current" src="<?php echo $root ?>/assets/image/icon/bell.svg">
                <span class="text-xs mt-1">Notifikasi</span>
              </a>
              <span class="button-dropdown header-dropdown text-white cursor-pointer">
                <div class="dropdown-toggle flex flex-col items-center">
                	<img class="svg fill-current" src="<?php echo $root ?>/assets/image/icon/cart.svg">
                	<span class="text-xs mt-1">Keranjang</span>
                </div>
                <!-- Cart Dropdown -->
		            <ul class="dropdown-menu absolute hidden bg-white rounded mt-1 p-5 z-30 text-sm text-gray90" style="top:40px;left:-30px;">
		              <li class="flex justify-between pb-3 border-b">
		              	<h4 class="font-bold mr-32">Keranjang (10)</h4>
		              	<a class="text-primary" href="<?php echo $root ?>/page/cart.php">Lihat Keranjang</a>
		            	</li>
		            	<li class="flex py-3 border-b">
		            		<img class="w-10 h-10 mr-4 rounded-md" src="<?php echo $root ?>/assets/image/static/product/item1.png">
		            		<div class="">
		            			<h4 class="font-bold mb-1">Plastic cup thinwall 250ml</h4>
		            			<p><span class="text-gray70">250ml</span> • Rp200</p>
		            		</div>
		            	</li>
		            	<li class="flex py-3 border-b">
		            		<img class="w-10 h-10 mr-4 rounded-md" src="<?php echo $root ?>/assets/image/static/product/item2.png">
		            		<div class="">
		            			<h4 class="font-bold mb-1">Paper cup 200ml</h4>
		            			<p><span class="text-gray70">250ml</span> • Rp200</p>
		            		</div>
		            	</li>
		            	<li class="flex py-3 border-b">
		            		<img class="w-10 h-10 mr-4 rounded-md" src="<?php echo $root ?>/assets/image/static/product/item3.png">
		            		<div class="">
		            			<h4 class="font-bold mb-1">Paper cup 200ml</h4>
		            			<p><span class="text-gray70">250ml</span> • Rp200</p>
		            		</div>
		            	</li>
		            	<li class="flex pt-3">
		            		<img class="w-10 h-10 mr-4 rounded-md" src="<?php echo $root ?>/assets/image/static/product/item4.png">
		            		<div class="">
		            			<h4 class="font-bold mb-1">Plastic cup thinwall 250ml</h4>
		            			<p><span class="text-gray70">250ml</span> • Rp200</p>
		            		</div>
		            	</li>
		            </ul>
              </span>
            	<span class="button-dropdown header-dropdown text-white cursor-pointer">
            		<div class="dropdown-toggle flex flex-col items-center">
	              	<img class="svg" src="<?php echo $root ?>/assets/image/icon/more-app.svg">
	              	<span class="text-xs mt-1">Lainnya</span>
	              </div>
	              <div class="dropdown-menu absolute hidden bg-white rounded mt-1 p-5 z-30 text-sm text-gray90" style="top:40px;right:120px;">
		              <div class="grid grid-cols-3 gap-2 text-xs text-gray70">
		              	<a class="flex flex-col relative hover:text-primary items-center mb-3" href="">
				              <img class="svg" src="<?php echo $root ?>/assets/image/icon/other/cart.svg">
				              <span class="text-center mt-1">Quotation <br/>Market</span>
				            </a>
				            <a class="flex flex-col relative hover:text-primary items-center mb-3" href="<?php echo $root ?>/page/self-design.php">
				              <img class="svg" src="<?php echo $root ?>/assets/image/icon/other/design.svg">
				              <span class="text-center mt-1">Self <br/>Design</span>
				            </a>
				            <a class="flex flex-col relative hover:text-primary items-center mb-3" href="">
				              <img class="svg" src="<?php echo $root ?>/assets/image/icon/other/compare.svg">
				              <span class="text-center mt-1">Komparasi</span>
				            </a>
				            <a class="flex flex-col relative hover:text-primary items-center" href="<?php echo $root ?>/page/inspiration.php">
				              <img class="svg" src="<?php echo $root ?>/assets/image/icon/other/inspire.svg">
				              <span class="text-center mt-1">Inspirasi <br/>Usaha</span>
				            </a>
				            <a class="flex flex-col relative hover:text-primary items-center" href="">
				              <img class="svg" src="<?php echo $root ?>/assets/image/icon/other/promo.svg">
				              <span class="text-center mt-1">Promo <br/>JG</span>
				            </a>
				            <a class="flex flex-col relative hover:text-primary items-center" href="">
				              <img class="svg" src="<?php echo $root ?>/assets/image/icon/other/seller.svg">
				              <span class="text-center mt-1">Seller <br/>Center</span>
				            </a>
		              </div>
		            </div>
							</span>
	          </div>
	          <div class="flex flex-none items-center justify-end text-xs text-white relative">
	           	<div class="button-dropdown header-dropdown mr-5">
	           		<button class="dropdown-toggle flex items-center">
	           			<img class="mr-1 w-6 h-6" src="<?php echo $root ?>/assets/image/static/store.png">
	           			<span>Nama Toko</span>
	           		</button>
	           		<!-- Akun Dropdown -->
		            <ul class="dropdown-menu absolute hidden bg-white rounded mt-1 p-5 z-30 text-xs text-gray90" style="top: 35px; left: -40px;">
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
	            <div class="button-dropdown header-dropdown">
	           		<button class="dropdown-toggle flex items-center">
	           			<img class="mr-1 w-6 h-6" src="<?php echo $root ?>/assets/image/static/photo.png">
	           			<span>Nama Akun</span>
	           		</button>
	           		<!-- Akun Dropdown -->
		            <ul class="dropdown-menu absolute hidden bg-white rounded mt-1 p-5 z-30 text-xs text-gray90" style="top: 35px; right: 0px;">
		              <li class="flex pb-3 border-b">
		              	<img class="flex-none mr-2 w-8 h-8" src="<?php echo $root ?>/assets/image/static/photo.png">
		              	<div class="grow mr-5">
		              		<h4 class="font-bold">Nama Akun</h4>
		              		<a class="text-primary" href="<?php echo $root ?>/page/dashboard-user/profile-biodata.php">Lihat akun saya</a>
		              	</div>
		            	</li>
		            	<li class="flex py-3">
		            		<a class="hover:text-primary">Pesanan Saya</a>
		            	</li>
		            	<li class="flex pb-3">
		            		<a class="hover:text-primary">Toko Langganan</a>
		            	</li>
		            	<li class="flex pb-3">
		            		<a class="hover:text-primary">Produk Diskusi</a>
		            	</li>
		            	<li class="flex pb-3">
		            		<a href="<?php echo $root ?>/page/dashboard-user/profile-biodata.php" class="hover:text-primary">Pengaturan</a>
		            	</li>
		            	<li class="flex">
		            		<a href="<?php echo $root ?>/index-logout.php" class="hover:text-primary">Log Out</a>
		            	</li>
		            </ul>
	           	</div>
	          </div>
	        </div>
	        <div class="text-white text-sm w-full justify-end items-center flex pt-3">
	          <img class="svg fill-current" src="<?php echo $root ?>/assets/image/icon/pin.svg">
	          <span class="ml-1">Dikirim ke <b>Alamat</b></span>
	        </div>
	      </div>
	    </section>
	  </div>
	  <div class="storefront-primary-navigation">
	    <div class="col-full"></div>
	  </div>
	</header>
 	<!-- =============================================================================== -->

	<div id="content" class="site-content relative" tabindex="-1">
		<div  class="js-category-backdrop hidden bg-black w-full h-screen absolute z-40 opacity-50" data-origin=""></div>
		<div class="pt-10">