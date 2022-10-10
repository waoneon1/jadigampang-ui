<?php $root = '../..' ?>
<?php include $root . '/header.php'; ?>
<?php $active_tab = '' ?> <!-- alamat, pembayaran, notif, security -->
<?php $active_sidebar = 'home' ?> <!-- home, akun, pesan, notif, percakapan -->
<?php $active_sidebar_nav = '' ?> <!-- langganan, disukai | semua, bayar, dikemas, dikirim, selesai, gagal | transaksi, promo, sistem -->

<?php include '../../assets/data/blog1.php'; ?>

<section class="container mx-auto">

	<div class="flex">
		<div class="part1 w-44 mr-0 md:mr-5 flex-none text-xs">
			<?php include '../../parts/profile-sidebar.php'; ?>
		</div>
		<div class="part2 grow w-full">
			
			<div class="bg-white mb-5 rounded shadow-jgmain items-center text-sm">
				<div class="p-5 flex">
					<div class="mr-7 flex items-center w-1/2">
						<div class="flex items-center relative">
							<img src="../../assets/image/static/store.png" class="mr-4" style="width: 116px;height: 116px;">
						</div>
						<div>
							<div class="text-2.5xl text-gray90 mb-1 flex items-center">
								<span class="mr-2 ">William123</span>
							</div>
							<div class="flex mb-2">
								<span class="text-gray70 text-xs mr-4">Level Pembeli</span>
							</div>
							<div class="jg-rating inline-block mb-2 text-gray30 text-sm">
								<span class="mr-1 text-gray90">4.0</span>
								<span class="text-yellow-300">★ </span>
								<span class="text-yellow-300">★ </span>
								<span class="text-yellow-300">★ </span>
								<span class="text-yellow-300">★ </span>
								<span class="text-gr-300">★ </span>
							</div>
						</div>
					</div>
					<div class="w-1/2 flex justify-end text-sm text-gray90 items-center">
						<div class="text-center mr-10">
							<h2 class="text-3.5xl font-bold mb-2">80</h2>
							<p>Produk</p>
						</div>
						<div class="text-center mr-10">
							<h2 class="text-3.5xl font-bold mb-2">1000</h2>
							<p>Pengikut</p>
						</div>
						<div class="text-center mr-10">
							<h2 class="text-3.5xl font-bold mb-2">20K +</h2>
							<p>Produk Terjual</p>
						</div>
					</div>
				</div>
			</div>
			
			<div class="flex mb-5">
				<div class="w-4/12 h-auto pr-5">
					<div class="bg-white h-full mb-5 p-5 text-sm rounded shadow-jgmain">
						<h4 class="font-bold">Info</h4>
						<table class="w-full mb-4" border="0">
							<tr>
								<td valign="top" class="text-gray70 py-2" width="60%">Nama Akun</td>
								<td valign="top" class="py-2">William123</td>
							</tr>
							<tr>
								<td valign="top" class="text-gray70 py-2">Tipe Pengguna</td>
								<td valign="top" class="py-2">Reseller</td>
							</tr>
							<tr>
								<td valign="top" class="text-gray70 py-2">Level Pembeli</td>
								<td valign="top" class="py-2">7</td>
							</tr>
							<tr>
								<td valign="top" class="text-gray70 py-2">Rating Pembeli</td>
								<td valign="top" class="py-2">4.0 (baik)</td>
							</tr>
							<tr>
								<td valign="top" class="text-gray70 py-2">Jumlah Pembelian 90 Hari Terakhir</td>
								<td valign="top" class="py-2">1000+</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="w-8/12 h-full">
					<div class="bg-white p-5 text-sm rounded shadow-jgmain h-full">

							<div class="p-5 rounded mb-5 relative overflow-hidden" style="background: linear-gradient(258.57deg, #FFAF9C 0%, #FFD1C6 58.34%);">
								<div class="relative" style="z-index: 1">
									<div class="flex items-center mb-5">
										<h4 class="text-xl text-gray90 font-bold">Quotation Marketplace</h4>
										<a class="text-primary text-xs ml-3" href="">Pelajari</a>
									</div>
									<p class="text-gray90 text-xs mb-5">Bingung cari produk mu satu persatu? <br /> 
									Telusuri kategori yang kau butuhkan dan dapatkan penawaran produk dari toko percaya di Jadigampang</p>
									<div class="flex">
										<input class="bg-white px-5 py-2 rounded w-full mr-3" type="input" name="product-code" placeholder="Saya sedang membutuhkan...">
										<a class="text-sm rounded px-4 py-2 bg-tertiary text-white inline-block" href="../../page/promo.php">Lanjutkan</a>
									</div>
								</div>
							</div>

							<div class="px-5 pt-5 flex bg-gradient-to-r from-primary to-jgblue relative rounded items-center">
								<div>
									<h2 class="text-2.5xl text-white font-bold mb-5">Telusuri <br/>Quotation Market</h2>
									<a class="text-sm rounded px-4 py-2 bg-white mr-4 text-primary inline-block" href="">Telusuri</a>
								</div>
								<img class="" src="../../assets/image/static/promo.png" style="max-width: 270px;">
							</div>

					</div>
				</div>
			</div>

			<div class="bg-white p-5 mb-5 rounded shadow-jgmain items-center text-sm">
				<div class="block md:flex items-end mb-5">
					<h2 class="mb-0 font-bold pr-3 text-xl">Inspirasi untuk Usahamu</h2>
					<a href="../../page/blogs.php" class="inline-block text-primary text-xs hover:text-blue-400 leading-loose">Lihat semua</a>
				</div>
				<div class="block md:grid gap-5 grid-cols-3">
					<?php foreach ($blog1 as $key => $blog): ?>
						<a href="<?php echo $blog['permalink'] ?>">
							<div class="relative mx-auto">
								<img src="../../<?php echo $blog['thumbnail'] ?>">
								<div class="w-full absolute bottom-0 font-bold flex justify-center items-center pt-4 text-white" style="
									background-image: url('../../assets/image/blog-title-overlay.png');
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

			<h4 class="font-bold text-gray90 mb-5">Postingan Anda</h4>
			<!-- comment 1 -->
			<div class="bg-white rounded shadow-jgmain w-full mb-5 text-sm">
				<div class="flex w-full px-5 py-5 border-b">
					<div class="w-full">
						<div class="flex items-center justify-between mb-5">
							<div class="flex items-center">
								<div class="flex-non bg-gray90 flex items-center justify-center w-12 h-12 mr-4 font-bold rounded-full text-white">
									<img src="../../assets/image/static/store.png">
								</div>
								<div class="flex-non mr-8 text-xs">
									<div class="text-gray90 mb-1 text-sm">Sighra Jayabrana Sukses</div>
									<div class="text-gray70">5 Jam yang lalu</div>
								</div>
							</div>
							<div class="font-bold">. . .</div>
						</div>
						<p class="text-sm mb-5">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tempor fermentum sem, id hendrerit leo pulvinar eget. Fusce arcu magna, consectetur non metus maximus, molestie accumsan odio. Quisque in arcu arcu. Cras sed rhoncus quam. Vivamus nec tristique dui, ac imperdiet arcu. Pellentesque sodales blandit odio. Duis congue nulla sit amet purus venenatis tempus. Ut lacinia tellus sed mollis aliquam.
						</p>
						<div class="mb-5" style="margin-right: -1.25rem; margin-left: -1.25rem;">
							<img src="../../assets/image/static/feed.png">
						</div>
						<!-- flag-comment -->
						<div class="flag-comment flex justify-between text-sm text-gray70">
							<span class="mr-4 flex items-center">
								<img class="svg fill-current text-tertiary mr-2" src="../../assets/image/icon/heart.svg">
								<span>51</span>
							</span>
							<span class="flex items-center">
								<span class="mr-1">72</span>
								<span class="text-gray">Komentar</span>
							</span>
						</div>
					</div>
				</div>
				<div class="flex w-full px-5 py-5 border-b">
					<div class="flag-comment flex text-sm text-gray70">
						<span class="mr-5 flex items-center">
							<img class="svg fill-current mr-2" src="../../assets/image/icon/heart.svg">
							<span>Like</span>
						</span>
						<span class="mr-5 flex items-center">
							<img class="svg fill-current mr-2" src="../../assets/image/icon/comment.svg">
							<span>Comment</span>
						</span>
						<span class="mr-5 flex items-center">
							<img class="svg fill-current mr-2" src="../../assets/image/icon/share.svg">
							<span>Share</span>
						</span>
					</div>
				</div>
				<div class="w-full px-5 py-5 border-b">
					<div class="flex w-full mb-5">
						<div class="flex-none bg-gray90 flex items-center justify-center w-12 h-12 mr-4 font-bold rounded-full text-white">
							<img src="../../assets/image/static/photo.png">
						</div>
						<div class="w-full flex-initial flex items-center">
							<input type="text" class="w-full rounded bg-gray20 py-1" placeholder="Tulis komentar...">
						</div>
					</div>
					<div class="flex items-start mb-5">
						<div class="flex-none bg-gray90 flex items-center justify-center w-12 h-12 mr-4 font-bold rounded-full text-white">
							BE
						</div>
						<div class="mr-8">
							<div class="flex mb-3">
								<div class="text-gray90 text-sm mr-3">Bambang Erlambang</div>
								<div class="text-gray70 text-xs mt-1">5 Jam yang lalu</div>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tempor fermentum sem, id hendrerit leo pulvinar eget. Fusce arcu magna, consectetur non metus maximus, molestie accumsan odio. Quisque in arcu arcu. Cras sed rhoncus quam. Vivamus nec tristique dui, ac imperdiet arcu. Pellentesque sodales blandit odio. Duis congue nulla sit amet purus venenatis tempus. Ut lacinia tellus sed mollis aliquam.</p>
						</div>
					</div>
					<div class="w-full flex items-center justify-center">
						<a href="" class="text-sm text-primary">Lihat 10 komentar lainnya</a>
					</div>		
				</div>
			</div>
			<!-- comment 2 -->
			<div class="bg-white rounded shadow-jgmain w-full mb-10 text-sm">
				<div class="flex w-full px-5 py-5 border-b">
					<div class="w-full">
						<div class="flex items-center justify-between mb-5">
							<div class="flex items-center">
								<div class="flex-non bg-gray90 flex items-center justify-center w-12 h-12 mr-4 font-bold rounded-full text-white">
									<img src="../../assets/image/static/store.png">
								</div>
								<div class="flex-non mr-8 text-xs">
									<div class="text-gray90 mb-1 text-sm">Sighra Jayabrana Sukses</div>
									<div class="text-gray70">5 Jam yang lalu</div>
								</div>
							</div>
							<div class="font-bold">. . .</div>
						</div>
						<p class="text-sm mb-5">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tempor fermentum sem, id hendrerit leo pulvinar eget. Fusce arcu magna, consectetur non metus maximus, molestie accumsan odio. Quisque in arcu arcu. Cras sed rhoncus quam. Vivamus nec tristique dui, ac imperdiet arcu. Pellentesque sodales blandit odio. Duis congue nulla sit amet purus venenatis tempus. Ut lacinia tellus sed mollis aliquam.
						</p>
						<!-- flag-comment -->
						<div class="flag-comment flex justify-between text-sm text-gray70">
							<span class="mr-4 flex items-center">
								<img class="svg fill-current text-tertiary mr-2" src="../../assets/image/icon/heart.svg">
								<span>51</span>
							</span>
							<span class="flex items-center">
								<span class="mr-1">72</span>
								<span class="text-gray">Komentar</span>
							</span>
						</div>
					</div>
				</div>
				<div class="flex w-full px-5 py-5 border-b">
					<div class="flag-comment flex text-sm text-gray70">
						<span class="mr-5 flex items-center">
							<img class="svg fill-current mr-2" src="../../assets/image/icon/heart.svg">
							<span>Like</span>
						</span>
						<span class="mr-5 flex items-center">
							<img class="svg fill-current mr-2" src="../../assets/image/icon/comment.svg">
							<span>Comment</span>
						</span>
						<span class="mr-5 flex items-center">
							<img class="svg fill-current mr-2" src="../../assets/image/icon/share.svg">
							<span>Share</span>
						</span>
					</div>
				</div>
				<div class="w-full px-5 py-5 border-b">
					<div class="flex w-full mb-5">
						<div class="flex-none bg-gray90 flex items-center justify-center w-12 h-12 mr-4 font-bold rounded-full text-white">
							<img src="../../assets/image/static/photo.png">
						</div>
						<div class="w-full flex-initial flex items-center">
							<input type="text" class="w-full rounded bg-gray20 py-1" placeholder="Tulis komentar...">
						</div>
					</div>
					<div class="flex items-start mb-5">
						<div class="flex-none bg-gray90 flex items-center justify-center w-12 h-12 mr-4 font-bold rounded-full text-white">
							BE
						</div>
						<div class="mr-8">
							<div class="flex mb-3">
								<div class="text-gray90 text-sm mr-3">Bambang Erlambang</div>
								<div class="text-gray70 text-xs mt-1">5 Jam yang lalu</div>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tempor fermentum sem, id hendrerit leo pulvinar eget. Fusce arcu magna, consectetur non metus maximus, molestie accumsan odio. Quisque in arcu arcu. Cras sed rhoncus quam. Vivamus nec tristique dui, ac imperdiet arcu. Pellentesque sodales blandit odio. Duis congue nulla sit amet purus venenatis tempus. Ut lacinia tellus sed mollis aliquam.</p>
						</div>
					</div>
					<div class="w-full flex items-center justify-center">
						<a href="" class="text-sm text-primary">Lihat 10 komentar lainnya</a>
					</div>		
				</div>
			</div>

			<!-- pagination -->
			<div class="flex justify-center items-center mb-10">
				<div class="text-center flex">
					<span class="text-sm text-primary w-8 h-8 flex justify-center items-center mr-1 rounded-full bg-blue-100 font-bold">1</span>	
					<span class="text-sm text-gray70 w-8 h-8 flex justify-center items-center mr-1 rounded-full">2</span>	
					<span class="text-sm text-gray70 w-8 h-8 flex justify-center items-center mr-1 rounded-full">3</span>	
					<span class="text-sm text-gray70 w-8 h-8 flex justify-center items-center mr-1 rounded-full">4</span>	
					<span class="text-sm text-gray70 w-8 h-8 flex justify-center items-center mr-1 rounded-full">5</span>	
					<span class="text-sm text-gray70 w-8 h-8 flex justify-center items-center mr-1 rounded-full">6</span>	
				</div>
			</div>

		</div>
	</div>
</section>

<?php include $root . '/footer.php'; ?>
