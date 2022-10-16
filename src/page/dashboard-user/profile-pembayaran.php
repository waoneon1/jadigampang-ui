<?php $root = '../..' ?>
<?php include $root . '/header.php'; ?>
<?php $active_tab = 'pembayaran' ?> <!-- alamat, pembayaran, notif, security -->
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
				<div class="p-5 border-b text-gray90 flex justify-between">
					<div class="grow pr-10 flex flex-col justify-center">
						<h4 class="text-gray90 font-bold mb-1">Kartu Kredit/Debit</h4>
						<p class="text-gray70 text-xs">Kamu belum menambahkan kartu kredit.</p>
					</div>
					<div class="flex-none w-3/12">
						 <button class="py-2 px-3 w-full text-white bg-primary text-xs rounded-md font-normal flex items-center justify-center">
							<span class="text-base mr-1 font-bold">+</span>
							Tambah Kartu Kredit/Debit
						</button>
					</div>
				</div>
				<div class="p-5 border-b text-gray90 flex justify-between">
					<div class="grow pr-10 flex flex-col justify-center">
						<h4 class="text-gray90 font-bold mb-1">BCA OneKlik</h4>
						<p class="text-gray70 text-xs">Kamu belum menambahkan BCA OneKlik.</p>
					</div>
					<div class="flex-none w-3/12">
						 <button class="py-2 px-3 w-full text-white bg-primary text-xs rounded-md font-normal flex items-center justify-center">
							<span class="text-base mr-1 font-bold">+</span>
							Tambah Kartu BCA One Klik
						</button>
					</div>
				</div>
				<div class="p-5 border-b text-gray90 flex justify-between">
					<div class="grow pr-10 flex flex-col justify-center">
						<h4 class="text-gray90 font-bold mb-1">BRI Direct Debit</h4>
						<p class="text-gray70 text-xs">Kamu belum menambahkan BRI Direct Debit</p>
					</div>
					<div class="flex-none w-3/12">
						 <button class="py-2 px-3 w-full text-white bg-primary text-xs rounded-md font-normal flex items-center justify-center">
							<span class="text-base mr-1 font-bold">+</span>
							Tambah Kartu BRI Direct Debit
						</button>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<?php include $root . '/footer.php'; ?>
