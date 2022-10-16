<?php $root = '../..' ?>
<?php include $root . '/header-seller.php'; ?>
<?php $active_tab = 'profile' ?>
<?php $active_sidebar = 'store' ?>
<?php $active_sidebar_nav = 'profile' ?>

<section class="w-full">

	<div class="flex text-gray90 text-sm">
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
				<div class="p-5 flex">
					<div class="w-6/12">
						<img class="mb-5" src="../../assets/image/static/banner2.png">
						<div class="text-center">
							<p class="text-gray50 text-xs mb-2">Ukuran gambar : Maks. 1 Mb</p>
							<p class="mb-10 text-gray50 text-xs">Format gambar : .JPEG, .PNG</p>
							<button class="py-1 px-3 text-primary bg-blue-100 text-xs rounded-md">
								Pilih Foto
							</button>
						</div>
					</div>
					<div class="w-6/12 pl-5">
						<h4 class="font-bold">Biodata Diri</h4>
						<table class="w-full mb-4" border="0">
							<tr>
								<td class="text-gray70 py-2" width="22%">ID Toko</td>
								<td>1231312321</td>
							</tr>
							<tr>
								<td class="text-gray70 py-2">Nama Toko</td>
								<td>TokoPlas  <a class="ml-2 text-primary" href="">Ubah</a></td>
							</tr>
							<tr>
								<td class="text-gray70 py-2">Aktif Sejak</td>
								<td>1 Januari 2021 <a class="ml-2 text-primary" href="">Ubah</a></td>
							</tr>
							<tr>
								<td class="text-gray70 py-2">Jenis Kelamin</td>
								<td>Pria  <a class="ml-2 text-primary" href="">Ubah</a></td>
							</tr>
						</table>
						<h4 class="font-bold">Kontak</h4>
						<table class="w-full mb-5" border="0">
							<tr>
								<td class="text-gray70 py-2" width="22%">Alamat Email</td>
								<td>william123@gmail  <a class="ml-2 text-primary" href="">Ubah</a></td>
							</tr>
							<tr>
								<td class="text-gray70 py-2 flex">Nomor HP</td>
								<td>081526499371 
									<span class="ml-2 py-1 px-2 text-white bg-primary text-xs rounded font-normal">Utama</span>
									<a class="ml-2 text-primary" href="">Atur</a>
								</td>
							</tr>
							<tr>
								<td class="text-gray70 py-2"></td>
								<td>081526499371 <a class="ml-2 text-primary" href=""></a></td>
							</tr>
							<tr>
								<td class="text-gray70 py-2">Domain</td>
								<td>www.jadigampang.com/tokoplastik123 <a class="ml-2 text-primary" href="">Ubah</a></td>
							</tr>
						</table>
						<div class="mb-5">
							<h4 class="font-bold mb-4">Slogan Toko</h4>
							<textarea class="border rounded-md w-full px-3 py-2" rows="4" placeholder="Masukan slogan toko kamu.."></textarea>
						</div>
						<div class="mb-5">
							<h4 class="font-bold mb-4">Deskripsi Toko</h4>
							<textarea class="border rounded-md w-full px-3 py-2" rows="4" placeholder="Masukan deskripsi mengenai toko kamu.."></textarea>
						</div>
						<button class="px-3 py-2.5 text-white bg-primary text-sm rounded flex items-center justify-center">
							Simpan
						</button>
					</div>
				</div>
			</div>
			<!-- eo:section 1 -->
		</div>
	</div>

</section>

<?php include $root . '/footer.php'; ?>