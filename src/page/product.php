<?php $root = '..' ?>
<?php include $root . '/header.php'; ?>

<?php include '../assets/data/product1.php'; ?>

<!-- breadcrumb -->
<div class="container md:flex mx-auto">
	<div class="px-5 md:px-0">
		<ul class="text-xs text-primary flex mb-5">
			<li class="mr-2">Home</li>
			<li class="mr-2 text-gray70"> / </li>
			<li class="mr-2">Food Packaging</li>
			<li class="mr-2 text-gray70"> / </li>
			<li class="mr-2">Thinwall</li>
			<li class="mr-2 text-gray70">/</li>
			<li class="mr-2 text-gray70">Kotak makan plastik / foot container / Thinwall</li>
		</ul>
	</div>
</div>

<section class="mb-5 px-8">
	<div class="container md:flex mx-auto">
		<div class="px-5 py-5 bg-white rounded shadow-jgmain w-full">
			<!-- Product -->
			<div id="product" class="flex mb-10">
				<!-- part 1 -->
				<div class="part1 flex-none" style="width: 367px;">
					<img class="rounded mb-5" src="../assets/image/static/product.png">
					<div class="flex justify-between">
						<img class="rounded mb-5 mr-5" src="../assets/image/static/product-group1.png">
						<img class="rounded mb-5 mr-5" src="../assets/image/static/product-group2.png">
						<img class="rounded mb-5 mr-5" src="../assets/image/static/product-group3.png">
						<img class="rounded mb-5 mr-5	" src="../assets/image/static/product-group4.png">
					</div>
				</div>
				<!-- part 2 -->
				<div class="part2 flex-initial pl-8">
					<h1 class="text-2.5xl mb-5">Kotak makan plastik / Food container / Thinwall 100ml isi 25 pcs</h1>

					<!-- Rate -->
					<div class="flex justify-between w-full md:w-4/6 mb-7">
						<div class="jg-rating inline-block mb-2 text-gray30 text-sm">
							<span class="mr-1 text-gray90">4.0</span>
							<span class="text-yellow-300">★ </span>
							<span class="text-yellow-300">★ </span>
							<span class="text-yellow-300">★ </span>
							<span class="text-yellow-300">★ </span>
							<span class="text-gr-300">★ </span>
						</div>
						<div class="text-sm text-gray90"><span class="text-gray70">150</span> Penilaian</div>
						<div class="text-sm text-gray90"><span class="text-gray70">700</span> Terjual</div>
					</div>

					<!-- Price -->
					<div class="flex justify-between w-full md:w-4/6 mb-8">
						<div>
							<span class="text-gray70 text-sm block mb-1">25-250 Pieces</span>
							<div class="flex items-center font-primary text-gray90 font-bold text-3xl">
								Rp1.100
							</div>
						</div>
						<div>
							<span class="text-gray70 text-sm block mb-1">275-1000 Pieces</span>
							<div class="flex items-center font-primary text-gray90 font-bold text-3xl">
								Rp1.050
							</div>
						</div>
						<div>
							<span class="text-gray70 text-sm block mb-1">1025-5000 Pieces</span>
							<div class="flex items-center font-primary text-gray90 font-bold text-3xl">
								Rp1.000
							</div>
						</div>
					</div>

					<!-- Pengiriman -->
					<div class="text-gray90 text-sm mb-8">
						<div class="mb-8 flex items-start">
								<div class="w-28">Pengiriman</div>
								<div>
									<div class="flex mb-3">
										<div class="text-gray70 mr-2 w-28">Pengiriman Dari</div>
										<div class="">Kota Pengiriman</div>
									</div>
									<div class="flex mb-3">
										<div class="text-gray70 mr-2 w-28">Pengiriman Ke</div>
										<div class="">Alamat Terdaftar <span class="ml-1 text-sm dashicons dashicons-arrow-down-alt2"></span></div>
									</div>
									<div class="flex">
										<div class="text-gray70 mr-2 w-28">Ongkos Kirim</div>
										<div class="">Rp0 - Rp18.000</div>
									</div>
								</div>
						</div>
						<div class="mb-8 flex items-center">
								<div class="w-28">Varian</div>
								<div class="flex">
									<?php $items = ["250ml","500ml","750ml","1000ml","1500ml"] ?>
									<?php foreach ($items as $key => $item): ?>
										<?php if ($key == 3): ?>
											<div class="cursor-pointer border border-primary bg-blue-100 rounded-full text-primary text-sm px-4 py-2 mr-3">
												<?php echo $item ?>
											</div>	
										<?php else: ?>
											<div class="cursor-pointer border border-gray70 rounded-full text-gray70 text-sm px-4 py-2 mr-3 hover:border-primary hover:text-primary hover:bg-blue-100">
												<?php echo $item ?>
											</div>	
										<?php endif ?>
									<?php endforeach ?>
								</div>
						</div>
						<div class="mb-8 flex items-center">
								<div class="w-28">Customization</div>
								<div class="flex items-center">
									<div class="cursor-pointer bg-blue-100 rounded text-primary text-xs px-4 py-2 mr-3">Tersedia</div>
									<div class="text-gray70">(Min. Order 1000 Pieces)</div>
								</div>
						</div>
						<div class="mb-8 flex items-center">
								<div class="w-28">Kuantitas</div>
								<div class="flex items-center">
									<!-- <input type="number" name="" class="border rounded py-2 w-20"> -->
									<div x-data="{ count: 1 }" class="rounded border border-gray50 py-1 w-20 text-gray70 flex items-center justify-center">
										<span @click="count == 0 ? 0 : count--" class="text-center text-xl text-primary cursor-pointer">-</span>
										<input type="hidden" name="count">
										<span x-text="count" class="px-2 w-12 text-center">0</span>
										<span @click="count++" class="text-center text-xl text-primary cursor-pointer">+</span>
									</div>
									<div class="ml-3 text-gray70 text-xs">Pembelian kelipatan 25</div>
								</div>
						</div>
						<div class="mb-8 flex items-center">
								<div class="w-28">Sub-Total</div>
								<div class="flex items-center font-primary text-primary font-bold text-3xl">
									Rp27.000
								</div>
						</div>
					</div>

					<form class="flex" action="" method="post" enctype="multipart/form-data">
						<button class="px-5 py-2.5 text-primary bg-blue-100 text-sm rounded-md mr-3 font-normal">
							Bandingkan
						</button>
						<button class="px-5 py-2.5 text-primary bg-blue-100 text-sm rounded-md mr-3 font-normal">
							Beli Sekarang
						</button>
						<button class="flex px-5 py-2.5 text-white bg-primary text-sm rounded-md font-normal items-center" type="submit" name="add-to-cart" value="87">
							<span class="mr-1">Tambah ke Keranjang</span>
							<img class="svg fill-current" src="../assets/image/icon/shopping-cart-add.svg">
						</button>
					</form>
				</div>
			</div>
			<!-- Toko -->
			<div class="p-4 rounded-md bg-gray-100 flex mb-10">
				<div class="mr-7 flex border-r w-1/3">
					<div class="flex items-center">
						<img src="../assets/image/static/store.png" class="mr-4" style="width: 100px;height: 100px;">
					</div>
					<div>
						<div class="text-base text-gray90 mb-1">Sighra Jayabrana Sukses</div>
						<span class="text-gray70 text-xs">Aktif 4 jam lalu</span>
						<div class="text-gray70 text-xs flex items-center mb-2">
							<img class="svg mr-1 cursor-pointer fill-current" src="<?php echo $root ?>/assets/image/icon/pin.svg">
							<span>Cihuni, Padegangan</span>
						</div>
						<div class="flex">
							<button class="py-1 text-white bg-primary text-xs rounded-md mr-3 font-normal px-8">
								Chat
							</button>

							<button class="py-1 px-2 text-primary bg-blue-100 text-xs rounded-md mr-3 font-normal">
								Kunjungi Toko
							</button>
						</div>
					</div>
				</div>
				<div class="w-2/3 flex flex-col justify-center text-sm">
					<div class="flex mb-5">
						<div class="text-gray90 mr-8">Penilaian<span class="ml-2 text-gray70">36RB</span></div>
						<div class="text-gray90 mr-8">Persentase chat dibalas<span class="ml-2 text-gray70">96%</span></div>
						<div class="text-gray90 mr-8">Bergabung<span class="ml-2 text-gray70">2 tahun lalu</span></div>
					</div>
					<div class="flex">
						<div class="text-gray90 mr-8">Produk<span class="ml-2 text-gray70">201</span></div>
						<div class="text-gray90 mr-8">Waktu chat dibalas<span class="ml-2 text-gray70">hitungan jam</span></div>
						<div class="text-gray90 mr-8">Pengikut<span class="ml-2 text-gray70">37RB</span></div>
					</div>
				</div>
			</div>
			<!-- Spesifikasi Produk -->
			<div class="flex">
				<div class="part1 flex-initial w-full mr-5">
					<div class="flex items-center mb-4">
						<h2 class="font-bold mr-10 text-gray90 text-xl">Spesifikasi Produk</h2>
						<a class="text-primary text-sm mr-10" href="">Deskripsi Produk</a>
						<a class="text-primary text-sm mr-10" href="">Penilaian Produk</a>
						<a class="text-primary text-sm mr-10" href="">Diskusi</a>
					</div>

					<!-- Spesifikasi -->
					<div class="table1 text-sm">
						<div class="bg-gray20 p-3 rounded font-bold mb-4">Spesifikasi Produk</div>
						<?php $spec1Header 	= ['Industrial Use:','Use:','Material:','Style:','Type:','Plastic Type:','Place of Origin:','Brand Name:','Model Number:'] ?>
						<?php $spec1Content = ['Beverage','Coffee, Juice, Beer, Tea, Beverage','Plastic','Classic','Cup','PET','Fujian, China','Xiamen Xiefa','SLB'] ?>
						
						<?php $spec2Header 	= ['Certification:','Usage:','MOQ:','Product Name:','Capacity:','Sample:','Sample Time:','Delivery Time:','Color:'] ?>
						<?php $spec2Content = ['ISO9001/QS/LFGB/TUV','Beverage Cup','5000 pcs','Disposable Plastic Cups','Standard','Available','3 - 7 Days','10 - 25 Days','Customized Color'] ?>

						<div class="flex text-gray90 pl-3">
							<table class="w-1/2">
								<?php foreach ($spec1Header as $key => $header): ?>
									<tr>
										<td class="text-gray70 pb-4"><?php echo $header ?></td>
										<td class="pb-4"><?php echo $spec1Content[$key] ?></td>
									</tr>
								<?php endforeach ?>
							</table>
							<table class="w-1/2">
								<?php foreach ($spec2Header as $key => $header): ?>
									<tr>
										<td class="text-gray70 pb-4"><?php echo $header ?></td>
										<td class="pb-4"><?php echo $spec2Content[$key] ?></td>
									</tr>
								<?php endforeach ?>
							</table>
						</div>
					</div>

					<!-- Deskripsi -->
					<div class="table1 text-sm text-gray90 mb-4">
						<div class="bg-gray20 p-3 rounded font-bold mb-4">Deskripsi Produk</div>
						<p class="mb-3 pl-3">Kelebihan:</p>
						<ul class="list-disc pl-7">
							<li>Tutup rapat anti tumpah</li>
							<li>Tampilan Bening</li>
							<li>Tahan kukus microwave dan freezer</li>
							<li>Cocok untuk usaha (catering, nasi box, dimsum, dll)</li>
						</ul>
					</div>

					<?php include '../parts/review.php'; ?>
					<?php include '../parts/discus.php'; ?>

				</div>
				<div class="part2 flex-none">
					<div class="relative overflow-hidden rounded mb-5">
						<div class="absolute bg-black opacity-50 w-full h-full"></div>
						<img src="../assets/image/static/iklan1.png">
					</div>
					<div class="relative overflow-hidden rounded">
						<div class="absolute bg-black opacity-50 w-full h-full"></div>
						<img src="../assets/image/static/iklan2.png">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="mb-5 px-8">
	<div class="container md:flex mx-auto mb-16">
		<div class="px-5 py-5 bg-white rounded shadow-jgmain w-full">
			<div class="product-list mb-8">
				<div class="block md:flex items-end">
					<h2 class="mb-0 font-bold pr-3 text-xl">Kamu Mungkin Butuh</h2>
					<a href="./page/recommend.php" class="inline-block text-primary text-xs hover:text-blue-400 leading-loose">Lihat semua</a>
				</div>
				<div class="pt-5">
					<!-- product -->
					<div class="grid gap-4 grid-cols-6">
						<?php for ($i=4; $i < 10; $i++): ?>
							<?php $item = $product1[$i] ?>
							<div class="products shadow-jgmain hover:shadow-lg rounded-md overflow-hidden">
								<a href="">
									<div class="relative">
										<img class="mb-3" src="../assets/image/static/product/<?php echo $item['img'] ?>">
										<?php if ($item['discount']): ?>
											<span class="absolute right-2 top-0 bg-cover text-xs text-white px-1 pt-1 pb-3" style="background-image: url(../assets/image/sale.svg)">
												<?php echo $item['discount'] ?>%<br>OFF
											</span>
										<?php endif ?>
										<?php if ($item['terlaris']): ?>
											<span class="absolute left-0 top-2 bg-primary py-1 pl-1 pr-2 rounded-r text-xs text-white">Terlaris</span>
										<?php endif ?>
									</div>
									<div class="px-3 text-xs">
										<h4 class="mb-1 text-gray90"><?php echo $item['title'] ?></h4>
										<div class="mb-3 font-bold text-gray90 text-sm flex">
											Rp<?php echo $item['price'] ?>
										</div>
										<div class="flex mb-3 text-gray60">
											<div class="flex border-r border-gray60 pr-2">
												<svg width="16" height="14" viewBox="0 0 16 14" fill="none">
													<path d="M7.58354 1.02916C7.80729 0.596973 8.42543 0.596972 8.64919 1.02916L10.44 4.48808C10.5295 4.66108 10.6975 4.77982 10.8905 4.80655L14.8458 5.35443C15.3468 5.42383 15.5424 6.04399 15.1719 6.38829L12.3473 9.01292C12.1976 9.15198 12.129 9.35764 12.1652 9.55871L12.8369 13.2924C12.9245 13.7788 12.4194 14.1565 11.9776 13.9351L8.38519 12.1347C8.216 12.0499 8.01672 12.0499 7.84754 12.1347L4.25512 13.9351C3.81332 14.1565 3.30827 13.7788 3.39578 13.2924L4.06756 9.55871C4.10374 9.35764 4.03512 9.15198 3.88547 9.01292L1.06086 6.38829C0.690314 6.04399 0.885919 5.42383 1.38695 5.35443L5.34226 4.80655C5.53522 4.77982 5.70319 4.66108 5.79276 4.48808L7.58354 1.02916Z" fill="#F2C94C"/>
												</svg>
												<span class="ml-1"><?php echo $item['rating'] ?></span>
											</div>
											<div class="pl-2">Terjual <?php echo $item['count'] ?></div>
										</div>
										<div class="mb-3 text-gray60 relative">
											<div class="block mb-1"><?php echo $item['city'] ?></div>
											<div><?php echo $item['dist'] ?></div>
											<div class="absolute font-bold right-0 bottom-0 text-gray70">. . .</div>
										</div>
									</div>
								</a>
							</div>
						<?php endfor ?>
					</div>
				</div>
			</div>
			<div class="product-list">
				<div class="block md:flex items-end">
					<h2 class="mb-0 font-bold pr-3 text-xl">Produk Sponsor</h2>
					<a href="./page/recommend.php" class="inline-block text-primary text-xs hover:text-blue-400 leading-loose">Lihat semua</a>
				</div>
				<div class="pt-5">
					<!-- product -->
					<div class="grid gap-4 grid-cols-6">
						<?php for ($i=0; $i < 6; $i++): ?>
							<?php $item = $product1[$i] ?>
							<div class="products shadow-jgmain hover:shadow-lg rounded-md overflow-hidden">
								<a href="">
									<div class="relative">
										<img class="mb-3" src="../assets/image/static/product/<?php echo $item['img'] ?>">
										<?php if ($item['discount']): ?>
											<span class="absolute right-2 top-0 bg-cover text-xs text-white px-1 pt-1 pb-3" style="background-image: url(../assets/image/sale.svg)">
												<?php echo $item['discount'] ?>%<br>OFF
											</span>
										<?php endif ?>
										<?php if ($item['terlaris']): ?>
											<span class="absolute left-0 top-2 bg-primary py-1 pl-1 pr-2 rounded-r text-xs text-white">Terlaris</span>
										<?php endif ?>
									</div>
									<div class="px-3 text-xs">
										<h4 class="mb-1 text-gray90"><?php echo $item['title'] ?></h4>
										<div class="mb-3 font-bold text-gray90 text-sm flex">
											Rp<?php echo $item['price'] ?>
										</div>
										<div class="flex mb-3 text-gray60">
											<div class="flex border-r border-gray60 pr-2">
												<svg width="16" height="14" viewBox="0 0 16 14" fill="none">
													<path d="M7.58354 1.02916C7.80729 0.596973 8.42543 0.596972 8.64919 1.02916L10.44 4.48808C10.5295 4.66108 10.6975 4.77982 10.8905 4.80655L14.8458 5.35443C15.3468 5.42383 15.5424 6.04399 15.1719 6.38829L12.3473 9.01292C12.1976 9.15198 12.129 9.35764 12.1652 9.55871L12.8369 13.2924C12.9245 13.7788 12.4194 14.1565 11.9776 13.9351L8.38519 12.1347C8.216 12.0499 8.01672 12.0499 7.84754 12.1347L4.25512 13.9351C3.81332 14.1565 3.30827 13.7788 3.39578 13.2924L4.06756 9.55871C4.10374 9.35764 4.03512 9.15198 3.88547 9.01292L1.06086 6.38829C0.690314 6.04399 0.885919 5.42383 1.38695 5.35443L5.34226 4.80655C5.53522 4.77982 5.70319 4.66108 5.79276 4.48808L7.58354 1.02916Z" fill="#F2C94C"/>
												</svg>
												<span class="ml-1"><?php echo $item['rating'] ?></span>
											</div>
											<div class="pl-2">Terjual <?php echo $item['count'] ?></div>
										</div>
										<div class="mb-3 text-gray60 relative">
											<div class="block mb-1"><?php echo $item['city'] ?></div>
											<div><?php echo $item['dist'] ?></div>
											<div class="absolute font-bold right-0 bottom-0 text-gray70">. . .</div>
										</div>
									</div>
								</a>
							</div>
						<?php endfor ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include $root . '/footer.php'; ?>