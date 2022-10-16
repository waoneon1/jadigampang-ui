<?php $root = '../..' ?>
<?php include $root . '/header-seller.php'; ?>
<?php $active_tab = 'pengiriman' ?>
<?php $active_sidebar = 'store' ?>
<?php $active_sidebar_nav = 'pengiriman' ?>

<section class="w-full">

	<div class="flex text-gray90">
		<div class="part1 w-56 flex-none text-xs">
			<?php include '../../parts/seller-sidebar.php'; ?>
		</div>
		<div class="part2 grow w-full p-5 text-sm">
			<!-- section 1 -->
			<div class="bg-white rounded shadow-jgmain mb-5">
				<div class="border-b p-5">
					<h2 class="font-bold text-base">Pengaturan Toko</h2>
				</div>
				<!-- tabs -->
				<?php include '../../parts/seller-tabs.php'; ?>
				<div class="p-5 border-b text-gray90 flex justify-between">
					<div class="grow pr-10">
						<div class="flex mb-2">
							<h4 class="font-bold">Kantor</h4>
							<span class="ml-2 py-1 px-2 text-white bg-primary text-xs rounded font-normal">Utama</span>
						</div>
						<table class="w-full" border="0">
							<tr>
								<td class="text-gray70 py-2" width="12%">Alamat</td>
								<td>Jl. H. R. Rasuna Said, Kuningan, Karet Kuningan, Kecamatan Setiabudi, Kota Jakarta Selatan</td>
							</tr>
							<tr>
								<td class="text-gray70 py-2">Telepon</td>
								<td>081562835488</td>
							</tr>
							<tr>
								<td class="text-gray70 py-2" valign="top">Email</td>
								<td class="py-2">tokoplastik123@gmail.com</td>
							</tr>
							<tr>
								<td class="text-gray70 pt-2" valign="top">Fax</td>
								<td class="pt-2">021456112</td>
							</tr>
						</table>
					</div>
					<div class="flex-none flex items-end items-center">
						<div class="pb-4">
							<div class="text-primary flex justify-around text-xs">
								<a href="">Ubah</a>
							</div>
						</div>
					</div>
				</div>
				<div class="p-5 border-b">
					<div class="mb-5">
						<h4 class="mb-1 font-bold">Layanan Pengiriman</h4>
						<p class="text-gray70 text-xs">Pilih layanan pengiriman yang ingin tokomu gunakan.</p>
					</div>
					<div class="rounded border">
						<div class="collapsible-section active items-center p-5 border-b">
							<div class="collapsible-btn flex">
								<input class="mr-4" type="checkbox" name="" checked="checked">
								<img class="mr-4" src="../../assets/image/expedition/anteraja.png">
								<div class="">
									<h4 class="mb-1 font-bold">AnterAja</h4>
									<p class="text-gray70 text-xs">Pilih layanan pengiriman yang ingin tokomu gunakan.</p>
								</div>
								<img class="chevron svg flex-none ml-auto" src="../../assets/image/icon/chevron-top.svg">
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
								<input class="mr-4" type="checkbox" name="" checked="checked">
								<img class="mr-4" src="../../assets/image/expedition/sicepat.png">
								<div class="">
									<h4 class="mb-1 font-bold">SiCepat</h4>
									<p class="text-gray70 text-xs">Regular, Next Day, Same Day, Cargo, Economy</p>
								</div>
								<img class="chevron svg flex-none ml-auto" src="../../assets/image/icon/chevron-top.svg">
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
								<input class="mr-4" type="checkbox" name="" checked="checked">
								<img class="mr-4" src="../../assets/image/expedition/jne.png">
								<div class="">
									<h4 class="mb-1 font-bold">JNE</h4>
									<p class="text-gray70 text-xs">Regular, Next Day, Same Day, Cargo, Economy</p>
								</div>
								<img class="chevron svg flex-none ml-auto" src="../../assets/image/icon/chevron-top.svg">
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
				<div class="p-5 border-b text-gray90 justify-between">
					<div class="mb-5">
						<h4 class="mb-1 font-bold">Armada Pengiriman Toko</h4>
						<p class="text-gray70 text-xs">Kirim langsung barangmu kepada pembeli dengan layanan armada pengiriman toko. Layanan pengiriman toko memerlukan verifikasi dari tim Jadigampang. Daftarkan tokomu segera!</p>
					</div>
					<textarea class="border rounded-md w-full px-3 py-2" rows="5"></textarea>
				</div>
			</div>
			<!-- eo:section 1 -->
		</div>
	</div>

</section>

<?php include $root . '/footer.php'; ?>
