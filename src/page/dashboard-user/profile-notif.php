<?php $root = '../..' ?>
<?php include $root . '/header.php'; ?>
<?php $active_tab = 'notif' ?> <!-- alamat, pembayaran, notif, security -->
<?php $active_sidebar = '' ?> <!-- home, akun, pesan, notif, percakapan -->
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
					<h4>Aktivitas</h4>
					<h4>E-mail</h4>
				</div>
				<div class="px-5 pb-5 pt-8 border-b text-gray90 flex font-bold">
					<img class="svg fill-current w-3.5 mr-2" src="../../assets/image/icon/cart.svg">
					<h4>Transaksi Pembelian</h4>
				</div>
				<?php $trans_items = ["Menunggu Pembayaran","Menunggu Konfirmasi","Pesanan Diproses","Pesanan Dikirim","Pesanan Tiba","Pengingat"] ?>
				<?php foreach ($trans_items as $key => $item): ?>
				<div class="p-5 border-b text-gray90 flex justify-between items-center">
					<label for="notif1<?php echo $key ?>"><?php echo $item ?></label>
					<input class="" id="notif1<?php echo $key ?>" type="checkbox" checked>
				</div>
				<?php endforeach ?>
				<div class="px-5 pb-5 pt-8 border-b text-gray90 flex items-center font-bold">
					<img class="svg fill-current w-3.5 mr-2" src="../../assets/image/icon/percent.svg">
					<h4>Promo</h4>
				</div>
				<div class="p-5 border-b text-gray90 flex justify-between items-center">
					<label for="promo">Promo Jadigampang</label>
					<input class="" id="promo" type="checkbox" checked>
				</div>
			</div>

		</div>
	</div>
</section>

<?php include $root . '/footer.php'; ?>
