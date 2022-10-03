<?php $root = '..' ?>
<?php include $root . '/header.php'; ?>

<section id="banner" class="mb-5 px-8">
	<div class="container md:flex mx-auto mb-16">
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
			<div class="flex bg-white mb-5 px-6 py-4 rounded shadow-jgmain text-sm">
				<div class="w-2/12 flex items-center justify-between">
					<a class="hover:text-primary" href="./search.php">Produk</a>
					<a class="hover:text-primary font-bold text-primary" href="./search-toko.php">Toko</a>
				</div>
				<div class="w-10/12 flex justify-end">
					<form class="woocommerce-ordering" method="get">
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
					<input type="hidden" name="product_cat" value=""><input type="hidden" name="s" value=""><input type="hidden" name="post_type" value="product"></form>
				</div>
			</div>

			<!-- breadcrumb -->
			<ul class="text-xs text-primary flex mb-5">
				<li class="mr-2">Home</li>
				<li class="mr-2 text-gray70"> / </li>
				<li class="mr-2">Toko</li>
				<li class="mr-2 text-gray70"> / </li>
				<li class="text-gray70">Thinwall</li>
			</ul>

			<!-- search result -->
			<p class="text-xs text-gray70 mb-5">Menampilkan hasil pencarian untuk <span class="text-gray90">‘Thinwall’</span></p>

			<!-- product -->
			<?php include '../assets/data/toko1.php'; ?>
			<div class="grid gap-5 grid-cols-3">
			<?php foreach ($toko1 as $key => $item): ?>
				<div class="store shadow-jgmain hover:shadow-lg rounded-md overflow-hidden">
					<a href="./store.php">
						<div class="relative">
							<img class="mb-3" src="../assets/image/static/toko/<?php echo $item['img'] ?>">
						</div>
						<div class="px-4 text-sm">
							<div class="flex">
								<div class="w-10 h-10 bg-gray90 mr-3 flex items-center justify-center font-bold text-white rounded-full"><?php echo $item['name'] ?></div>
								<div>
									<h4 class="mb-1 text-gray90 font-bold"><?php echo $item['title'] ?></h4>
									<div class="mb-3  text-gray90 text-xs flex"><?php echo $item['id'] ?></div>
								</div>
							</div>
							<div class="flex mb-3 text-gray60">
								<div class="flex border-r border-gray60 pr-2">
									<span class=""><?php echo $item['follower'] ?> Pengikut</span>
								</div>
								<div class="pl-2"><?php echo $item['follow'] ?> Mengikuti</div>
							</div>
						</div>
					</a>
				</div>
			<?php endforeach ?>
			</div>

			<!-- pagination -->
			<div class="mt-10 flex justify-between items-center mb-12">
				<div class="text-gray70 text-xs">
				
				</div>
				<div class="text-right flex">
					<span class="text-sm text-primary w-8 h-8 flex justify-center items-center mr-1 rounded-full bg-blue-100 font-bold">1</span>	
					<span class="text-sm text-gray70 w-8 h-8 flex justify-center items-center mr-1 rounded-full">2</span>	
					<span class="text-sm text-gray70 w-8 h-8 flex justify-center items-center mr-1 rounded-full">3</span>	
					<span class="text-sm text-gray70 w-8 h-8 flex justify-center items-center mr-1 rounded-full">4</span>	
					<span class="text-sm text-gray70 w-8 h-8 flex justify-center items-center mr-1 rounded-full">5</span>	
					<span class="text-sm text-gray70 w-8 h-8 flex justify-center items-center mr-1 rounded-full">6</span>	
					<span class="text-sm text-gray70 w-8 h-8 flex justify-center items-center mr-1 rounded-full">7</span>	
					<span class="text-sm text-gray70 w-8 h-8 flex justify-center items-center mr-1 rounded-full">..</span>	
					<span class="text-sm text-gray70 w-8 h-8 flex justify-center items-center mr-1 rounded-full">100</span>	
				</div>
			</div>

		</div>
	</div>
</section>

<?php include $root . '/footer.php'; ?>