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
	              <div class="w-full md:w-2/12">
	                <input id="jg-product-cat" type="hidden" name="product_cat" value="">
	                <div class="jg-input-select px-4 py-2 w-full bg-white shadow-none js-category-megamenu-trigger rounded-l-lg flex cursor-pointer justify-between border">
	                  <span class="js-category-name text-jgtext text-xs mr-1">Kategori</span>
	                  <span class="dashicons dashicons-arrow-down-alt2 text-sm h-4"></span>
	                </div>
	              </div>
	              <div class="w-full md:w-10/12 flex">
	                <input type="search" class="px-4 py-2 leading-normal w-full bg-white shadow-none js-search-megamenu-trigger text-xs" placeholder="I'm looking for" value="" name="s" autocomplete="off">
	                <a href="<?php echo $root ?>/page/search.php" type="submit" value="Search" class="rounded-r-lg py-1 px-4 flex items-center bg-primary border-2 border-white">
	                  <img class="svg fill-current text-white" src="<?php echo $root ?>/assets/image/icon/search.svg">
	                </a>
	                <input type="hidden" name="post_type" value="product">
	              </div>
	            </div>
	            <!-- Category Megamenu -->
	            <div class="js-category-megamenu hidden absolute w-full bg-white rounded mt-1 px-3 py-5">
	              <h4 class="text-sm font-bold px-2 mb-4">Kategori</h4>
	              <div class="w-full grid grid-cols-2 md:grid-cols-4 gap-2 text-xs">
	                <a href="#" class="js-items-category text-jgtext hover:bg-blue-100 py-1 px-2" data-slug="accessories" data-name="Accessories">Accessories</a>
	                <a href="#" class="js-items-category text-jgtext hover:bg-blue-100 py-1 px-2" data-slug="hoodies" data-name="Hoodies">Hoodies</a>
	                <a href="#" class="js-items-category text-jgtext hover:bg-blue-100 py-1 px-2" data-slug="tshirts" data-name="Tshirts">Tshirts</a>
	              </div>
	            </div>
	            <!-- Search Megamenu -->
	            <div class="js-search-megamenu hidden absolute w-full bg-white rounded mt-1 px-3 py-5">
	              <h4 class="text-sm font-bold px-2 mb-4">SEARCH</h4>
	              <div class="w-full grid grid-cols-2 md:grid-cols-4 gap-2 text-xs">
	                <a href="#" class="js-items-search text-jgtext hover:bg-blue-100 py-1 px-2" data-slug="thin-wall" data-name="Thin Wall">Thin Wall</a>
	                <a href="#" class="js-items-search text-jgtext hover:bg-blue-100 py-1 px-2" data-slug="thin-wall2" data-name="Thin Wall 2">Thin Wall 2</a>
	                <a href="#" class="js-items-search text-jgtext hover:bg-blue-100 py-1 px-2" data-slug="thin-wall3" data-name="Thin Wall 3">Thin Wall 3</a>
	                <a href="#" class="js-items-search text-jgtext hover:bg-blue-100 py-1 px-2" data-slug="thin-wall4" data-name="Thin Wall 4">Thin Wall 4</a>
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
	      <div class="flex-none pl-8 w-full hidden md:block" style="max-width: 400px;">
	        <div class="flex w-full justify-between">
	          <div class="flex grow justify-between items-center pr-6 ">
            	<a class="flex flex-col relative items-center text-white" href="">
	              <img class="svg fill-current" src="<?php echo $root ?>/assets/image/icon/home.svg">
	              <span class="text-xs mt-1">Home</span>
	            </a>
              <a href="<?php echo $root ?>/page/cart.php" class="cart flex flex-col relative items-center text-white" title="View your shopping cart">
                <img class="svg fill-current" src="<?php echo $root ?>/assets/image/icon/cart.svg">
                <span class="text-xs mt-1">Keranjang</span>
              </a>
            	<a class="flex flex-col relative items-center text-white" href="">
              	<img class="svg" src="<?php echo $root ?>/assets/image/icon/more-app.svg">
              	<span class="text-xs mt-1">Lainnya</span>
							</a>
	          </div>
	          <div class="flex flex-none items-center justify-end">
	            <a href="<?php echo $root ?>" class="text-sm rounded-lg border border-white px-4 py-2 bg-tranparant text-white mr-2"> Masuk </a>
	            <a href="#" class="text-sm rounded border-1 border-white px-4 py-2 bg-white text-primary"> Daftar </a>
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