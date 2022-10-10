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
			<li class="sidebar-items px-3 py-2.5 hover:bg-blue-100 hover:text-primary <?php echo $active_sidebar == 'akun' ? 'bg-blue-100 text-primary' : '' ?>">
				<div class="flex items-center">
					<img class="svg w-4 h-4 flex-none mr-1 fill-current" src="../../assets/image/icon/user.svg">
					<span class="font-bold text-sm grow" href="">Akun Saya</span>
					<img class="chevron svg flex-none" src="../../assets/image/icon/chevron-top.svg">
				</div>
				<ul class="mt-2 pl-5 text-gray70">
					<li class="mb-2"><a class="hover:text-primary" href="">Toko Langganan</a></li>
					<li class=""><a class="hover:text-primary" href="">Produk Disukai</a></li>
				</ul>
			</li>
			<li class="sidebar-items px-3 py-2.5 hover:bg-blue-100 hover:text-primary <?php echo $active_sidebar == 'pesan' ? 'bg-blue-100 text-primary' : '' ?>">
				<div class="flex items-center">
					<img class="svg w-4 h-4 flex-none mr-1 fill-current" src="../../assets/image/icon/file-line.svg">
					<span class="font-bold text-sm grow" href="">Pesanan Saya</span>
					<img class="chevron svg flex-none" src="../../assets/image/icon/chevron-top.svg">
				</div>
				<ul class="mt-2 pl-5 text-gray70">
					<li class="mb-2"><a class="hover:text-primary" href="">Semua</a></li>
					<li class="mb-2"><a class="hover:text-primary" href="">Belum Bayar</a></li>
					<li class="mb-2"><a class="hover:text-primary" href="">Dikemas</a></li>
					<li class="mb-2"><a class="hover:text-primary" href="">Dikirim</a></li>
					<li class="mb-2"><a class="hover:text-primary" href="">Selesai</a></li>
					<li class=""><a class="hover:text-primary" href="">Tidak Berhasil</a></li>
				</ul>
			</li>
			<li class="sidebar-items px-3 py-2.5 hover:bg-blue-100 hover:text-primary <?php echo $active_sidebar == 'notif' ? 'bg-blue-100 text-primary' : '' ?>">
				<div class="flex items-center">
					<img class="svg w-4 h-4 flex-none mr-1 fill-current" src="../../assets/image/icon/bell-line.svg">
					<span class="font-bold text-sm grow" href="">Notifikasi</span>
					<img class="chevron svg flex-none" src="../../assets/image/icon/chevron-top.svg">
				</div>
				<ul class="mt-2 pl-5 text-gray70">
					<li class="mb-2"><a class="hover:text-primary" href="">Transaksi Pembelian</a></li>
					<li class="mb-2"><a class="hover:text-primary" href="">Promo</a></li>
					<li class=""><a class="hover:text-primary" href="">Sistem</a></li>
				</ul>
			</li>
			<li class="sidebar-items px-3 py-2.5 hover:bg-blue-100 hover:text-primary <?php echo $active_sidebar == 'percakapan' ? 'bg-blue-100 text-primary' : '' ?>">
				<div class="flex items-center">
					<img class="svg w-4 h-4 flex-none mr-1 fill-current" src="../../assets/image/icon/mail.svg">
					<a class="font-bold text-sm grow" href="">Percakapan</a>
				</div>
			</li>
		</ul>
	</div>
</div>