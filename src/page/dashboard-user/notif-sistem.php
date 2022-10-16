<?php $root = '../..' ?>
<?php include $root . '/header.php'; ?>
<?php $active_tab = 'sistem' ?> <!-- alamat, pembayaran, notif, security -->
<?php $active_sidebar = 'notif' ?> <!-- home, akun, pesan, notif, chat -->
<?php $active_sidebar_nav = 'sistem' ?> <!-- langganan, disukai | semua, bayar, dikemas, dikirim, selesai, gagal | transaksi, promo, sistem -->

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
				 	- Figma belum ada -
				</div>
			</div>
		</div>
	</div>
</section>

<?php include $root . '/footer.php'; ?>