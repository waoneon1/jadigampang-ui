<?php $root = '../..' ?>
<?php include $root . '/header.php'; ?>
<?php $active_tab = 'disukai' ?> <!-- alamat, pembayaran, notif, security -->
<?php $active_sidebar = 'akun' ?> <!-- home, akun, pesan, notif, chat -->
<?php $active_sidebar_nav = 'disukai' ?> <!-- langganan, disukai | semua, bayar, dikemas, dikirim, selesai, gagal | transaksi, promo, sistem -->

<?php include '../../assets/data/product1.php'; ?>

<section class="container mx-auto">

	<div class="flex">
		<div class="part1 w-44 mr-0 md:mr-5 flex-none text-xs">
			<?php include '../../parts/profile-sidebar.php'; ?>
		</div>
		<div class="part2 grow w-full">
				<div class="bg-white mb-5 rounded shadow-jgmain items-center text-sm">
					<!-- tabs -->
					<?php include '../../parts/profile-tabs.php'; ?>
					<div class="p-5 text-gray90 flex">
					 	<div class="w-5/12 flex px-1 py-1 leading-normal w-full bg-gray20 rounded-lg shadow-none text-xs mr-4">
			        <input type="search" class="flex-initial bg-gray20 w-full py-1" placeholder="Cari toko langganan">
			        <a href="" class="text-primary bg-blue-100 rounded-md flex items-center justify-center px-4">
			        	<span class="mr-1">Cari</span>
			          <img class="svg fill-current w-3.5 h-3.5" src="<?php echo $root ?>/assets/image/icon/search.svg">
			        </a>
			        <input type="hidden" name="post_type" value="product">
			      </div>
					</div>
					<div class="grid gap-5 grid-cols-5 px-5 pb-5">
						<?php for ($i=0; $i < 10; $i++): ?>
							<?php $item = $product1[$i] ?>
							<?php include '../../parts/product-list.php'; ?>
						<?php endfor ?>
					</div>
				</div>
		</div>
	</div>
</section>

<?php include $root . '/footer.php'; ?>
