<?php $root = '../..' ?>
<?php include $root . '/header.php'; ?>
<?php $active_tab = 'alamat' ?> <!-- alamat, pembayaran, notif, security -->
<?php $active_sidebar = '' ?> <!-- home, akun, pesan, notif, percakapan -->
<?php $active_sidebar_nav = '' ?>  <!-- langganan, disukai | semua, bayar, dikemas, dikirim, selesai, gagal | transaksi, promo, sistem -->

<section class="container mx-auto">

	<div class="flex pb-5 mb-5">
		<div class="part1 w-44 mr-0 md:mr-5 flex-none text-xs">
			<?php include '../../parts/profile-sidebar.php'; ?>
		</div>
		<div class="part2 grow w-full">
			<div class="bg-white mb-5 rounded shadow-jgmain items-center">
				<!-- tabs -->
				<?php include '../../parts/profile-tabs.php'; ?>
				<div class="p-5 text-gray90 flex justify-center">
				 	<div class="text-center py-12">
				 		<img class="mb-5 mx-auto" src="../../assets/image/address-empty.svg">
				 		<p class="text-gray90 text-xs mb-5">Kamu Belum Menambahkan Alamat</p>
				 		<a href="./profile-alamat.php" class="py-2 px-3 text-white bg-primary text-xs rounded-md font-normal flex justify-center items-center mx-auto">
							<span class="text-base mr-1 font-bold">+</span>
							Tambah Alamat Baru
						</a>
				 	</div>
				</div>
			</div>

		</div>
	</div>
</section>

<?php include $root . '/footer.php'; ?>