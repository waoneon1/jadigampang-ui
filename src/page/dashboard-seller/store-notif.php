<?php $root = '../..' ?>
<?php include $root . '/header-seller.php'; ?>
<?php $active_tab = 'notif' ?>
<?php $active_sidebar = 'store' ?>
<?php $active_sidebar_nav = 'notif' ?>

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
				<div class="px-5 pb-5 pt-8 border-b text-gray90 flex font-bold">
					<img class="svg fill-current w-3.5 mr-2" src="../../assets/image/icon/file.svg">
					<h4>Transaksi Penjualan</h4>
				</div>
				<?php $trans_items = ["Pesanan Baru","Pesanan Sudah Tiba","Transaksi Selesai"] ?>
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
			<!-- eo:section 1 -->
		</div>
	</div>

</section>

<?php include $root . '/footer.php'; ?>