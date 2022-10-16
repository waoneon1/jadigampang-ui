<?php $root = '../..' ?>
<?php include $root . '/header-seller.php'; ?>
<?php $active_tab = 'security' ?>
<?php $active_sidebar = 'store' ?>
<?php $active_sidebar_nav = 'security' ?>

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
					<h4>Pengaturan Pengurus Toko</h4>
				</div>
				<div class="text-gray90 flex items-center justify-between border-b">
					<div href="./chat-active.php" class="flex items-center p-5">
						<div class="flex-none bg-gray90 flex items-center justify-center w-12 h-12 mr-3 font-bold rounded-full text-white">
							<img src="../../assets/image/static/photo.png">
						</div>
						<div class="grow text-xs">
							<div class="text-gray90 mb-1 text-sm">William</div>
							<span class="text-gray70 text-xs">Pemilik Toko</span>
						</div>
					</div>
				</div>
				<div class="text-gray90 flex items-center justify-between border-b">
					<div href="./chat-active.php" class="flex items-center p-5">
						<div class="flex-none bg-gray90 flex items-center justify-center w-12 h-12 mr-3 font-bold rounded-full text-white">
							<img src="../../assets/image/static/photo.png">
						</div>
						<div class="grow text-xs">
							<div class="text-gray90 mb-1 text-sm">Febian</div>
							<span class="text-gray70 text-xs">Admin #1</span>
						</div>
					</div>
					<div class="px-5 flex">
						<button class="text-center py-2.5 px-4 text-primary bg-blue-100 text-sm rounded mr-3">
							Hapus
						</button>
						<button class="text-center py-2.5 px-4 text-white bg-primary text-sm rounded">
							Ubah
						</button>
					</div>
				</div>
				<div class="text-gray90 flex items-center justify-center border-b p-5">
					<button class="text-center py-2.5 px-4 text-white bg-primary text-sm rounded">
						Tambah Pengurus
					</button>
				</div>
			</div>
			<!-- eo:section 1 -->
		</div>
	</div>

</section>

<?php include $root . '/footer.php'; ?>