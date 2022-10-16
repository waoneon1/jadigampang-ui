<?php $root = '.' ?>
<?php include $root . '/header.php'; ?>
<?php $permalink = './page/product.php' ?>
<?php include './assets/data/product1.php'; ?>

<section id="banner" class="mb-5">
	<div class="container md:flex mx-auto mb-16 md:mb-0">
		<div class="w-full h-72">
			<!-- "autoPlay": 4000  -->
			<div class="jg-banner-slider items-start overflow-hidden w-full h-full relative" data-flickity='{ "wrapAround": true, "groupCells": true, "pageDots": true, "prevNextButtons": true}' style="outline: none;">
	    		<?php $ig['data'] = [1,2,3]; ?>
	        <?php foreach ( $ig['data'] as $key => $item): ?>
	            <div class="flex slider-list relative w-full h-full mx-3">
	              <div class="w-full h-full bg-blue-100 overflow-hidden text-body text-left shadow-md relative bg-center bg-no-repeat bg-cover" style="background-image: url('./assets/image/static/banner.png'); height:100% !important;">
	              	<div class="w-1/2 h-full py-8 px-5 flex items-center bg-gradient-to-r from-primary to-transparent">
	              		<div class="w-full">
	              			<h1 class="max-w-xs text-3xl text-white font-bold mb-3">Solusi mudah untuk belanja packaging</h1>
		              		<p class="max-w-xs text-white mb-3">Hemat sampai 60% untuk pertama kali pembelian</p>
		              		<div class="text-sm bg-white rounded-lg flex overflow-hidden max-w-sm">
		              			<div class="relative pl-8 w-full">
		              				<img class="svg absolute left-3 top-3" src="./assets/image/send.svg">
		              				<input class="w-full" type="input" name="subscribe" placeholder="Masukan alamat email anda">
		              			</div>
		              			<button class="w-1/3 bg-tertiary hover:bg-tertiary text-white">Subscribe</button>
		              		</div>
	              		</div>
	              	</div>
	              </div>
	          </div>
	        <?php endforeach ?>
	    </div>
		</div>
	</div>
</section>

<section id="categories" class="mb-5">
	<div class="container mx-auto mb-16 md:mb-0">
		<div class="px-5 md:px-0 bg-white rounded shadow-jgmain">
			<div class="mb-6 py-2">
				<div class="py-3 px-5 flex items-center justify-between">
					<h2 class="mb-0 font-bold pr-5 text-xl text-gray90">Kategori Pilihan</h2>
					<a class="ml-5 inline-block hidden" href="">Lihat semua</a>
				</div>
				<div class="px-4 rounded-lg flex">
					<?php $cat_items = [
						['title' => 'Paper Cup Kecil', 'desc' => '2000+'],
						['title' => 'Paper Cup Putih Besar', 'desc' => '2000+'],
						['title' => 'Paper Cup Kecil', 'desc' => '2000+'],
						['title' => 'Paper Cup Putih Besar', 'desc' => '2000+'],
						['title' => 'Paper Cup Kecil', 'desc' => '2000+'],
						['title' => 'Paper Cup Putih Besar', 'desc' => '2000+'],
						['title' => 'Paper Cup Kecil', 'desc' => '2000+'],
					] ?>
					<?php foreach ($cat_items as $key => $item): ?>
						<div class="<?php echo $key == 6 ? '' : 'mr-5' ?>">
							<img class="rounded overflow-hidden mb-3" src="./assets/image/static/square-cup.png">
							<h4 class="text-gray90 text-sm mb-1"><?php echo $item['title'] ?></h4>
							<p class="text-gray70 text-xs mb-2">Terjual <?php echo $item['desc'] ?></p>
						</div>
					<?php endforeach ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="promo" class="mb-5">
	<div class="container mx-auto mb-16 md:mb-0">
		<div class="px-5 md:px-0 bg-white rounded shadow-jgmain">
			<div class="mb-6 py-5 px-5">
				<div class="py-5 px-5 bg-gradient-to-r from-primary to-jgblue mb-4 relative">
					<img class="absolute right-0" src="./assets/image/static/promo.png">
					<h2 class="text-3xl text-white font-bold mb-1">Quotation Code:</h2>
					<p class="text-white mb-4">Masukan kode unik transaksi yang diberikan toko kesayanganmu</p>
					<div class="flex mb-16">
						<a class="text-sm rounded border-2 border-white px-4 py-2 bg-tranparant mr-4 text-white" href="">Pelajari</a>
						<a class="text-sm rounded border-2 border-white px-4 py-2 bg-white text-primary" href="">Telusuri Quotation Market</a>
					</div>
					<input class="bg-white px-5 py-2 rounded-lg w-full" type="input" name="product-code" placeholder="Masukan Kode Product dari Toko Langgananmu">
				</div>
				<div>
					<div class="block md:flex items-end mb-5">
						<h2 class="mb-0 font-bold pr-3 text-xl text-gray90">Promo Belanja</h2>
						<a href="./page/promo.php" class="inline-block text-primary text-xs hover:text-blue-400 leading-loose">Lihat semua</a>
					</div>
					<div class="block md:flex justify-between gap-x-4">
						<?php $promos = [1,2,3,4,5] ?>
						<?php foreach ($promos as $key => $value): ?>
							<div class="w-full py-4 px-4 bg-gradient-to-r from-primary to-jgblue text-white rounded-lg">
								<div class="text-sm font-bold">Promo Belanja</div>
								<a class="inline-block text-xs text-white" href="./page/promo.php">Detail Promo</a>
							</div>
						<?php endforeach ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="special" class="mb-5">
	<div class="container mx-auto mb-16 md:mb-0">
	 	<div class="px-5 md:px-0 bg-white rounded shadow-jgmain">
	 		<div class="mb-6 pt-5 px-5">
	 			<div class="block md:flex items-end mb-5">
	 				<h2 class="mb-0 font-bold pr-3 text-xl">Penawaran Spesial</h2>
	 			</div>
	 			<div class="block md:grid gap-4 grid-cols-2">
					<div class="px-6 py-3 rounded-lg mb-5 relative overflow-hidden" style="background: linear-gradient(180deg, #5797F0 0%, #0A68EB 100%);">
						<!-- dd -->
						<div class="relative" style="z-index: 1">
							<div class="bg-red-100 text-tertiary text-xs mb-3 inline-block px-2 py-1 pr-4 rounded" style="border-bottom-right-radius: 30px;">Gratis Ongkir</div>
							<div class="text-3xl text-white font-bold mb-3">Quotation <br />Marketplace</div>
							<input class="bg-white px-5 py-2 rounded-lg w-full mb-3" type="input" name="product-code" placeholder="Masukan Kode Product dari Toko Langgananmu">
							<p class="text-white text-sm mb-3">Bingung cari produk mu satu persatu? <br /> 
							Telusuri kategori yang kau butuhkan dan dapatkan penawaran produk dari toko percaya di Jadigampang</p>
	   					<a class="text-sm rounded border-2 border-white px-4 py-2 bg-white text-primary inline-block" href="./page/promo.php">Lanjutkan</a>
						</div>
					</div>
					<div class="px-6 py-3 rounded-lg mb-5 relative overflow-hidden" style="background: linear-gradient(180deg, #FF4E66 0%, #CC031E 100%);">
						<!-- dd -->
						<div class="relative" style="z-index: 1">
							<img class="svg absolute right-3 top-3 mt-6" src="./assets/image/static/mockup-cup.png">
							<div class="bg-white text-primary text-xs mb-3 inline-block px-2 py-1 pr-4 rounded" style="border-bottom-right-radius: 30px;">Diskon</div>
							<div class="text-3xl text-white font-bold mb-3">Design Sendiri <br />Jadigampang</div>
	   					<a class="text-sm rounded border-2 border-white px-4 py-2 bg-white text-primary inline-block mb-5" href="./page/custome.php">
	   						Kunjungi halaman design sendiri
	   					</a>
	   					<p class="text-white text-sm mb-3 max-w-xs pr-20">Desain sendiri kemasanmu dan bisa hemat sampai dengan 60% untuk orderan pertama.</p>
						</div>
					</div>
	 			</div>
	 		</div>
	 	</div>
 	</div>
</section>

<section id="recommend" class="mb-5">
	<div class="container mx-auto mb-16 md:mb-0">
		<div class="px-5 md:px-0 bg-white rounded shadow-jgmain">
			<div class="py-5 px-5">
					<div class="block md:flex items-end">
						<h2 class="mb-0 font-bold pr-3 text-xl">Produk Terlaris</h2>
						<a href="./page/recommend.php" class="inline-block text-primary text-xs hover:text-blue-400 leading-loose">Lihat semua</a>
					</div>
					<div class="pt-5">
						<div class="jg-products js-best-selling">
							<?php foreach ($product1 as $key => $item): ?>
								<?php include './parts/product-list-slider.php'; ?>
							<?php endforeach ?>
						</div>
					</div>
			</div>
		</div>
	</div>
</section>

<?php include './assets/data/blog1.php'; ?>
<section id="blog" class="mb-5">
	<div class="container mx-auto mb-16 md:mb-0">
		<div class="col-full-home px-5 md:px-0 bg-white rounded shadow-jgmain">
			
			<div class="mb-6 py-5 px-5">
				<div class="block md:flex items-end mb-5">
					<h2 class="mb-0 font-bold pr-3 text-xl">Inspirasi untuk Usahamu</h2>
					<a href="./page/blogs.php" class="inline-block text-primary text-xs hover:text-blue-400 leading-loose">Lihat semua</a>
				</div>
				<div class="block md:grid gap-5 grid-cols-3">
					<?php foreach ($blog1 as $key => $blog): ?>
						<a href="<?php echo $blog['permalink'] ?>">
							<div class="relative mx-auto">
								<img src="./<?php echo $blog['thumbnail'] ?>">
								<div class="w-full absolute bottom-0 font-bold flex justify-center items-center pt-4 text-white" style="
									background-image: url('./assets/image/blog-title-overlay.png');
									bottom: -1px;
							    background-position: center;
							    background-size: cover;
							    height: 80px;
							    background-repeat: no-repeat;
								">
									<span style="text-shadow: 0px 0px 10px rgba(0, 0, 0, 0.45);"><?php echo $blog['title'] ?></span>
								</div>
							</div>
						</a>
					<?php endforeach ?>
				</div>
			</div>

		</div>
	</div>
</section>

<?php include './assets/data/product1.php'; ?>
<section id="recommend" class="mb-5">
	<div class="container mx-auto mb-16 md:mb-0">
		<div class="px-5 md:px-0 bg-white rounded shadow-jgmain">
			<div class="pt-5 px-5">
				<div class="block md:flex items-end">
					<h2 class="mb-0 font-bold pr-3 text-xl">Rekomendasi Untukmu</h2>
					<a href="./page/recommend.php" class="inline-block text-primary text-xs hover:text-blue-400 leading-loose">Lihat semua</a>
				</div>
				<div class="pt-5">
					<div class="jg-products js-best-selling">
						<?php foreach ($product1 as $key => $item): ?>
							<?php include './parts/product-list-slider.php'; ?>
						<?php endforeach ?>
					</div>
				</div>
			</div>

				<div class="py-5 px-5">
					<div class="block md:flex items-end">
						<h2 class="mb-0 font-bold pr-3 text-xl">Kamu Mungkin Butuh</h2>
						<a href="./page/recommend.php" class="inline-block text-primary text-xs hover:text-blue-400 leading-loose">Lihat semua</a>
					</div>
					<div class="pt-5">
						<div class="jg-products js-best-selling">
							<?php foreach ($product1 as $key => $item): ?>
								<?php include './parts/product-list-slider.php'; ?>
							<?php endforeach ?>
						</div>
					</div>
			</div>
		</div>
	</div>
</section>

<section id="what" class="mt-20">
	<div class="container mx-auto mb-16 md:mb-0">
		<div class="px-5 md:px-0 mb-20 md:mb-0">
			<section class="rounded-lg mb-10">
				<div class="p-0 md:p-5 text-center">
						<h2 class="mb-5 font-bold text-center text-4xl text-gray90 w-full mb-10">Apa itu JadiGampang?</h2>
						<div class="w-full mb-10">
							<iframe class="mx-auto" width="560" height="315" src="https://www.youtube.com/embed/ThiCMd5kGbE" title="YouTube video player" frameborder="0" allowfullscreen></iframe>
						</div>
						<div class="prose mx-auto mb-10 text-left">
							<p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tempor fermentum sem, id hendrerit leo pulvinar eget. Fusce arcu magna, consectetur non metus maximus, molestie accumsan odio. Quisque in arcu arcu. Cras sed rhoncus quam. Vivamus nec tristique dui, ac imperdiet arcu. Pellentesque sodales blandit odio. Duis congue nulla sit amet purus venenatis tempus. Ut lacinia tellus sed mollis aliquam.</p>
							<p class="mb-5">Cras sit amet pellentesque sem. Curabitur consectetur nibh felis, a efficitur turpis porttitor et. In id nisl lectus. Etiam placerat erat massa, eget facilisis urna pharetra eget. Nullam euismod vitae ligula non faucibus. Mauris a ipsum felis. Curabitur interdum ac purus sit amet feugiat. Vestibulum nec diam nisl. Donec finibus neque consectetur lectus ultricies pretium. Nulla sed mattis augue.</p>
							<p class="mb-5">Quisque nec egestas risus, et luctus nisi. Suspendisse tempor ante ullamcorper consequat euismod. Mauris vel aliquam magna, in pellentesque dui. Aliquam sit amet ligula molestie, accumsan nunc et, egestas massa. Phasellus condimentum velit quis sem dictum, in interdum leo mollis. Fusce rutrum dapibus massa. Mauris pharetra laoreet ex in hendrerit.</p>
						</div>
				</div>
			</section>
		</div>
	</div>
</section>

<script type="text/javascript">
	jQuery(document).ready(function ($) {
		$('.js-best-selling').flickity({
		  pageDots: false,
			prevNextButtons: true,
			cellAlign: 'left',
			adaptiveHeight: true
		});			
	})
</script>

<?php include $root . '/footer.php'; ?>

