<?php $root = '../..' ?>
<?php include $root . '/header-seller.php'; ?>
<?php $active_tab = 'new' ?> 
<?php $active_sidebar = 'product-new' ?> 
<?php $active_sidebar_nav = 'new' ?> 


<section class="w-full">

	<div class="flex text-gray90">
		<div class="part1 w-56 flex-none text-xs">
			<?php include '../../parts/seller-sidebar.php'; ?>
		</div>
		<div class="part2 grow w-full p-5 text-sm">
			<!-- section 1 -->
			<div class="bg-white rounded shadow-jgmain mb-5">
				<div class="border-b p-5">
					<h2 class="font-bold text-base">Tambah Produk</h2>
				</div>
				<!-- tabs -->
				<?php include '../../parts/seller-tabs.php'; ?>
			</div>
			<!-- eo:section 1 -->
			<!-- section 2 -->
			<div class="bg-white rounded shadow-jgmain mb-5">
				<div class="border-b p-5">
					<h2 class="font-bold text-sm">Media Produk</h2>
				</div>
				<div class="p-5">
					<h4 class="font-bold text-sm mb-1">Foto Produk</h4>
					<p class="text-gray70 text-xs mb-8">Format gambar .jpg .jpeg .png dan ukuran minimum 300 x 300 px (untuk gambar optimal gunakan ukuran minimum 700 x 700 px).</p>
					<p class="text-gray70 text-xs mb-5 w-full md:w-5/12">Pilih foto produk atau tarik dan letakkan hingga 5 foto sekaligus disini. Cantumkan min. 3 foto yang menarik agar produk semakin menarik pembeli.</p>
				</div>
			</div>
			<!-- eo:section 2 -->
			<!-- section 3 -->
			<div class="bg-white rounded shadow-jgmain mb-5">
				<div class="border-b p-5">
					<h2 class="font-bold text-sm">Spesifikasi Produk</h2>
				</div>
				<div class="p-5 border-b">
					<h4 class="font-bold text-sm mb-1">Informasi Produk</h4>
					<p class="text-gray70 text-xs">Format gambar .jpg .jpeg .png dan ukuran minimum 300 x 300 px (untuk gambar optimal gunakan ukuran minimum 700 x 700 px).</p>
				</div>
				<div class="p-5 border-b flex items-center justify-between">
					<div>
						<h4 class="font-bold text-sm mb-1">Keterangan Produk</h4>
						<p class="text-gray70 text-xs">Tambahkan variasi produk yang tersedia. Maksimum 2 tipe varian untuk 1 produk.</p>
					</div>
					<button class="btn btn-secondary">
						Tambah Varian Produk
						<span class=" ml-2">+</span>
					</button>
				</div>
			</div>
			<!-- eo:section 3 -->
			<!-- section 3 -->
			<div class="bg-white rounded shadow-jgmain mb-5">
				<div class="border-b p-5">
					<h2 class="font-bold text-sm">Pengiriman</h2>
				</div>
				<div class="p-5 border-b">
					<h4 class="font-bold text-sm mb-1">Informasi Pengiriman</h4>
				</div>
				<div class="p-5 border-b">
					<h4 class="font-bold text-sm mb-1">Layanan Pengiriman</h4>
					<p class="text-gray70 text-xs mb-5">Sesuai pengaturan pengiriman toko</p>
					<div class="rounded border">
						<div class="collapsible-section active items-center p-5 border-b">
							<div class="collapsible-btn flex">
								<input class="mr-4" type="checkbox" name="">
								<img class="mr-4" src="<?php echo $root ?>/assets/image/expedition/anteraja.png">
								<div class="">
									<h4 class="mb-1 font-bold">AnterAjazs</h4>
									<p class="text-gray70 text-xs">Pilih layanan pengiriman yang ingin tokomu gunakan.</p>
								</div>
								<img class="chevron svg flex-none ml-auto" src="<?php echo $root ?>/assets/image/icon/chevron-top.svg">
							</div>
							<div class="collapsible-content pt-5 pl-32" style="display: none;">
								<div class="flex mb-4">
									<input class="mr-3" type="checkbox" name="">
									<label>Reguler</label>
								</div>	
								<div class="flex mb-4">
									<input class="mr-3" type="checkbox" name="">
									<label>Next Day</label>
								</div>	
								<div class="flex mb-4">
									<input class="mr-3" type="checkbox" name="">
									<label>Same Day</label>
								</div>	
								<div class="flex mb-4">
									<input class="mr-3" type="checkbox" name="">
									<label>Cargo</label>
								</div>	
								<div class="flex">
									<input class="mr-3" type="checkbox" name="">
									<label>Economy</label>
								</div>
							</div>
						</div>

						<div class="collapsible-section active items-center p-5 border-b">
							<div class="collapsible-btn flex">
								<input class="mr-4" type="checkbox" name="">
								<img class="mr-4" src="<?php echo $root ?>/assets/image/expedition/sicepat.png">
								<div class="">
									<h4 class="mb-1 font-bold">SiCepat</h4>
									<p class="text-gray70 text-xs">Regular, Next Day, Same Day, Cargo, Economy</p>
								</div>
								<img class="chevron svg flex-none ml-auto" src="<?php echo $root ?>/assets/image/icon/chevron-top.svg">
							</div>
							<div class="collapsible-content pt-5 pl-32" style="display: none;">
								<div class="flex mb-4">
									<input class="mr-3" type="checkbox" name="">
									<label>Reguler</label>
								</div>	
								<div class="flex mb-4">
									<input class="mr-3" type="checkbox" name="">
									<label>Next Day</label>
								</div>	
								<div class="flex mb-4">
									<input class="mr-3" type="checkbox" name="">
									<label>Same Day</label>
								</div>	
								<div class="flex mb-4">
									<input class="mr-3" type="checkbox" name="">
									<label>Cargo</label>
								</div>	
								<div class="flex">
									<input class="mr-3" type="checkbox" name="">
									<label>Economy</label>
								</div>
							</div>
						</div>
						<div class="collapsible-section items-center p-5">
							<div class="collapsible-btn flex">
								<input class="mr-4" type="checkbox" name="">
								<img class="mr-4" src="<?php echo $root ?>/assets/image/expedition/jne.png">
								<div class="">
									<h4 class="mb-1 font-bold">JNE</h4>
									<p class="text-gray70 text-xs">Regular, Next Day, Same Day, Cargo, Economy</p>
								</div>
								<img class="chevron svg flex-none ml-auto" src="<?php echo $root ?>/assets/image/icon/chevron-top.svg">
							</div>
							<div class="collapsible-content pt-5 pl-32">
								<div class="flex mb-4">
									<input class="mr-3" type="checkbox" name="">
									<label>Reguler</label>
								</div>	
								<div class="flex mb-4">
									<input class="mr-3" type="checkbox" name="">
									<label>Next Day</label>
								</div>	
								<div class="flex mb-4">
									<input class="mr-3" type="checkbox" name="">
									<label>Same Day</label>
								</div>	
								<div class="flex mb-4">
									<input class="mr-3" type="checkbox" name="">
									<label>Cargo</label>
								</div>	
								<div class="flex">
									<input class="mr-3" type="checkbox" name="">
									<label>Economy</label>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- eo:section 3 -->
			<div class="w-full flex justify-end">
				<button class="btn btn-secondary mr-3">Kembali</button>
				<button class="btn btn-secondary mr-3">Simpan & Tambah</button>
				<button class="btn btn-primary">Simpan</button>
			</div>
		</div>
	</div>

</section>

<?php include $root . '/footer.php'; ?>