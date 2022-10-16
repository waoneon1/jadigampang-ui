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
				<div class="w-chat flex-none bg-white rounded-l border-r">
				 	<div class="chat-header px-5 pt-5 mb-5">
 					 	<div class="flex justify-between mb-5">
 					 		<h2 class="font-bold">Percakapan</h2>
 					 		<a href="">
 					 			<img class="svg text-gray70 rotate-90 fill-current w-6 h-6" src="../../assets/image/icon/three-dots.svg">
 					 		</a>
 					 	</div>
 		 			 	<div class="w-full flex px-1 py-1 leading-normal w-full bg-gray20 rounded-lg shadow-none text-xs">
 		 	        <input type="search" class="flex-initial bg-gray20 w-full py-1" placeholder="Cari toko langganan">
 		 	        <a href="./chat.php" class="text-primary bg-blue-100 rounded-md flex items-center justify-center px-4 py-2">
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
				<div class="w-full grow  relative">
					<div class="absolute bg-white p-5 z-20 flex justify-between w-full items-center shadow-jgmain mb-5 rounded-tr">
						<div class="flex">
							<div class="flex-none bg-gray90 flex items-center justify-center w-12 h-12 mr-3 font-bold rounded-full text-white">
								<img src="../../assets/image/static/store.png">
							</div>
							<div class="grow text-xs">
								<div class="flex mb-1 text-sm">
									<div class="text-gray90 mr-2">Sighra Jayabrana Sukses</div>
									<span class="text-primary">Penjual</span>
								</div>
								<div class="text-gray70 text-xs">Aktif 9 jam lalu</div>
							</div>
						</div>
						<div x-data="{ open: false }" class="relative">
				 			<button @click="open = !open" >
				 				<img class="svg text-gray70 rotate-90 fill-current w-6 h-6" src="../../assets/image/icon/three-dots.svg">
				 			</button>
				 			<ul x-show="open" class="absolute w-max mt-1 right-0 font-normal z-50 bg-white rounded overflow-hidden shadow">
								<li @click="open = false" class="cursor-pointer text-gray90 hover:bg-blue-50 text-xs py-3 px-3">
									<a href="">Follow Penjual</a>
								</li>
								<li @click="open = false" class="cursor-pointer text-gray90 hover:bg-blue-50 text-xs py-3 px-3">
									<a href="">Hapus Chat</a>
								</li>
								<li @click="open = false" class="cursor-pointer text-gray90 hover:bg-blue-50 text-xs py-3 px-3">
									<a href="">Laporkan Pengguna</a>
								</li>
								<li @click="open = false" class="cursor-pointer text-gray90 hover:bg-blue-50 text-xs py-3 px-3">
									<a href="">Block Chat</a>
								</li>
								<li @click="open = false" class="cursor-pointer text-gray90 hover:bg-blue-50 text-xs py-3 px-3">
									<a href="">Tutup Chat</a>
								</li>
							</ul>
				 		</div>
					</div>
					
					<div class="pt-28 overflow-y-auto" style="height: 685px;">
						<p class="text-gray70 text-xs text-center px-10 mb-5">Hati-hati penipuan! Mohon tidak bertransaksi di luar Jadigampang & hindari menghubungi penjual selain melalui fitur chat Jadigampang.</p>
						<div class="flex w-full mb-5 justify-center">
							<span class="bg-gray50 px-1 text-white rounded">25 Mei 2022</span>
						</div>
						<div class="chat-content pb-20 px-9 text-gray90">
							<!-- chat items -->
							<div class="bg-blue-100 relative rounded-lg rounded-tr-none p-3 mb-5 w-10/12 ml-auto">
								<span class="absolute fill-current text-blue-100 top-0" style="right: -13px;">
									<img class="svg fill-current" src="../../assets/image/icon/chat-corner-right.svg">
								</span>
								<div class="flex">
									<div class="flex-none flex">
										<img class="w-16 h-16 mr-4" src="../../assets/image/static/product/item1.png">
									</div>
									<div class="grow">
										<p class="mb-2">Kotak makan plastik...</p>
										<p class="mb-2 text-gray70 text-xs">Klik untuk lihat rincian produk</p>
										<p class="text-gray70 text-xs">Tersisa 117 buah</p>
									</div>
									<div x-data="{ open: false }" class="relative flex-none">
							 			<button @click="open = !open" >
							 				<img class="svg text-gray70 rotate-90 fill-current w-6 h-6" src="../../assets/image/icon/three-dots.svg">
							 			</button>
							 			<ul x-show="open" class="absolute w-max mt-1 right-0 font-normal z-40 bg-white rounded overflow-hidden shadow">
											<li @click="open = false" class="cursor-pointer text-gray90 hover:bg-blue-50 text-xs py-3 px-3">
												<a href="">Buat Penawaran</a>
											</li>
											<li @click="open = false" class="cursor-pointer text-gray90 hover:bg-blue-50 text-xs py-3 px-3">
												<a href="">Ajukan Sample</a>
											</li>
										</ul>
							 		</div>
								</div>
							</div>
							<!-- chat items -->
							<div class="bg-gray30 relative rounded-lg rounded-tl-none p-3 mb-5 w-10/12 mr-auto">
								<span class="absolute fill-current text-gray30 top-0" style="left: -13px;">
									<img class="svg fill-current" src="../../assets/image/icon/chat-corner-left.svg">
								</span>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tempor fermentum sem, id hendrerit leo pulvinar eget. Fusce arcu magna, consectetur non metus maximus, molestie accumsan odio. 
							</div>
							<!-- chat items -->
							<div class="bg-blue-100 relative rounded-lg rounded-tr-none p-3 mb-5 w-10/12 ml-auto">
								<span class="absolute fill-current text-blue-100 top-0" style="right: -13px;">
									<img class="svg fill-current" src="../../assets/image/icon/chat-corner-right.svg">
								</span>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabi odio. 
							</div>
							<!-- chat items -->
							<div class="bg-gray30 relative rounded-lg rounded-tl-none p-3 mb-5 w-10/12 mr-auto">
								<span class="absolute fill-current text-gray30 top-0" style="left: -13px;">
									<img class="svg fill-current" src="../../assets/image/icon/chat-corner-left.svg">
								</span>
								Curabitur tempor fermentum sem, id hendrerit leo pulvinar eget. Fusce arcu magna, consectetur non metus maximus, molestie accumsan odio. 
							</div>
							<!-- chat items -->
							<div class="bg-gray30 relative rounded-lg rounded-tl-none p-3 mb-5 w-10/12 mr-auto">
								<span class="absolute fill-current text-gray30 top-0" style="left: -13px;">
									<img class="svg fill-current" src="../../assets/image/icon/chat-corner-left.svg">
								</span>
								Curabitur tempor fermentum sem, id hendrerit leo pulvinar eget. Fusce arcu magna, consectetur non metus maximus, molestie accumsan odio. 
							</div>
							<!-- chat items -->
							<div class="bg-gray30 relative rounded-lg rounded-tl-none p-3 mb-5 w-10/12 mr-auto">
								<span class="absolute fill-current text-gray30 top-0" style="left: -13px;">
									<img class="svg fill-current" src="../../assets/image/icon/chat-corner-left.svg">
								</span>
								Curabitur tempor fermentum sem, id hendrerit leo pulvinar eget. Fusce arcu magna, consectetur non metus maximus, molestie accumsan odio. 
							</div>
						</div>
					</div>

					<div class="absolute bottom-0 w-full shadow-jgmain p-5 flex items-center bg-white">
						<img class="flex-none svg fill-current text-gray70 mr-5" src="../../assets/image/icon/attachment.svg">
						<img class="flex-none svg fill-current text-gray70 mr-5" src="../../assets/image/icon/emoji.svg">
						<input type="text" class="grow w-full rounded bg-gray20 py-2 mr-4" placeholder="Balas komentar...">
						<div class="flex-none flex items-center justify-center bg-blue-100 w-9 h-9 rounded">
							<img class="svg fill-current text-primary" src="../../assets/image/icon/send.svg">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include $root . '/footer.php'; ?>