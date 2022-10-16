<?php $root = '../..' ?>
<?php include $root . '/header-seller.php'; ?>
<?php $active_tab = '' ?>
<?php $active_sidebar = 'home' ?>
<?php $active_sidebar_nav = '' ?>

<?php include '../../assets/data/product1.php'; ?>

<section class="w-full">

	<div class="flex text-gray90">
		<div class="part1 w-56 flex-none text-xs">
			<?php include '../../parts/seller-sidebar.php'; ?>
		</div>
		<div class="part2 grow w-full p-5 text-sm">
			<h1 class="my-5 font-bold text-xl">Hi, William</h1>
			<!-- section 1 -->
			<div class="bg-white p-5 rounded shadow-jgmain flex mb-5">
				<div class="flex items-center mr-10">
					<div class="flex-none bg-gray90 flex items-center justify-center w-12 h-12 mr-3 font-bold rounded-full text-white">
						<img src="../../assets/image/static/photo.png">
					</div>
					<div class="grow text-xs">
						<div class="text-gray90 mb-1 text-sm">Nama Akun Pengguna</div>
						<div class="text-primary">Jabatan</div>
					</div>
				</div>
				<div class="flex items-center">
					<div class="flex-none bg-gray90 flex items-center justify-center w-12 h-12 mr-3 font-bold rounded-full text-white">
						<img src="../../assets/image/static/store.png">
					</div>
					<div class="grow text-xs">
						<div class="text-gray90 mb-1 text-sm">Sighra Jayabrana Sukses</div>
						<div class="text-primary">Level Toko</div>
					</div>
				</div>
				<div class="ml-auto">
					<div class="text-gray70">Saldo</div>
					<div class="text-2.5xl text-primary font-bold">Rp90.000</div>
				</div>
			</div>
			<!-- eo:section 1 -->
			<!-- section 2 -->
			<div class="flex  mb-5">
				<div class="w-8/12 pr-5">
					<div class="bg-white p-5 rounded shadow-jgmain">
						<h2 class="font-bold mb-5">To-Do List</h2>
						<div class="grid grid-cols-5 gap-5">
							<?php $todos = [
								['number' => 22, 'text' => 'Pesan Belum Dibaca'],
								['number' => 10, 'text' => 'Pesanan Diterima '],
								['number' => 9, 'text' => 'Pesanan Pending'],
								['number' => 20, 'text' => 'Menunggu Dikirim'],
								['number' => 20, 'text' => 'Ulasan Baru'],
								['number' => 10, 'text' => 'Permintaan Quotation'],
								['number' => 10, 'text' => 'Quotation Diterima'],
								['number' => 0, 'text' => 'Stock Kosong'],
								['number' => 9, 'text' => 'Stok Tinggal Sedikit'],
								['number' => 1, 'text' => 'Pelanggaran'],
							] ?>
							<?php foreach ($todos as $key => $item): ?>
								<div>
									<h4 class="mb-1 text-2.5xl"><?php echo $item['number'] ?></h4>
									<p class="text-gray70 text-xs"><?php echo $item['text'] ?></p>
								</div>
							<?php endforeach ?>
						</div>
					</div>	
				</div>
				<div class="w-4/12">
					<div class="bg-white p-5 rounded shadow-jgmain flex mb-5" style="height: calc( 50% - 10px )">
						<!-- grafik -->
					</div>	
					<div class="bg-white p-5 rounded shadow-jgmain flex mb-5" style="height: calc( 50% - 10px )">
						<!-- grafik -->
					</div>	
				</div>
			</div>
			<!-- eo:section 2 -->
			<!-- section 3 -->
			<div class="bg-white mb-5 rounded shadow-jgmain items-center">
				<div class="p-5 flex">
					<div class="mr-7 flex w-1/2">
						<div class="flex items-center relative">
							<img src="../../assets/image/static/store.png" class="mr-5" style="width: 116px;height: 116px;">
							<?php if ($mode == 'seller'): ?>
								<div class="absolute right-0 bottom-0 w-6 h-6 rounded-full flex items-center justify-center bg-white m-3 shadow-jgmain cursor-pointer">
									<img class="svg text-gray70 w-3 h-3" src="../../assets/image/icon/camera.svg">
								</div>
							<?php endif ?>
						</div>
						<div>
							<div class="text-base text-gray90 mb-1 flex items-center">
								<span class="mr-2">Sighra Jayabrana Sukses</span>
							</div>
							<div class="flex mb-2">
								<span class="text-gray70 text-xs mr-4">Aktif 4 jam lalu</span>
								<div class="text-gray70 text-xs flex items-center mr-2">
									<img class="svg mr-1 cursor-pointer fill-current" src="<?php echo $root ?>/assets/image/icon/pin.svg">
									<span>Cihuni, Padegangan</span>
								</div>
							</div>
							<div class="jg-rating inline-block mb-2 text-gray30 text-sm flex items-center">
								<span class="mr-2 text-gray90">4.0</span>
								<img class="svg fill-current text-warning mr-1" src="<?php echo $root ?>/assets/image/icon/star.svg">
								<img class="svg fill-current text-warning mr-1" src="<?php echo $root ?>/assets/image/icon/star.svg">
								<img class="svg fill-current text-warning mr-1" src="<?php echo $root ?>/assets/image/icon/star.svg">
								<img class="svg fill-current text-warning mr-1" src="<?php echo $root ?>/assets/image/icon/star.svg">
								<img class="svg fill-current text-gray50 mr-1" src="<?php echo $root ?>/assets/image/icon/star.svg">
							</div>
							<div class="flex">
									<button class="py-1 px-2 text-primary bg-blue-100 text-xs rounded-md mr-3 font-normal">
										Pengaturan Toko
									</button>
									<button class="py-1 px-2 text-white bg-primary text-xs rounded-md mr-3 font-normal">
										Kunjungi Halaman Toko
									</button>
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
			<!-- eo:section 3 -->
			<!-- section 4 -->
			<div class="flex mb-5">
				<div class="w-1/3 pr-5">
					<div class="bg-white p-5 rounded shadow-jgmain mb-5">
						<h2 class="font-bold mb-5">Produk Pilihan</h2>
						<div class="jg-products js-best-selling">
							<?php foreach ($product1 as $key => $item): ?>
								<?php include '../../parts/product-list-slider.php'; ?>
							<?php endforeach ?>
						</div>
					</div>
					<div class="bg-white p-5 rounded shadow-jgmain mb-5">
						<div class="block md:flex mb-5 items-center">
							<h2 class="font-bold pr-3 text-xl">Foto</h2>
							<a href="../../page/gallery.php" class="inline-block text-primary text-xs hover:text-blue-400 leading-loose">Lihat semua</a>
						</div>
						<div class="grid grid-cols-2 gap-5">
							<img class="w-full" src="../../assets/image/static/gallery/gallery-square1.png">
							<img class="w-full" src="../../assets/image/static/gallery/gallery-square2.png">
							<img class="w-full" src="../../assets/image/static/gallery/gallery-square3.png">
							<img class="w-full" src="../../assets/image/static/gallery/gallery-square4.png">
						</div>
					</div>
				</div>
				<div class="w-2/3">
					<div class="bg-white rounded shadow-jgmain w-full mb-5 text-sm p-5">
						<div class="w-full flex items-center">
							<img class="flex-none svg fill-current text-gray70 mr-5" src="../../assets/image/icon/attachment.svg">
							<img class="flex-none svg fill-current text-gray70 mr-5" src="../../assets/image/icon/emoji.svg">
							<div class="w-full flex px-1 py-1 leading-normal w-full bg-gray20 rounded-lg shadow-none text-xs">
				        <input type="search" class="flex-initial bg-gray20 w-full py-1" placeholder="Cari produk di toko ini">
				        <a href="" class="text-white bg-primary rounded-md flex items-center justify-center px-4">
				        	<span class="mr-1">Bagikan</span>
				        </a>
				        <input type="hidden" name="post_type" value="product">
				      </div>
						</div>
					</div>

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
					<div class="flex justify-center items-center">
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
			<!-- eo:section 4 -->
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