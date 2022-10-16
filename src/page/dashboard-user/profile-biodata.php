<?php $root = '../..' ?>
<?php include $root . '/header.php'; ?>
<?php $active_tab = '' ?> <!-- alamat, pembayaran, notif, security -->
<?php $active_sidebar = '' ?> <!-- home, akun, pesan, notif, chat -->
<?php $active_sidebar_nav = '' ?> <!-- langganan, disukai | semua, bayar, dikemas, dikirim, selesai, gagal | transaksi, promo, sistem -->

<section class="container mx-auto">

	<div class="flex pb-5 mb-5">
		<div class="part1 w-44 mr-0 md:mr-5 flex-none text-xs">
			<?php include '../../parts/profile-sidebar.php'; ?>
		</div>
		<div class="part2 grow w-full">
			
			<div class="bg-white mb-5 rounded shadow-jgmain items-center">
				
				<!-- tabs -->
				<?php include '../../parts/profile-tabs.php'; ?>

				<div class="flex">
					<div class="flex-none p-5 mr-5">
						<img class="mb-5" src="../../assets/image/static/store-square.png">
						<div class="text-center">
							<button class="mb-5 py-1 px-3 text-primary bg-blue-100 text-xs rounded-md">
								Pilih Foto
							</button>
							<p class="text-gray50 text-xs mb-2">Ukuran gambar : Maks. 1 Mb</p>
							<p class="text-gray50 text-xs">Format gambar : .JPEG, .PNG</p>
						</div>
					</div>
					<div class="grow">
						<div class="py-5 pr-5 border-b text-gray90 text-sm">
							<h4 class="font-bold">Biodata Diri</h4>
							<table class="w-full mb-4" border="0">
								<tr>
									<td class="text-gray70 py-2" width="22%">Nama Akun</td>
									<td>William123</td>
								</tr>
								<tr>
									<td class="text-gray70 py-2">Nama Lengkap</td>
									<td>Wiliam  <a class="ml-2 text-primary" href="">Ubah</a></td>
								</tr>
								<tr>
									<td class="text-gray70 py-2">Tanggal Lahir</td>
									<td>1 Januari 1990  <a class="ml-2 text-primary" href="">Ubah</a></td>
								</tr>
								<tr>
									<td class="text-gray70 py-2">Jenis Kelamin</td>
									<td>Pria  <a class="ml-2 text-primary" href="">Ubah</a></td>
								</tr>
							</table>
							<h4 class="font-bold">Kontak</h4>
							<table class="w-full" border="0">
								<tr>
									<td class="text-gray70 py-2" width="22%">Alamat Email</td>
									<td>william123@gmail  <a class="ml-2 text-primary" href="">Ubah</a></td>
								</tr>
								<tr>
									<td class="text-gray70 py-2">Nomor HP</td>
									<td>081526499371 <a class="ml-2 text-primary" href="">Ubah</a></td>
								</tr>
							</table>
						</div>
						<div class="py-5 pr-5 border-b">
							<button class="inline-block text-center py-2.5 px-5 text-white bg-primary border border-primary text-sm rounded mr-3 font-normal" data-target="simpleModal_1" data-toggle="modal">Simpan</button>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<?php include $root . '/footer.php'; ?>