<?php
/*
Sidebar
- home
- chat
- store
	- profile
	- waktu
	- alamat
	- pengiriman
	- notif
	- security
- product
	- list
	- new
- purchase
	- semua
	- belum
	- dikemas
	- dikirim
	- selesai
	- gagal
- sale
	- semua
	- baru 
	- aksi
	- proses
	- siap
	- pengiriman
	- dikomplain
	- selesai
	- dibatalkan
- promo
	- index
	- iklan
	- khusus
- finance
	- toko
	- rekening
	- addbank
- statistic
	- mybisnis
	- staff
- performance
	- level
	- kesehatan
- service
	- chat
	- faq
*/
?>

<div class="shadow-jgmain bg-white">
	<button class="text-gray70 p-3 flex text-xs items-center">
		<img class="svg" src="../../assets/image/icon/chevron-left.svg">
		<span class="ml-2">Sembunyikan Menu</span>
	</button><!-- 
	<div class="p-3 hover:bg-blue-100 <?php echo $active_sidebar == '' ? 'bg-blue-100 text-primary' : '' ?>">

	</div> -->
	<div class="text-gray70">
		<ul class="">
			<li class="bg-blue-100 px-3 pt-2.5">
		 		<div class="flex border-b border-primaryFocus pb-3">
		    	<img class="flex-none mr-2 w-8 h-8" src="<?php echo $root ?>/assets/image/static/store.png">
		    	<div class="grow mr-5">
		    		<h4 class="text-gray90 mb-1">Nama Toko</h4>
		    		<div class="flex text-xs text-gray90">
		    			<div class="flex pr-2">
								<img class="svg fill-current text-warning mr-1" src="<?php echo $root ?>/assets/image/icon/star.svg">
								<span class="">4.9</span>
							</div>
							<div class="flex pr-2">
								<img class="svg fill-current w-4 h-4 mr-1" src="<?php echo $root ?>/assets/image/icon/user.svg">
								<span>20</span>
							</div>
		    		</div>
		    	</div>
		  	</div>
		  	<div class="py-3 flex justify-between text-gray90">
		  		<span>Saldo Toko</span>
		  		<span>Rp100.000</span>
		  	</div>
		  	<button class="btn-sm btn-primary w-full mb-3">
					JG Seller Rewards
				</button>
				<div class="bg-white p-3 text-gray90 border-b" style="margin-right: -12px;margin-left: -12px;">
					<div class="flex justify-between mb-3">
						<span class="px-2 py-0.5 text-white bg-primary text-xs rounded-md font-normal">
							Toko Buka
						</span>
						<div class="flex">
							<img class="svg mr-0.5 fill-current text-black" src="<?php echo $root ?>/assets/image/icon/clock-line.svg">
							<p class="text-xs mr-0.5">24 Jam</p>
							<img class="svg fill-current text-gray70" src="<?php echo $root ?>/assets/image/icon/gear-line.svg">
						</div>
					</div>
					<div>
						<label class="switch h-5 w-11 inline-block relative">
						  <input type="checkbox" checked>
						  <span class="slider round"></span>
						</label>
					</div>
				</div>
			</li>
			<li class="sidebar-items px-3 py-2.5 hover:bg-blue-100 hover:text-primary <?php echo $active_sidebar == 'home' ? 'bg-blue-100 text-primary' : '' ?>">
				<div class="flex items-center">
					<img class="svg w-4 h-4 flex-none mr-1 fill-current" src="../../assets/image/icon/home-line.svg">
					<a class="font-bold text-sm grow" href="./index.php">Home</a>
				</div>
			</li>
			<li class="sidebar-items px-3 py-2.5 hover:bg-blue-100 hover:text-primary <?php echo $active_sidebar == 'chat' ? 'bg-blue-100 text-primary' : '' ?>">
				<div class="flex items-center relative">
					<img class="svg w-4 h-4 flex-none mr-1 fill-current" src="../../assets/image/icon/mail-line.svg">
					<a class="font-bold text-sm inline block" href="./chat.php">Percakapan</a>
				</div>
			</li>
			
			<li class="collapsible-section px-3 py-2.5 hover:bg-blue-100 hover:text-primary <?php echo $active_sidebar == 'store' ? 'bg-blue-100 text-primary' : '' ?>">
				<div class="collapsible-btn flex items-center">
					<img class="svg w-4 h-4 flex-none mr-1 fill-current" src="../../assets/image/icon/store-line.svg">
					<span class="font-bold text-sm grow" href="">Pengaturan Toko</span>
					<img class="chevron svg flex-none" src="../../assets/image/icon/chevron-top.svg">
				</div>
				<ul class="collapsible-content mt-2 pl-5 text-gray70">
					<li class="mb-2"><a class="<?php echo $active_sidebar_nav == 'profile' ? 'text-primary' : '' ?> hover:text-primary" href="./store-profile.php">Profil Toko</a></li>
					<li class="mb-2"><a class="<?php echo $active_sidebar_nav == 'waktu' ? 'text-primary' : '' ?> hover:text-primary" href="./store-waktu.php">Waktu Operasional</a></li>
					<li class="mb-2"><a class="<?php echo $active_sidebar_nav == 'alamat' ? 'text-primary' : '' ?> hover:text-primary" href="./store-alamat.php">Alamat</a></li>
					<li class="mb-2"><a class="<?php echo $active_sidebar_nav == 'pengiriman' ? 'text-primary' : '' ?> hover:text-primary" href="./store-pengiriman.php">Layanan Pengiriman</a></li>
					<li class="mb-2"><a class="<?php echo $active_sidebar_nav == 'notif' ? 'text-primary' : '' ?> hover:text-primary" href="./store-notif.php">Notifikasi</a></li>
					<li class=""><a class="<?php echo $active_sidebar_nav == 'security' ? 'text-primary' : '' ?> hover:text-primary" href="./store-security.php">Keamanan & Login</a></li>
				</ul>
			</li>

			<li class="collapsible-section px-3 py-2.5 hover:bg-blue-100 hover:text-primary <?php echo $active_sidebar == 'product' ? 'bg-blue-100 text-primary' : '' ?>">
				<div class="collapsible-btn flex items-center">
					<img class="svg w-4 h-4 flex-none mr-1 fill-current" src="../../assets/image/icon/box-line.svg">
					<span class="font-bold text-sm grow" href="">Produk</span>
					<img class="chevron svg flex-none" src="../../assets/image/icon/chevron-top.svg">
				</div>
				<ul class="collapsible-content mt-2 pl-5 text-gray70">
					<li class="mb-2"><a class="<?php echo $active_sidebar_nav == 'list' ? 'text-primary' : '' ?> hover:text-primary" href="./product-list.php">Daftar Produk</a></li>
					<li class=""><a class="<?php echo $active_sidebar_nav == 'new' ? 'text-primary' : '' ?> hover:text-primary" href="./product-new.php">Tambah Produk Baru</a></li>
				</ul>
			</li>

			<li class="collapsible-section px-3 py-2.5 hover:bg-blue-100 hover:text-primary <?php echo $active_sidebar == 'purchase' ? 'bg-blue-100 text-primary' : '' ?>">
				<div class="collapsible-btn flex items-center">
					<img class="svg w-4 h-4 flex-none mr-1 fill-current" src="../../assets/image/icon/cart-line.svg">
					<span class="font-bold text-sm grow" href="">Aktivitas Pembelian Toko</span>
					<img class="chevron svg flex-none" src="../../assets/image/icon/chevron-top.svg">
				</div>
				<ul class="collapsible-content mt-2 pl-5 text-gray70">
					<li class="mb-2"><a class="<?php echo $active_sidebar_nav == 'semua' ? 'text-primary' : '' ?> hover:text-primary" href="./purchase-semua.php">Semua</a></li>
					<li class="mb-2"><a class="<?php echo $active_sidebar_nav == 'belum ' ? 'text-primary' : '' ?> hover:text-primary" href="./purchase-semua.php">Belum Bayar</a></li>
					<li class="mb-2"><a class="<?php echo $active_sidebar_nav == 'dikemas' ? 'text-primary' : '' ?> hover:text-primary" href="./purchase-semua.php">Dikemas</a></li>
					<li class="mb-2"><a class="<?php echo $active_sidebar_nav == 'dikirim' ? 'text-primary' : '' ?> hover:text-primary" href="./purchase-semua.php">Dikirim</a></li>
					<li class="mb-2"><a class="<?php echo $active_sidebar_nav == 'selesai' ? 'text-primary' : '' ?> hover:text-primary" href="./purchase-semua.php">Selesai</a></li>
					<li class=""><a class="<?php echo $active_sidebar_nav == 'gagal' ? 'text-primary' : '' ?> hover:text-primary" href="./purchase-semua.php">Tidak Berhasil</a></li>
				</ul>
			</li>

			<li class="collapsible-section px-3 py-2.5 hover:bg-blue-100 hover:text-primary <?php echo $active_sidebar == 'sale' ? 'bg-blue-100 text-primary' : '' ?>">
				<div class="collapsible-btn flex items-center">
					<img class="svg w-4 h-4 flex-none mr-1 fill-current" src="../../assets/image/icon/file-line.svg">
					<span class="font-bold text-sm grow" href="">Aktivitas Penjualan Toko</span>
					<img class="chevron svg flex-none" src="../../assets/image/icon/chevron-top.svg">
				</div>
				<ul class="collapsible-content mt-2 pl-5 text-gray70">
					<li class="mb-2"><a class="<?php echo $active_sidebar_nav == 'semua' ? 'text-primary' : '' ?> hover:text-primary" href="./sale-semua.php">Semua</a></li>
					<li class="mb-2"><a class="<?php echo $active_sidebar_nav == 'baru  ' ? 'text-primary' : '' ?> hover:text-primary" href="./sale-semua.php">Pesanan Baru</a></li>
					<li class="mb-2"><a class="<?php echo $active_sidebar_nav == 'aksi' ? 'text-primary' : '' ?> hover:text-primary" href="./sale-semua.php">Perlu Aksi</a></li>
					<li class="mb-2"><a class="<?php echo $active_sidebar_nav == 'proses' ? 'text-primary' : '' ?> hover:text-primary" href="./sale-semua.php">Proses Produksi</a></li>
					<li class="mb-2"><a class="<?php echo $active_sidebar_nav == 'siap' ? 'text-primary' : '' ?> hover:text-primary" href="./sale-semua.php">Siap Dikirim</a></li>
					<li class="mb-2"><a class="<?php echo $active_sidebar_nav == 'pengiriman' ? 'text-primary' : '' ?> hover:text-primary" href="./sale-semua.php">Dalam Pengiriman</a></li>
					<li class="mb-2"><a class="<?php echo $active_sidebar_nav == 'dikomplain' ? 'text-primary' : '' ?> hover:text-primary" href="./sale-semua.php">Dikomplain</a></li>
					<li class="mb-2"><a class="<?php echo $active_sidebar_nav == 'selesai' ? 'text-primary' : '' ?> hover:text-primary" href="./sale-semua.php">Selesai</a></li>
					<li class=""><a class="<?php echo $active_sidebar_nav == 'dibatalkan' ? 'text-primary' : '' ?> hover:text-primary" href="./sale-semua.php">Dibatalkan</a></li>
				</ul>
			</li>

			<li class="collapsible-section px-3 py-2.5 hover:bg-blue-100 hover:text-primary <?php echo $active_sidebar == 'promo' ? 'bg-blue-100 text-primary' : '' ?>">
				<div class="collapsible-btn flex items-center">
					<img class="svg w-4 h-4 flex-none mr-1 fill-current" src="../../assets/image/icon/voucher-line.svg">
					<span class="font-bold text-sm grow" href="">Promo & Iklan</span>
					<img class="chevron svg flex-none" src="../../assets/image/icon/chevron-top.svg">
				</div>
				<ul class="collapsible-content mt-2 pl-5 text-gray70">
					<li class="mb-2"><a class="<?php echo $active_sidebar_nav == 'index' ? 'text-primary' : '' ?> hover:text-primary" href="./promo-index.php">Promo</a></li>
					<li class="mb-2"><a class="<?php echo $active_sidebar_nav == 'iklan' ? 'text-primary' : '' ?> hover:text-primary" href="./promo-iklan.php">Iklan</a></li>
					<li class=""><a class="<?php echo $active_sidebar_nav == 'khusus' ? 'text-primary' : '' ?> hover:text-primary" href="./promo-khusus.php">Penawaran Khusus</a></li>
				</ul>
			</li>

			<li class="collapsible-section px-3 py-2.5 hover:bg-blue-100 hover:text-primary <?php echo $active_sidebar == 'finance' ? 'bg-blue-100 text-primary' : '' ?>">
				<div class="collapsible-btn flex items-center">
					<img class="svg w-4 h-4 flex-none mr-1 fill-current" src="../../assets/image/icon/voucher-line.svg">
					<span class="font-bold text-sm grow" href="">Keuangan</span>
					<img class="chevron svg flex-none" src="../../assets/image/icon/chevron-top.svg">
				</div>
				<ul class="collapsible-content mt-2 pl-5 text-gray70">
					<li class="mb-2"><a class="<?php echo $active_sidebar_nav == 'toko' ? 'text-primary' : '' ?> hover:text-primary" href="./finance-penarikan.php">Keuangan Toko</a></li>
					<li class="mb-2"><a class="<?php echo $active_sidebar_nav == 'rekening' ? 'text-primary' : '' ?> hover:text-primary" href="./finance-rekening.php">Rekening Bank</a></li>
					<li class=""><a class="<?php echo $active_sidebar_nav == 'addbank' ? 'text-primary' : '' ?> hover:text-primary" href="./finance-addbank.php">Tambah Bank</a></li>
				</ul>
			</li>

			<li class="collapsible-section px-3 py-2.5 hover:bg-blue-100 hover:text-primary <?php echo $active_sidebar == 'statistic' ? 'bg-blue-100 text-primary' : '' ?>">
				<div class="collapsible-btn flex items-center">
					<img class="svg w-4 h-4 flex-none mr-1 fill-current" src="../../assets/image/icon/chart-line.svg">
					<span class="font-bold text-sm grow">Statistik Toko</span>
					<img class="chevron svg flex-none" src="../../assets/image/icon/chevron-top.svg">
				</div>
				<ul class="collapsible-content mt-2 pl-5 text-gray70">
					<li class="mb-2"><a class="<?php echo $active_sidebar_nav == 'mybisnis' ? 'text-primary' : '' ?> hover:text-primary" href="./statistic-mybisnis.php">Bisnis Saya</a></li>
					<li class=""><a class="<?php echo $active_sidebar_nav == 'staff' ? 'text-primary' : '' ?> hover:text-primary" href="./statistic-staff.php">Staff & Operasional</a></li>
				</ul>
			</li>

			<li class="collapsible-section px-3 py-2.5 hover:bg-blue-100 hover:text-primary <?php echo $active_sidebar == 'performance' ? 'bg-blue-100 text-primary' : '' ?>">
				<div class="collapsible-btn flex items-center">
					<img class="svg w-4 h-4 flex-none mr-1 fill-current" src="../../assets/image/icon/star-line.svg">
					<span class="font-bold text-sm grow">Performa Toko</span>
					<img class="chevron svg flex-none" src="../../assets/image/icon/chevron-top.svg">
				</div>
				<ul class="collapsible-content mt-2 pl-5 text-gray70">
					<li class="mb-2"><a class="<?php echo $active_sidebar_nav == 'level' ? 'text-primary' : '' ?> hover:text-primary" href="./performance-level.php">Level & Rewards</a></li>
					<li class=""><a class="<?php echo $active_sidebar_nav == 'kesehatan' ? 'text-primary' : '' ?> hover:text-primary" href="./performance-kesehatan.php">Kesehatan Toko</a></li>
				</ul>
			</li>

			<li class="collapsible-section px-3 py-2.5 hover:bg-blue-100 hover:text-primary <?php echo $active_sidebar == 'service' ? 'bg-blue-100 text-primary' : '' ?>">
				<div class="collapsible-btn flex items-center">
					<img class="svg w-4 h-4 flex-none mr-1 fill-current" src="../../assets/image/icon/headset-line.svg">
					<span class="font-bold text-sm grow">Fitur Pelayanan</span>
					<img class="chevron svg flex-none" src="../../assets/image/icon/chevron-top.svg">
				</div>
				<ul class="collapsible-content mt-2 pl-5 text-gray70">
					<li class="mb-2"><a class="<?php echo $active_sidebar_nav == 'chat' ? 'text-primary' : '' ?> hover:text-primary" href="./service-chat.php">Asisten Chat</a></li>
					<li class=""><a class="<?php echo $active_sidebar_nav == 'faq' ? 'text-primary' : '' ?> hover:text-primary" href="./service-faq.php">Asisten FAQ</a></li>
				</ul>
			</li>

		</ul>
	</div>
</div>