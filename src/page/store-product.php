<?php $root = '..' ?>
<?php include $root . '/header.php'; ?>
<?php $mode = isset($_GET['mode']) ? $_GET['mode'] : '' ?>

<section class="container mx-auto">
	
	<?php $active_tab = 'product' ?>
	<?php include $root . '/parts/store-header.php' ?>

	<div class="flex pb-5 mb-5">
		<div class="part1 rounded shadow-jgmain bg-white w-44 mr-0 md:mr-5 flex-none">
			<div class="p-5 border-b">
				<h2 class="font-bold text-gray90 mb-5">Filter</h2>
				<h3 class="font-bold text-sm text-gray90 mb-4">Kategori</h3>
				<ul class="text-gray70 text-xs">
					<li class="mb-3">Kategori 1</li>
					<li class="mb-3">Kategori 2</li>
					<li class="mb-3">Kategori 3</li>
					<li class="mb-3">Kategori 4</li>
					<li class="mb-3">Kategori 5</li>
				</ul>
			</div>
			<div class="p-5 border-b">
				<h3 class="font-bold text-sm text-gray90 mb-4">Lokasi</h3>
				<ul class="text-gray70 text-xs">
					<li class="mb-3 items-center flex"><input class="mr-2" id="Jakarta" type="checkbox"><label for="Jakarta">Jakarta</label></li>
					<li class="mb-3 items-center flex"><input class="mr-2" id="Surabaya" type="checkbox"><label for="Surabaya">Surabaya</label></li>
					<li class="mb-3 items-center flex"><input class="mr-2" id="Semarang" type="checkbox"><label for="Semarang">Semarang</label></li>
					<li class="mb-3 items-center flex"><input class="mr-2" id="Malang" type="checkbox"><label for="Malang">Malang</label></li>
					<li class="mb-3 items-center flex"><input class="mr-2" id="Solo" type="checkbox"><label for="Solo">Solo</label></li>
				</ul>
			</div>
			<div class="p-5 border-b">
				<h3 class="font-bold text-sm text-gray90 mb-4">Jenis Toko</h3>
				<ul class="text-gray70 text-xs">
					<li class="mb-3 items-center flex"><input class="mr-2" id="jenis1" type="checkbox"><label for="jenis1">Jenis toko 1</label></li>
					<li class="mb-3 items-center flex"><input class="mr-2" id="jenis2" type="checkbox"><label for="jenis2">Jenis toko 2</label></li>
					<li class="mb-3 items-center flex"><input class="mr-2" id="jenis3" type="checkbox"><label for="jenis3">Jenis toko 3</label></li>
				</ul>
			</div>
			<div class="p-5 border-b">
				<h3 class="font-bold text-sm text-gray90 mb-4">Harga</h3>
				<ul class="text-gray70 text-xs">
					<li class="mb-3">
						<input class="w-full rounded border" type="number" name="" placeholder="Harga Minimal">
					</li>
					<li class="mb-3">
						<input class="w-full rounded border" type="number" name="" placeholder="Harga Maximal">
					</li>
				</ul>
			</div>
			<div class="p-5 border-b">
				<h3 class="font-bold text-sm text-gray90 mb-4">Grosir</h3>
				<ul class="text-gray70 text-xs">
					<li class="mb-3 items-center flex"><input class="mr-2" id="ya" type="checkbox"><label for="ya">Ya</label></li>
					<li class="mb-3 items-center flex"><input class="mr-2" id="tidak" type="checkbox"><label for="tidak">Tidak</label></li>
				</ul>
			</div>
			<div class="p-5 border-b">
				<h3 class="font-bold text-sm text-gray90 mb-4">Customizable</h3>
				<ul class="text-gray70 text-xs">
					<li class="mb-3 items-center flex"><input class="mr-2" id="ya1" type="checkbox"><label for="ya1">Ya</label></li>
					<li class="mb-3 items-center flex"><input class="mr-2" id="tidak1" type="checkbox"><label for="tidak1">Tidak</label></li>
				</ul>
			</div>
		</div>
		<div class="part2 grow w-full">
			<div class="flex mb-5 text-sm justify-between">
				<?php if ($mode == 'seller'): ?>
					<button class="px-6 py-2.5 text-white bg-primary text-sm rounded-md font-normal">
						<span class="text-base mr-1 font-bold">+</span> Tambah Produk
					</button>
				<?php endif ?>
				<div class="flex justify-end items-center">
					<span class="font-bold mr-2 text-jgtext">Urutkan </span>
					<select name="orderby" class="orderby border p-1 rounded" aria-label="Shop order">
						<option value="menu_order">Paling Sesuai</option>
						<option value="popularity">Sort by popularity</option>
						<option value="rating">Sort by average rating</option>
						<option value="date">Sort by newness</option>
						<option value="price">Sort by price: low to high</option>
						<option value="price-desc">Sort by price: high to low</option>
					</select>
					<input type="hidden" name="paged" value="1">
					<input type="hidden" name="product_cat" value=""><input type="hidden" name="s" value=""><input type="hidden" name="post_type" value="product">
				</div>
			</div>
			<!-- product -->
			<?php include '../assets/data/product1.php'; ?>
			<div class="grid gap-5 grid-cols-5">
			<?php foreach ($product1 as $key => $item): ?>
				<div class="products shadow-jgmain bg-white hover:shadow-lg rounded-md ">
					<a href="./product.php?id=<?php echo $item['id'] ?>" class="inline-block w-full">
						<div class="relative">
							<img class="mb-3 w-full" src="../assets/image/static/product/<?php echo $item['img'] ?>">
							<?php if ($item['discount']): ?>
								<span class="absolute right-2 top-0 bg-cover text-xs text-white px-1 pt-1 pb-3" style="background-image: url(../assets/image/sale.svg)">
									<?php echo $item['discount'] ?>%<br>OFF
								</span>
							<?php endif ?>
							<?php if ($item['terlaris']): ?>
								<span class="absolute left-0 top-2 bg-primary py-1 pl-1 pr-2 rounded-r text-xs text-white">Terlaris</span>
							<?php endif ?>
						</div>
					</a>
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
							<div x-data="{ open: false }" class="absolute font-bold right-0 bottom-0 text-gray70">
								<button @click="open = !open">. . .</button>
								<ul x-show="open" class="absolute font-normal z-40 bg-white w-44 rounded overflow-hidden shadow">
									<li @click="open = false" class="cursor-pointer text-gray90 hover:bg-blue-50 text-xs py-2 px-3">Tambah ke Keranjang</li>
									<li @click="open = false" class="cursor-pointer text-gray90 hover:bg-blue-50 text-xs py-2 px-3">Tambah ke Wishlist</li>
									<li @click="open = false" class="cursor-pointer text-gray90 hover:bg-blue-50 text-xs py-2 px-3">Bandingkan Produk</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach ?>
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

</section>

<?php include $root . '/footer.php'; ?>