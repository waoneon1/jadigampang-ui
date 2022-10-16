
<?php if ($active_sidebar == 'store'): ?>
	<div class="border-b p-5 w-full">
	 	<ul class="text-sm text-gray90 flex">
	 		<li class="mr-20 hover:text-primary <?php echo $active_tab == 'profile' ? 'text-primary font-bold' : '' ?>">
	 			<a href="./store-profile.php">Profil Toko</a>
	 		</li>
	 		<li class="mr-20 hover:text-primary <?php echo $active_tab == 'waktu' ? 'text-primary font-bold' : '' ?>">
	 			<a href="./store-waktu.php">Waktu Operasional</a>
	 		</li>
	 		<li class="mr-20 hover:text-primary <?php echo $active_tab == 'alamat' ? 'text-primary font-bold' : '' ?>">
	 			<a href="./store-alamat.php">Alamat</a>
	 		</li>
	 		<li class="mr-20 hover:text-primary <?php echo $active_tab == 'pengiriman' ? 'text-primary font-bold' : '' ?>">
	 			<a href="./store-pengiriman.php">Layanan Pengiriman</a>
	 		</li>
	 		<li class="mr-20 hover:text-primary <?php echo $active_tab == 'notif' ? 'text-primary font-bold' : '' ?>">
	 			<a href="./store-notif.php">Notifikasi</a>
	 		</li>
	 		<li class="hover:text-primary <?php echo $active_tab == 'security' ? 'text-primary font-bold' : '' ?>">
	 			<a href="./store-security.php">Keamanan & Login</a>
	 		</li>
	 	</ul>
	</div>
<?php elseif ($active_sidebar == 'product'): ?>
	<div class="border-b p-5 w-full">
	 	<ul class="text-sm text-gray90 flex">
	 		<li class="mr-20 hover:text-primary <?php echo $active_tab == 'all' ? 'text-primary font-bold' : '' ?>">
	 			<a href="./product-list.php">Semua Produk</a>
	 		</li>
	 		<li class="mr-20 hover:text-primary <?php echo $active_tab == 'aktif' ? 'text-primary font-bold' : '' ?>">
	 			<a href="./product-list.php">Aktif</a>
	 		</li>
	 		<li class="mr-20 hover:text-primary <?php echo $active_tab == 'habis' ? 'text-primary font-bold' : '' ?>">
	 			<a href="./product-list.php">Habis</a>
	 		</li>
	 		<li class="mr-20 hover:text-primary <?php echo $active_tab == 'diarsipkan' ? 'text-primary font-bold' : '' ?>">
	 			<a href="./product-list.php">Diarspikan</a>
	 		</li>
	 		<li class="mr-20 hover:text-primary <?php echo $active_tab == 'tindakan' ? 'text-primary font-bold' : '' ?>">
	 			<a href="./product-list.php">Perlu Tindakan</a>
	 		</li>
	 		<li class="hover:text-primary <?php echo $active_tab == 'bermasalah' ? 'text-primary font-bold' : '' ?>">
	 			<a href="./product-list.php">Bermasalah</a>
	 		</li>
	 	</ul>
	</div>
<?php elseif ($active_sidebar == 'product-new'): ?>
	<div class="border-b p-5 w-full">
	 	<ul class="text-sm text-gray90 flex">
	 		<li class="mr-20 hover:text-primary <?php echo $active_tab == 'all' ? 'text-primary font-bold' : '' ?>">
	 			<a href="./product-new.php">Media Produk</a>
	 		</li>
	 		<li class="mr-20 hover:text-primary <?php echo $active_tab == 'aktif' ? 'text-primary font-bold' : '' ?>">
	 			<a href="./product-new.php">Spesifikasi Produk</a>
	 		</li>
	 		<li class="hover:text-primary <?php echo $active_tab == 'bermasalah' ? 'text-primary font-bold' : '' ?>">
	 			<a href="./product-new.php">Pengiriman</a>
	 		</li>
	 	</ul>
	</div>
<?php elseif ($active_sidebar == 'purchase'): ?>
	<div class="border-b p-5 w-full">
	 	<ul class="text-sm text-gray90 flex">
	 		<li class="mr-20 hover:text-primary <?php echo $active_tab == 'semua' ? 'text-primary font-bold' : '' ?>">
	 			<a href="./purchase-semua.php">Semua Produk</a>
	 		</li>
	 		<li class="mr-20 hover:text-primary <?php echo $active_tab == 'belum' ? 'text-primary font-bold' : '' ?>">
	 			<a href="./purchase-semua.php">Belum Bayar</a>
	 		</li>
	 		<li class="mr-20 hover:text-primary <?php echo $active_tab == 'dikemas' ? 'text-primary font-bold' : '' ?>">
	 			<a href="./purchase-semua.php">Dikemas</a>
	 		</li>
	 		<li class="mr-20 hover:text-primary <?php echo $active_tab == 'dikirim' ? 'text-primary font-bold' : '' ?>">
	 			<a href="./purchase-semua.php">Dikirim</a>
	 		</li>
	 		<li class="mr-20 hover:text-primary <?php echo $active_tab == 'selesai' ? 'text-primary font-bold' : '' ?>">
	 			<a href="./purchase-semua.php">Selesai</a>
	 		</li>
	 		<li class="hover:text-primary <?php echo $active_tab == 'gagal' ? 'text-primary font-bold' : '' ?>">
	 			<a href="./purchase-semua.php">Tidak Berhasil</a>
	 		</li>
	 	</ul>
	</div>
<?php elseif ($active_sidebar == 'sale'): ?>
	<div class="border-b p-5 w-full">
	 	<ul class="text-sm text-gray90 flex justify-between">
	 		<li class="hover:text-primary <?php echo $active_tab == 'semua' ? 'text-primary font-bold' : '' ?>">
	 			<a href="./sale-semua.php">Semua </a>
	 		</li>
	 		<li class="hover:text-primary <?php echo $active_tab == 'baru' ? 'text-primary font-bold' : '' ?>">
	 			<a href="./sale-semua.php">Pesanan Baru</a>
	 		</li>
	 		<li class="hover:text-primary <?php echo $active_tab == 'aksi' ? 'text-primary font-bold' : '' ?>">
	 			<a href="./sale-semua.php">Perlu Aksi</a>
	 		</li>
	 		<li class="hover:text-primary <?php echo $active_tab == 'proses' ? 'text-primary font-bold' : '' ?>">
	 			<a href="./sale-semua.php">Proses Produksi</a>
	 		</li>
	 		<li class="hover:text-primary <?php echo $active_tab == 'siap' ? 'text-primary font-bold' : '' ?>">
	 			<a href="./sale-semua.php">Siap Dikirim</a>
	 		</li>
	 		<li class="hover:text-primary <?php echo $active_tab == 'pengiriman' ? 'text-primary font-bold' : '' ?>">
	 			<a href="./sale-semua.php">Dalam Pengiriman</a>
	 		</li>
	 		<li class="hover:text-primary <?php echo $active_tab == 'dikomplain' ? 'text-primary font-bold' : '' ?>">
	 			<a href="./sale-semua.php">Dikomplain</a>
	 		</li>
	 		<li class="hover:text-primary <?php echo $active_tab == 'selesai' ? 'text-primary font-bold' : '' ?>">
	 			<a href="./sale-semua.php">Selesai</a>
	 		</li>
	 		<li class="hover:text-primary <?php echo $active_tab == 'dibatalkan' ? 'text-primary font-bold' : '' ?>">
	 			<a href="./sale-semua.php">Dibatalkan</a>
	 		</li>
	 	</ul>
	</div>
<?php elseif ($active_sidebar == 'promo'): ?>
	<div class="border-b p-5 w-full">
	 	<ul class="text-sm text-gray90 flex">
	 		<li class="mr-20 hover:text-primary <?php echo $active_tab == 'index' ? 'text-primary font-bold' : '' ?>">
	 			<a href="./promo-index.php">Promo</a>
	 		</li>
	 		<li class="mr-20 hover:text-primary <?php echo $active_tab == 'iklan' ? 'text-primary font-bold' : '' ?>">
	 			<a href="./promo-iklan.php">Iklan</a>
	 		</li>
	 		<li class="hover:text-primary <?php echo $active_tab == 'khusus' ? 'text-primary font-bold' : '' ?>">
	 			<a href="./promo-khusus.php">Penawaran Khusus</a>
	 		</li>
	 	</ul>
	</div>
<?php elseif ($active_sidebar == 'finance'): ?>
	<div class="border-b p-5 w-full">
	 	<ul class="text-sm text-gray90 flex">
	 		<li class="mr-20 hover:text-primary <?php echo $active_tab == 'penarikan' ? 'text-primary font-bold' : '' ?>">
	 			<a href="./finance-penarikan.php">Penarikan</a>
	 		</li>
	 		<li class="hover:text-primary <?php echo $active_tab == 'pemasukan' ? 'text-primary font-bold' : '' ?>">
	 			<a href="./finance-pemasukan.php">Pemasukan</a>
	 		</li>
	 	</ul>
	</div>
<?php elseif ($active_sidebar == 'statistic'): ?>
	<div class="border-b p-5 w-full">
	 	<ul class="text-sm text-gray90 flex">
	 		<li class="mr-20 hover:text-primary <?php echo $active_tab == 'mybisnis' ? 'text-primary font-bold' : '' ?>">
	 			<a href="./statistic-mybisnis.php">Bisnis Saya</a>
	 		</li>
	 		<li class="hover:text-primary <?php echo $active_tab == 'staff' ? 'text-primary font-bold' : '' ?>">
	 			<a href="./statistic-staff.php">Staff & Operasional</a>
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