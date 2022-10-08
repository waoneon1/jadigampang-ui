<?php $root = '../..' ?>
<?php include $root . '/header.php'; ?>
<?php $active_tab = 'biodata' ?>
<?php $active_sidebar = 'profile' ?>

<section class="container mx-auto">

	<div class="flex pb-5 mb-5">
		<div class="part1 w-44 mr-0 md:mr-5 flex-none text-xs">
			<button class="py-1 w-full text-white bg-primary text-xs rounded-md font-normal mb-4">
				Buka Toko di Jadigampang
				<span class="text-base ml-1 font-bold">+</span>
			</button>
			<div class="rounded shadow-jgmain bg-white">
				<button class="text-gray70 p-3 flex text-xs items-center">
					<img class="svg" src="../../assets/image/icon/chevron-left.svg">
					<span class="ml-2">Sembunyikan Menu</span>
				</button>
				<div class="p-3 bg-blue-100">
       		<div class="flex border-b border-primary pb-3">
          	<img class="flex-none mr-2 w-8 h-8" src="<?php echo $root ?>/assets/image/static/store.png">
          	<div class="grow mr-5">
          		<h4 class="">Nama Toko</h4>
          		<a class="text-primary" href="#">Atur Profile</a>
          	</div>
        	</div>
        	<div class="p-3 flex justify-between text-gray90">
        		<span>Saldo</span>
        		<span>Rp100.000</span>
        	</div>
        	<button class="py-1 w-full text-white bg-primary text-xs rounded-md font-normal">
						Jadigampang Rewards
					</button>
				</div>
				<div class="p-3 text-gray70">
					<ul class="">
						<li class="sidebar-items pb-5">
							<div class="flex items-center mb-2">
								<img class="svg flex-none mr-1" src="../../assets/image/icon/chevron-top.svg">
								<a class="font-bold text-sm grow" href="">Home</a>
							</div>
						</li>
						<li class="sidebar-items pb-5">
							<div class="flex items-center mb-2">
								<img class="svg flex-none mr-1" src="../../assets/image/icon/chevron-top.svg">
								<a class="font-bold text-sm grow" href="">Akun Saya</a>
								<img class="svg flex-none" src="../../assets/image/icon/chevron-top.svg">
							</div>
							<ul class="pl-5">
								<li class="mb-2">Toko Langganan</li>
								<li class="">Produk Disukai</li>
							</ul>
						</li>
						<li class="sidebar-items pb-5">
							<div class="flex items-center mb-2">
								<img class="svg flex-none mr-1" src="../../assets/image/icon/chevron-top.svg">
								<a class="font-bold text-sm grow" href="">Pesanan Saya</a>
								<img class="svg flex-none" src="../../assets/image/icon/chevron-top.svg">
							</div>
							<ul class="pl-5">
								<li class="mb-2">Semua</li>
								<li class="mb-2">Belum Bayar</li>
								<li class="mb-2">Dikemas</li>
								<li class="mb-2">Dikirim</li>
								<li class="mb-2">Selesai</li>
								<li class="">Tidak Berhasil</li>
							</ul>
						</li>
						<li class="sidebar-items pb-5">
							<div class="flex items-center mb-2">
								<img class="svg flex-none mr-1" src="../../assets/image/icon/chevron-top.svg">
								<a class="font-bold text-sm grow" href="">Notifikasi</a>
								<img class="svg flex-none" src="../../assets/image/icon/chevron-top.svg">
							</div>
							<ul class="pl-5">
								<li class="mb-2">Transaksi Pembelian</li>
								<li class="mb-2">Promo</li>
								<li class="">Sistem</li>
							</ul>
						</li>
						<li class="sidebar-items pb-5">
							<div class="flex items-center mb-2">
								<img class="svg flex-none mr-1" src="../../assets/image/icon/chevron-top.svg">
								<a class="font-bold text-sm grow" href="">Percakapan</a>
							</div>
						</li>
					</ul>
				</div>
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