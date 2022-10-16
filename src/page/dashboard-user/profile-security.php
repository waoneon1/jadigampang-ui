<?php $root = '../..' ?>
<?php include $root . '/header.php'; ?>
<?php $active_tab = 'security' ?> <!-- alamat, pembayaran, notif, security -->
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
				<div class="p-5 border-b text-gray90 flex justify-between font-bold bg-blue-100">
					<h4>Aktivitas Login</h4>
				</div>
				<div class="p-5 border-b text-gray90 flex items-center justify-between">
					<div class="flex items-center ">
						<div class="mr-5 flex-none">
							<img class="svg fill-current" src="../../assets/image/icon/security-pc.svg">
						</div>
						<div class="text-sm grow">
							<p class="mb-1">Chrome di Windows 10 • Jakarta, Indonesia</p>
							<p class="text-gray70 mb-1">156.130.181.102</p>
							<p class="text-primary font-bold">Sedang Aktif</p>
						</div>
					</div>
				</div>
				<div class="p-5 border-b text-gray90 flex items-center justify-between">
					<div class="flex items-center ">
						<div class="mr-5 flex-none">
							<img class="svg fill-current" src="../../assets/image/icon/security-mobile.svg">
						</div>
						<div class="text-sm grow">
							<p class="mb-1">Chrome di Android • Jakarta, Indonesia</p>
							<p class="text-gray70 mb-1">116.120.141.106</p>
							<p class="text-gray70">Aktif 11 Mei 2022, 18.51</p>
						</div>
					</div>
					<div>
						<button class="text-center py-2.5 px-4 text-primary bg-blue-100 text-sm rounded">
							Hapus Perangkat
						</button>
					</div>
				</div>
				<div class="p-5 border-b text-gray90 flex items-center justify-center">
					<a class="flex items-center justify-center" href="">
						<p class="text-gray90 text-sm mr-1">Lihat lebih banyak</p>
						<img class="chevron svg rotate-180" src="../../assets/image/icon/chevron-top.svg">
					</a>
				</div>
			</div>

			<div class="bg-white mb-5 rounded shadow-jgmain items-center text-sm">
				<div class="p-5 border-b text-gray90 flex justify-between font-bold bg-blue-100">
					<h4>Login</h4>
				</div>
				<div class="p-5 text-gray90 flex items-center justify-between">
					<div class="flex items-center ">
						<div class="mr-5 flex-none">
							<img class="svg fill-current" src="../../assets/image/icon/security-key.svg">
						</div>
						<div class="text-sm grow">
							<p class="">Ubah Kata Sandi</p>
						</div>
					</div>
					<div>
						<button class="text-center py-2.5 px-4 text-primary bg-blue-100 text-sm rounded">
							Ubah
						</button>
					</div>
				</div>
			</div>

			<div class="bg-white mb-5 rounded shadow-jgmain items-center text-sm">
				<div class="p-5 border-b text-gray90 flex justify-between font-bold bg-blue-100">
					<h4>Privasi</h4>
				</div>
				<div class="p-5 text-gray90 flex items-center justify-between">
					<div class="flex items-center ">
						<div class="mr-5 flex-none">
							<img class="svg fill-current" src="../../assets/image/icon/security-pc.svg">
						</div>
						<div class="text-sm grow">
							<p class="mb-1">Tampilkan nama user saya dalam daftar followers toko</p>
							<p class="text-gray70">Daftar followers hanya dapat dilihat pihak toko</p>
						</div>
					</div>
					<div>
						<input class="" type="checkbox" checked>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<?php include $root . '/footer.php'; ?>
