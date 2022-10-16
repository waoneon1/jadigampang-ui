<?php $root = '../..' ?>
<?php include $root . '/header.php'; ?>
<?php $active_tab = 'promo' ?> <!-- alamat, pembayaran, notif, security -->
<?php $active_sidebar = 'notif' ?> <!-- home, akun, pesan, notif, chat -->
<?php $active_sidebar_nav = 'promo' ?> <!-- langganan, disukai | semua, bayar, dikemas, dikirim, selesai, gagal | transaksi, promo, sistem -->

<section class="container mx-auto">

	<div class="flex pb-5 mb-5">
		<div class="part1 w-44 mr-0 md:mr-5 flex-none text-xs">
			<?php include '../../parts/profile-sidebar.php'; ?>
		</div>
		<div class="part2 grow w-full">
			<div class="bg-white mb-5 rounded shadow-jgmain items-center text-sm">
				<!-- tabs -->
				<?php include '../../parts/profile-tabs.php'; ?>
				<div class="p-5 border-b text-primary text-sm flex justify-end">
				 	<a href="">Tandai sebagai sudah dibaca</a>
				</div>
				
				<div class="border-b p-5 flex text-gray90 text-sm">
					<div class="w-full grow flex">
						<div class="flex items-center">
							<div class="flex-none flex">
								<img class="w-thumb h-thumb mr-4" src="../../assets/image/static/product/item1.png">
							</div>
							<div class="grow">
								<p class="mb-2">SPESIAL : Gratis Ongkir</p>
								<p class="mb-2 text-gray70 text-xs">Ayo pakai voucher gratis ongkir</p>
								<p class="text-gray70 text-xs">06-05-2022 13:56</p>
							</div>
						</div>
					</div>
					<div class="flex-none flex items-center justify-end">
						<button class="px-3 py-3 text-primary bg-blue-100 text-sm rounded-md">
							Tampilkan Rincian
						</button>
					</div>
				</div>

				<div class="border-b p-5 flex text-gray90 text-sm">
					<div class="w-full grow flex">
						<div class="flex items-center">
							<div class="flex-none flex">
								<img class="w-thumb h-thumb mr-4" src="../../assets/image/static/product/item2.png">
							</div>
							<div class="grow">
								<p class="mb-2">SPESIAL; Gratis Ongkir</p>
								<p class="mb-2 text-gray70 text-xs">Ayo pakai voucher gratis ongkir</p>
								<p class="text-gray70 text-xs">06-05-2022 12:11</p>
							</div>
						</div>
					</div>
					<div class="flex-none flex items-center justify-end">
						<button class="px-3 py-3 text-primary bg-blue-100 text-sm rounded-md">
							Tampilkan Rincian
						</button>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>

<?php include $root . '/footer.php'; ?>