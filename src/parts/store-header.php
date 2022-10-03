
	<div class="w-full h-64 rounded overflow-hidden bg-cover bg-no-repeat mb-5 relative" style="background-image: url('../assets/image/static/store-banner.png');">
		<?php if ($mode == 'seller'): ?>
			<div class="absolute right-0 bottom-0 w-8 h-8 rounded-full flex items-center justify-center bg-white m-5 hover:shadow-jgmain cursor-pointer">
				<img class="svg text-gray70" src="../assets/image/icon/camera.svg">
			</div>
		<?php endif ?>
	</div>
	
	<div class="bg-white mb-5 rounded shadow-jgmain items-center">
		<div class="border-b p-5 flex">
			<div class="mr-7 flex w-1/2">
				<div class="flex items-center relative">
					<img src="../assets/image/static/store.png" class="mr-4" style="width: 116px;height: 116px;">
					<?php if ($mode == 'seller'): ?>
						<div class="absolute right-0 bottom-0 w-6 h-6 rounded-full flex items-center justify-center bg-white m-3 shadow-jgmain cursor-pointer">
							<img class="svg text-gray70 w-3 h-3" src="../assets/image/icon/camera.svg">
						</div>
					<?php endif ?>
				</div>
				<div>
					<div class="text-base text-gray90 mb-1 flex items-center">
						<span class="mr-2">Sighra Jayabrana Sukses</span>
						<?php if ($mode == 'seller'): ?>
							<a href=""><img class="svg text-gray70 fill-current" src="../assets/image/icon/edit.svg"></a>
						<?php endif ?>
					</div>
					<div class="flex mb-2">
						<span class="text-gray70 text-xs mr-4">Aktif 4 jam lalu</span>
						<div class="text-gray70 text-xs flex items-center mr-2">
							<img class="svg mr-1 cursor-pointer fill-current" src="<?php echo $root ?>/assets/image/icon/pin.svg">
							<span>Cihuni, Padegangan</span>
						</div>
						<?php if ($mode == 'seller'): ?>
							<a href=""><img class="svg text-gray70 fill-current" src="../assets/image/icon/edit.svg"></a>
						<?php endif ?>
					</div>
					<div class="jg-rating inline-block mb-2 text-gray30 text-sm">
						<span class="mr-1 text-gray90">4.0</span>
						<span class="text-yellow-300">★ </span>
						<span class="text-yellow-300">★ </span>
						<span class="text-yellow-300">★ </span>
						<span class="text-yellow-300">★ </span>
						<span class="text-gr-300">★ </span>
					</div>
					<div class="flex">
						<?php if ($mode == 'seller'): ?>
							<button class="py-1 text-white bg-primary text-xs rounded-md mr-3 font-normal px-8">
								Pengaturan Toko
							</button>
						<?php else: ?>
							<button class="py-1 text-white bg-primary text-xs rounded-md mr-3 font-normal px-8">
								+ Follow
							</button>
							<button class="py-1 px-2 text-primary bg-blue-100 text-xs rounded-md mr-3 font-normal">
								Chat Toko
							</button>
						<?php endif ?>
					</div>
				</div>
			</div>
			<div class="w-1/2 flex justify-end text-sm text-gray90 items-center">
				<div class="text-center mr-10">
					<h2 class="text-3.5xl font-bold mb-2">80</h2>
					<p>Produk</p>
				</div>
				<div class="text-center mr-10">
					<h2 class="text-3.5xl font-bold mb-2">1000</h2>
					<p>Pengikut</p>
				</div>
				<div class="text-center mr-10">
					<h2 class="text-3.5xl font-bold mb-2">20K +</h2>
					<p>Produk Terjual</p>
				</div>
			</div>
		</div>
		<div class="border-b p-5 flex">
		 <div class="w-full flex px-1 py-1 leading-normal w-full bg-gray20 rounded-lg shadow-none text-xs">
        <input type="search" class="flex-initial bg-gray20 w-full py-1" placeholder="Cari produk di toko ini">
        <a href="" class="text-primary bg-blue-100 rounded-md flex items-center justify-center px-4">
        	<span class="mr-1">Cari</span>
          <img class="svg fill-current w-3.5 h-3.5" src="<?php echo $root ?>/assets/image/icon/search.svg">
        </a>
        <input type="hidden" name="post_type" value="product">
      </div>
		</div>
		<div class="border-b p-5 flex">
		 	<ul class="text-sm text-gray90 flex">
		 		<li class="mr-10 hover:text-primary <?php echo $active_tab == '' ? 'text-primary font-bold' : '' ?>">
		 			<a href="./store.php<?php echo $mode == 'seller' ? '?mode=seller' : '' ?>">Beranda</a>
		 		</li>
		 		<li class="mr-10 hover:text-primary <?php echo $active_tab == 'product' ? 'text-primary font-bold' : '' ?>">
		 			<a href="./store-product.php<?php echo $mode == 'seller' ? '?mode=seller' : '' ?>">Produk</a>
		 		</li>
		 		<li class="mr-10 hover:text-primary <?php echo $active_tab == 'promosi' ? 'text-primary font-bold' : '' ?>">
		 			<a href="./store-promosi.php<?php echo $mode == 'seller' ? '?mode=seller' : '' ?>">Promosi</a>
		 		</li>
		 		<li class="mr-10 hover:text-primary <?php echo $active_tab == 'ulasan' ? 'text-primary font-bold' : '' ?>">
		 			<a href="./store-ulasan.php<?php echo $mode == 'seller' ? '?mode=seller' : '' ?>">Ulasan</a>
		 		</li>
		 		<li class="mr-10 hover:text-primary <?php echo $active_tab == 'feeds' ? 'text-primary font-bold' : '' ?>">
		 			<a href="./store-feeds.php<?php echo $mode == 'seller' ? '?mode=seller' : '' ?>">Feeds</a>
		 		</li>
		 		<li class="mr-10 hover:text-primary <?php echo $active_tab == 'info' ? 'text-primary font-bold' : '' ?>">
		 			<a href="./store-info.php<?php echo $mode == 'seller' ? '?mode=seller' : '' ?>">Info Toko</a>
		 		</li>
		 	</ul>
		</div>
	</div>