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
				<?php include '../parts/product-list.php'; ?>
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