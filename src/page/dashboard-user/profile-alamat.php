<?php $root = '../..' ?>
<?php include $root . '/header.php'; ?>
<?php $active_tab = 'alamat' ?> <!-- alamat, pembayaran, notif, security -->
<?php $active_sidebar = '' ?> <!-- home, akun, pesan, notif, chat -->
<?php $active_sidebar_nav = '' ?> <!-- langganan, disukai | semua, bayar, dikemas, dikirim, selesai, gagal | transaksi, promo, sistem -->

<section class="container mx-auto">

	<div class="flex pb-5 mb-5">
		<div class="part1 w-44 mr-0 md:mr-5 flex-none text-xs">
			<?php include '../../parts/profile-sidebar.php'; ?>
		</div>
		<div class="part2 grow w-full">
			<div class="bg-white mb-5 rounded shadow-jgmain items-center text-sm">
				<!-- tabs -->
				<?php include '../../parts/profile-tabs.php'; ?>
				<div class="p-5 border-b text-gray90 flex">
				 	<div class="w-5/12 flex px-1 py-1 leading-normal w-full bg-gray20 rounded-lg shadow-none text-xs mr-4">
		        <input type="search" class="flex-initial bg-gray20 w-full py-1" placeholder="Cari alamat atau nama penerima">
		        <a href="" class="text-primary bg-blue-100 rounded-md flex items-center justify-center px-4">
		        	<span class="mr-1">Cari</span>
		          <img class="svg fill-current w-3.5 h-3.5" src="<?php echo $root ?>/assets/image/icon/search.svg">
		        </a>
		        <input type="hidden" name="post_type" value="product">
		      </div>
		      <button class="py-2 px-3 text-white bg-primary text-xs rounded-md font-normal flex items-center">
						<span class="text-base mr-1 font-bold">+</span>
						Tambah Alamat Baru
					</button>
				</div>
				<div class="p-5 border-b text-gray90 flex justify-between">
					<div class="grow pr-10">
						<div class="flex mb-2">
							<h4 class="font-bold">Rumah</h4>
							<span class="ml-2 py-1 px-2 text-white bg-primary text-xs rounded font-normal">Utama</span>
						</div>
						<table class="" border="0">
							<tr>
								<td class="text-gray70 py-2" width="22%">Nama Lengkap</td>
								<td>William123</td>
							</tr>
							<tr>
								<td class="text-gray70 py-2">No. Telp</td>
								<td>081562835488</td>
							</tr>
							<tr>
								<td class="text-gray70 pt-2" valign="top">Alamat</td>
								<td class="pt-2">Jl. Klampis Jaya No.35, Klampis Ngasem, Kec. Sukolilo, Kota SBY, Jawa Timur 60116</td>
							</tr>
						</table>
					</div>
					<div class="flex-none flex items-end">
						<div class="pb-4">
							<div class="text-primary flex justify-around mb-4 text-xs">
								<a href="">Ubah</a>
								<a href="">Hapus</a>
							</div>
							<button class="text-center py-2.5 px-3 text-gray60 bg-gray30 text-sm rounded" disabled="disabled">
								Atur Sebagai Utama
							</button>
						</div>
					</div>
				</div>
				<div class="p-5 border-b text-gray90 flex justify-between">
					<div class="grow pr-10">
						<div class="flex mb-2">
							<h4 class="font-bold">Kantor</h4>
							<!-- <span class="ml-2 py-1 px-2 text-white bg-primary text-xs rounded font-normal">Utama</span> -->
						</div>
						<table class="" border="0">
							<tr>
								<td class="text-gray70 py-2" width="22%">Nama Lengkap</td>
								<td>William123</td>
							</tr>
							<tr>
								<td class="text-gray70 py-2">No. Telp</td>
								<td>081562835488</td>
							</tr>
							<tr>
								<td class="text-gray70 pt-2" valign="top">Alamat</td>
								<td class="pt-2">Jl. Pahlawan, Alun-alun Contong, Kec. Bubutan, Kota SBY, Jawa Timur 60174</td>
							</tr>
						</table>
					</div>
					<div class="flex-none flex items-end">
						<div class="pb-4">
							<div class="text-primary flex justify-around mb-4 text-xs">
								<a href="">Ubah</a>
								<a href="">Hapus</a>
							</div>
							<button class="text-center py-2.5 px-3 text-primary bg-blue-100 text-sm rounded">
								Atur Sebagai Utama
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include $root . '/footer.php'; ?>