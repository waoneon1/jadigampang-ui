
<?php if ($active_sidebar == 'akun'): ?>
	<div class="border-b p-5 w-full">
	 	<ul class="text-sm text-gray90 flex">
	 		<li class="mr-20 hover:text-primary <?php echo $active_tab == 'langganan' ? 'text-primary font-bold' : '' ?>">
	 			<a href="./akun-langganan.php">Toko Langganan</a>
	 		</li>
	 		<li class="mr-20 hover:text-primary <?php echo $active_tab == 'disukai' ? 'text-primary font-bold' : '' ?>">
	 			<a href="./akun-disukai.php">Produk Disukai</a>
	 		</li>
	 	</ul>
	</div>
<?php elseif ($active_sidebar == 'notif'): ?>
	<div class="border-b p-5 w-full">
	 	<ul class="text-sm text-gray90 flex">
	 		<li class="mr-20 hover:text-primary <?php echo $active_tab == 'transaksi' ? 'text-primary font-bold' : '' ?>">
	 			<a href="./notif-transaksi.php">Transaksi Pembelian</a>
	 		</li>
	 		<li class="mr-20 hover:text-primary <?php echo $active_tab == 'promo' ? 'text-primary font-bold' : '' ?>">
	 			<a href="./notif-promo.php">Promo</a>
	 		</li>
	 		<li class="mr-20 hover:text-primary <?php echo $active_tab == 'sistem' ? 'text-primary font-bold' : '' ?>">
	 			<a href="./notif-sistem.php">Sistem</a>
	 		</li>
	 	</ul>
	</div>
<?php elseif ($active_sidebar == 'pesan'): ?>
	<div class="border-b p-5 w-full">
	 	<ul class="text-sm text-gray90 flex">
	 		<li class="mr-20 hover:text-primary <?php echo $active_tab == 'semua' ? 'text-primary font-bold' : '' ?>">
	 			<a href="./pesan-semua.php">Semua</a>
	 		</li>
	 		<li class="mr-20 hover:text-primary <?php echo $active_tab == 'bayar' ? 'text-primary font-bold' : '' ?>">
	 			<a href="./pesan-bayar.php">Belum Bayar</a>
	 		</li>
	 		<li class="mr-20 hover:text-primary <?php echo $active_tab == 'dikemas' ? 'text-primary font-bold' : '' ?>">
	 			<a href="./pesan-dikemas.php">Dikemas</a>
	 		</li>
	 		<li class="mr-20 hover:text-primary <?php echo $active_tab == 'dikirim' ? 'text-primary font-bold' : '' ?>">
	 			<a href="./pesan-dikirim.php">Dikirim</a>
	 		</li>
	 		<li class="mr-20 hover:text-primary <?php echo $active_tab == 'selesai' ? 'text-primary font-bold' : '' ?>">
	 			<a href="./pesan-selesai.php">Selesai</a>
	 		</li>
	 		<li class="mr-5 hover:text-primary <?php echo $active_tab == 'gagal' ? 'text-primary font-bold' : '' ?>">
	 			<a href="./pesan-gagal.php">Tidak Berhasil</a>
	 		</li>
	 	</ul>
	</div>
<?php else: ?>
	<div class="border-b p-5 w-full">
	 	<ul class="text-sm text-gray90 flex justify-between">
	 		<li class="mr-10 hover:text-primary <?php echo $active_tab == '' ? 'text-primary font-bold' : '' ?>">
	 			<a href="./profile-biodata.php">Biodata Diri</a>
	 		</li>
	 		<li class="mr-10 hover:text-primary <?php echo $active_tab == 'alamat' ? 'text-primary font-bold' : '' ?>">
	 			<a href="./profile-alamat-empty.php">Daftar Alamat</a>
	 		</li>
	 		<li class="mr-10 hover:text-primary <?php echo $active_tab == 'pembayaran' ? 'text-primary font-bold' : '' ?>">
	 			<a href="./profile-pembayaran.php">Pembayaran & Bank</a>
	 		</li>
	 		<li class="mr-10 hover:text-primary <?php echo $active_tab == 'notif' ? 'text-primary font-bold' : '' ?>">
	 			<a href="./profile-notif.php">Pengaturan Notifikasi</a>
	 		</li>
	 		<li class="mr-5 hover:text-primary <?php echo $active_tab == 'security' ? 'text-primary font-bold' : '' ?>">
	 			<a href="./profile-security.php">Keamanan & Login</a>
	 		</li>
	 	</ul>
	</div>
<?php endif ?>