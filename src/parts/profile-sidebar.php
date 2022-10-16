<?php
// home
// akun
// pesan
// notif
// percakapan
?>

<button class="py-1 w-full text-white bg-primary text-xs rounded-md font-normal mb-4">
	Buka Toko di Jadigampang
	<span class="text-base ml-1 font-bold">+</span>
</button>

<div class="rounded shadow-jgmain bg-white">
	<button class="text-gray70 p-3 flex text-xs items-center">
		<img class="svg" src="../../assets/image/icon/chevron-left.svg">
		<span class="ml-2">Sembunyikan Menu</span>
	</button>
	<div class="p-3 hover:bg-blue-100 <?php echo $active_sidebar == '' ? 'bg-blue-100 text-primary' : '' ?>">
 		<div class="flex border-b border-primary pb-3">
    	<img class="flex-none mr-2 w-8 h-8" src="<?php echo $root ?>/assets/image/static/store.png">
    	<div class="grow mr-5">
    		<h4 class="text-gray90">Nama Toko</h4>
    		<a class="text-primary" href="./profile-biodata.php">Atur Profile</a>
    	</div>
  	</div>
  	<div class="py-3 flex justify-between text-gray90">
  		<span>Saldo</span>
  		<span>Rp100.000</span>
  	</div>
  	<button class="py-1 w-full text-white bg-primary text-xs rounded-md font-normal">
			Jadigampang Rewards
		</button>
	</div>
	<div class="text-gray70">
		<ul class="">
			<li class="sidebar-items px-3 py-2.5 hover:bg-blue-100 hover:text-primary <?php echo $active_sidebar == 'home' ? 'bg-blue-100 text-primary' : '' ?>">
				<div class="flex items-center">
					<img class="svg w-4 h-4 flex-none mr-1 fill-current" src="../../assets/image/icon/home-line.svg">
					<a class="font-bold text-sm grow" href="./home.php">Home</a>
				</div>
			</li>
			<li class="collapsible-section px-3 py-2.5 hover:bg-blue-100 hover:text-primary <?php echo $active_sidebar == 'akun' ? 'bg-blue-100 text-primary' : '' ?>">
				<div class="collapsible-btn flex items-center">
					<img class="svg w-4 h-4 flex-none mr-1 fill-current" src="../../assets/image/icon/user-line.svg">
					<span class="font-bold text-sm grow">Akun Saya</span>
					<img class="chevron svg flex-none" src="../../assets/image/icon/chevron-top.svg">
				</div>
				<ul class="collapsible-content mt-2 pl-5 text-gray70">
					<li class="mb-2"><a class="<?php echo $active_sidebar_nav == 'langganan' ? 'text-primary' : '' ?> hover:text-primary" href="./akun-langganan.php">Toko Langganan</a></li>
					<li class=""><a class="<?php echo $active_sidebar_nav == 'disukai' ? 'text-primary' : '' ?> hover:text-primary" href="./akun-disukai.php">Produk Disukai</a></li>
				</ul>
			</li>
			<li class="collapsible-section px-3 py-2.5 hover:bg-blue-100 hover:text-primary <?php echo $active_sidebar == 'pesan' ? 'bg-blue-100 text-primary' : '' ?>">
				<div class="collapsible-btn flex items-center">
					<img class="svg w-4 h-4 flex-none mr-1 fill-current" src="../../assets/image/icon/file-line.svg">
					<span class="font-bold text-sm grow" href="">Pesanan Saya</span>
					<img class="chevron svg flex-none" src="../../assets/image/icon/chevron-top.svg">
				</div>
				<ul class="collapsible-content mt-2 pl-5 text-gray70">
					<li class="mb-2"><a class="<?php echo $active_sidebar_nav == 'semua' ? 'text-primary' : '' ?> hover:text-primary" href="./pesan-semua.php">Semua</a></li>
					<li class="mb-2"><a class="<?php echo $active_sidebar_nav == 'bayar' ? 'text-primary' : '' ?> hover:text-primary" href="./pesan-bayar.php">Belum Bayar</a></li>
					<li class="mb-2"><a class="<?php echo $active_sidebar_nav == 'dikemas' ? 'text-primary' : '' ?> hover:text-primary" href="./pesan-dikemas.php">Dikemas</a></li>
					<li class="mb-2"><a class="<?php echo $active_sidebar_nav == 'dikirim' ? 'text-primary' : '' ?> hover:text-primary" href="./pesan-dikirim.php">Dikirim</a></li>
					<li class="mb-2"><a class="<?php echo $active_sidebar_nav == 'selesai' ? 'text-primary' : '' ?> hover:text-primary" href="./pesan-selesai.php">Selesai</a></li>
					<li class=""><a class="<?php echo $active_sidebar_nav == 'gagal' ? 'text-primary' : '' ?> hover:text-primary" href="./pesan-gagal.php">Tidak Berhasil</a></li>
				</ul>
			</li>
			<li class="collapsible-section px-3 py-2.5 hover:bg-blue-100 hover:text-primary <?php echo $active_sidebar == 'notif' ? 'bg-blue-100 text-primary' : '' ?>">
				<div class="collapsible-btn flex items-center">
					<img class="svg w-4 h-4 flex-none mr-1 fill-current" src="../../assets/image/icon/bell-line.svg">
					<span class="font-bold text-sm grow" href="">Notifikasi</span>
					<img class="chevron svg flex-none" src="../../assets/image/icon/chevron-top.svg">
				</div>
				<ul class="collapsible-content mt-2 pl-5 text-gray70">
					<li class="relative mb-2">
						<span class="absolute top-0 w-4 h-4 rounded-full bg-tertiary flex justify-center items-center text-white" style="left: -20px;"><small>3</small></span>
						<a class="<?php echo $active_sidebar_nav == 'transaksi' ? 'text-primary' : '' ?> hover:text-primary" href="./notif-transaksi.php">Transaksi Pembelian</a>
					</li>
					<li class="relative mb-2">
						<a class="<?php echo $active_sidebar_nav == 'promo' ? 'text-primary' : '' ?> hover:text-primary" href="./notif-promo.php">Promo</a>
					</li>
					<li class="relative ">
						<a class="<?php echo $active_sidebar_nav == 'sistem' ? 'text-primary' : '' ?> hover:text-primary" href="./notif-sistem.php">Sistem</a>
					</li>
				</ul>
			</li>
			<li class="sidebar-items px-3 py-2.5 hover:bg-blue-100 hover:text-primary <?php echo $active_sidebar == 'chat' ? 'bg-blue-100 text-primary' : '' ?>">
				<div class="flex items-center relative">
					<img class="svg w-4 h-4 flex-none mr-1 fill-current" src="../../assets/image/icon/mail-line.svg">
					<a class="font-bold text-sm inline block" href="./chat.php">Percakapan</a>
					<span class="absolute w-4 h-4 rounded-full bg-tertiary flex justify-center items-center text-white" style="right: 25px;top: 3px;"><small>2</small></span>
				</div>
			</li>
		</ul>
	</div>
</div>