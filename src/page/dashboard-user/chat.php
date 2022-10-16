<?php $root = '../..' ?>
<?php include $root . '/header.php'; ?>
<?php $active_tab = '' ?> <!-- alamat, pembayaran, notif, security -->
<?php $active_sidebar = 'chat' ?> <!-- home, akun, pesan, notif, chat -->
<?php $active_sidebar_nav = '' ?> <!-- langganan, disukai | semua, bayar, dikemas, dikirim, selesai, gagal | transaksi, promo, sistem -->

<section class="container mx-auto">

	<div class="flex pb-5 mb-5">
		<div class="part1 w-44 mr-0 md:mr-5 flex-none text-xs">
			<?php include '../../parts/profile-sidebar.php'; ?>
		</div>
		<div class="part2 grow w-full text-gray90 text-sm">
			<div class="mb-5 rounded shadow-jgmain flex bg-gray10" style="background-image: url(../../assets/image/bg-chat.svg);">
				<div class="w-chat flex-none bg-white rounded-l" style="min-height: 675px;">
				 	<div class="chat-header px-5 pt-5 mb-5">
 					 	<div class="flex justify-between mb-5">
 					 		<h2 class="font-bold">Percakapan</h2>
 					 		<a href="">
 					 			<img class="svg text-gray70 rotate-90 fill-current" src="../../assets/image/icon/three-dots.svg">
 					 		</a>
 					 	</div>
 		 			 	<div class="w-full flex px-1 py-1 leading-normal w-full bg-gray20 rounded-lg shadow-none text-xs">
 		 	        <input type="search" class="flex-initial bg-gray20 w-full py-1" placeholder="Cari toko langganan">
 		 	        <a href="" class="text-primary bg-blue-100 rounded-md flex items-center justify-center px-4 py-2">
 		 	        	<span class="mr-1">Cari</span>
 		 	          <img class="svg fill-current w-3.5 h-3.5" src="../../assets/image/icon/search.svg">
 		 	        </a>
 		 	        <input type="hidden" name="post_type" value="product">
 		 	      </div>
				 	</div>
	 	      <div class="chat">
	 	      	<a href="./chat-active.php" class="flex items-center border-b py-5 pr-5 ml-5 hover:bg-blue-50 hover:ml-0 hover:pl-5 cursor-pointer">
							<div class="flex-none bg-gray90 flex items-center justify-center w-12 h-12 mr-3 font-bold rounded-full text-white">
								<img src="../../assets/image/static/store.png">
							</div>
							<div class="grow text-xs">
								<div class="flex justify-between">
									<div class="text-gray90 mb-1 text-sm">Sighra Jayabrana Sukses</div>
									<span class="text-gray70 text-xs">12:21</span>
								</div>
								<div class="text-primary mb-1">Penjual</div>
								<div class="text-gray70">5 Jam yang lalu</div>
							</div>
						</a>
						<a href="./chat-active.php" class="flex items-center border-b py-5 pr-5 ml-5 hover:bg-blue-50 hover:ml-0 hover:pl-5 cursor-pointer">
							<div class="flex-none bg-gray90 flex items-center justify-center w-12 h-12 mr-3 font-bold rounded-full text-white">
								<img src="../../assets/image/static/store.png">
							</div>
							<div class="grow text-xs">
								<div class="flex justify-between">
									<div class="text-gray90 mb-1 text-sm">Sighra Jayabrana Sukses</div>
									<span class="text-gray70 text-xs">15/05/2022</span>
								</div>
								<div class="text-primary mb-1">Penjual</div>
								<div class="text-gray70">5 Jam yang lalu</div>
							</div>
						</a>
						<a href="./chat-active.php" class="flex items-center border-b py-5 pr-5 ml-5 hover:bg-blue-50 hover:ml-0 hover:pl-5 cursor-pointer">
							<div class="flex-none bg-gray90 flex items-center justify-center w-12 h-12 mr-3 font-bold rounded-full text-white">
								<img src="../../assets/image/static/photo.png">
							</div>
							<div class="grow text-xs">
								<div class="flex justify-between">
									<div class="text-gray90 mb-1 text-sm">William</div>
									<span class="text-gray70 text-xs">15/05/2022</span>
								</div>
								<div class="text-tertiary mb-1">Pembeli</div>
								<div class="text-gray70">5 Jam yang lalu</div>
							</div>
						</a>
	 	      </div>
				</div>
				<div class="w-full grow p-5 flex items-center justify-center">
					<div>
						<img class="mb-5 mx-auto" src="../../assets/image/chat-empty.svg">
						<p class="text-gray90">Pilih chat disamping untuk memulai obrolan.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include $root . '/footer.php'; ?>