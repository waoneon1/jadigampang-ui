<?php $root = '../..' ?>
<?php include $root . '/header-seller.php'; ?>
<?php $active_tab = 'semua' ?> 
<?php $active_sidebar = 'purchase' ?> 
<?php $active_sidebar_nav = 'semua' ?> 

<?php include '../../assets/data/cart1.php'; ?>

<section class="w-full">

	<div class="flex text-gray90">
		<div class="part1 w-56 flex-none text-xs">
			<?php include '../../parts/seller-sidebar.php'; ?>
		</div>
		<div class="part2 grow w-full p-5 text-sm">
			<!-- section 1 -->
			<div class="bg-white rounded shadow-jgmain mb-5">
				<div class="border-b p-5">
					<h2 class="font-bold text-base">Aktivitas Pembelian Toko</h2>
				</div>
				<!-- tabs -->
				<?php include '../../parts/seller-tabs.php'; ?>
				<div class="border-b p-5">
					<div class="w-full flex px-1 py-1 leading-normal w-full bg-gray20 rounded-lg shadow-none text-xs mr-4 ">
		        <input type="search" class="flex-initial bg-gray20 w-full py-1" placeholder="Cari alamat atau nama penerima">
		        <a href="" class="text-primary bg-blue-100 rounded-md flex items-center justify-center px-4">
		        	<span class="mr-1">Cari</span>
		          <img class="svg fill-current w-3.5 h-3.5" src="<?php echo $root ?>/assets/image/icon/search.svg">
		        </a>
		        <input type="hidden" name="post_type" value="product">
		      </div>
				</div>
			</div>

			<div class="bg-white mb-5 rounded shadow-jgmain items-center text-sm">
				<div class="border-b p-5">
					<div class="flex items-center">
						<p class="font-bold mr-2">Sighra Jayabrana Sukses</p>
						<img class="svg fill-current text-primary" src="../../assets/image/icon/chat.svg">
					</div>
				</div>
				<div class="border-b p-5 flex items-center justify-between">
					<div class="text-gray90 flex">
						<p class="mr-10">5 Mei 2022</p>
						<a href="" class="text-primary">INV/20220426/MPL/2271494117</a>
					</div>
					<a class="font-bold text-primary" href="">Selesai</a>
				</div>
				
				<?php for ($i=0; $i < 2; $i++): ?>
					<?php $item = $cart1[$i] ?>
					<div class="border-b p-5 flex text-gray90">
						<div class="w-7/12 flex">
							<div class="grow flex">
								<div class="flex-none flex">
									<img class="w-thumb h-thumb mr-4" src="../../assets/image/static/product/<?php echo $item['img'] ?>">
								</div>
								<div class="flex-initial flex flex-col justify-around pr-20">
									<p><?php echo $item['title'] ?></p>
									<p class="text-gray70 text-xs">Variasi : <?php echo $item['varian'] ?></p>
									<p class="text-gray70 text-xs"><?php echo $item['sum'] ?> barang x Rp<?php echo $item['price'] ?></p>
								</div>
							</div>
							<div class="flex-none flex items-center">
								<img class="svg fill-current text-primary" src="../../assets/image/icon/cart-plus.svg">
							</div>
						</div>
						<div class="w-5/12 flex items-center justify-end">
							<div class="flex flex-col items-end">
								<p class="mb-4">Total</p>
								<p class="font-bold">Rp<?php echo ($item['sum'] * $item['price']) ?></p>
							</div>
						</div>
					</div>
				<?php endfor ?>
				<div class="border-b p-5 flex justify-end text-gray90">
					<div class="">
						<div class="flex items-center mb-5">
							Total Belanja: <span class="ml-2 font-bold text-xl text-primary">Rp134.850</span>
						</div>
						<div class="flex justify-end">
							<button class="px-8 py-2.5 text-white	 bg-primary text-sm rounded-md mr-3">
								Beli Lagi
							</button>
							<div x-data="{ open: false }" class="relative">
								<button @click="open = !open" class="px-3 py-3 text-primary bg-blue-100 text-sm rounded-md">
									<img class="svg text-primary fill-current" src="../../assets/image/icon/three-dots.svg">
								</button>
								<!-- @click="open = false"  -->
								<ul x-show="open" class="absolute w-max mt-1 right-0 font-normal z-40 bg-white rounded overflow-hidden shadow">
									<li @click="open = false" data-id="modal-pesan-semua" class="jg-modal-btn cursor-pointer text-gray90 hover:bg-blue-50 text-xs py-3 px-3">
										Rincian Pembelian
									</li>
									<li @click="open = false" class="cursor-pointer text-gray90 hover:bg-blue-50 text-xs py-3 px-3">
										<a href="">Tanya Penjual</a>
									</li>
									<li @click="open = false" class="cursor-pointer text-gray90 hover:bg-blue-50 text-xs py-3 px-3">
										<a href="">Bantuan</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="bg-white mb-5 rounded shadow-jgmain items-center text-sm">
				<div class="border-b p-5">
					<div class="flex items-center">
						<p class="font-bold mr-2">Sighra Jayabrana Sukses</p>
						<img class="svg fill-current text-primary" src="../../assets/image/icon/chat.svg">
					</div>
				</div>
				<div class="border-b p-5 flex items-center justify-between">
					<div class="text-gray90 flex">
						<p class="mr-10">5 Mei 2022</p>
						<a href="" class="text-primary">INV/20220426/MPL/2271494117</a>
					</div>
					<a class="font-bold text-primary" href="">Selesai</a>
				</div>
				
				<?php for ($i=0; $i < 2; $i++): ?>
					<?php $item = $cart1[$i] ?>
					<div class="border-b p-5 flex text-gray90">
						<div class="w-7/12 flex">
							<div class="grow flex">
								<div class="flex-none flex">
									<img class="w-thumb h-thumb mr-4" src="../../assets/image/static/product/<?php echo $item['img'] ?>">
								</div>
								<div class="flex-initial flex flex-col justify-around pr-20">
									<p><?php echo $item['title'] ?></p>
									<p class="text-gray70 text-xs">Variasi : <?php echo $item['varian'] ?></p>
									<p class="text-gray70 text-xs"><?php echo $item['sum'] ?> barang x Rp<?php echo $item['price'] ?></p>
								</div>
							</div>
							<div class="flex-none flex items-center">
								<img class="svg fill-current text-primary" src="../../assets/image/icon/cart-plus.svg">
							</div>
						</div>
						<div class="w-5/12 flex items-center justify-end">
							<div class="flex flex-col items-end">
								<p class="mb-4">Total</p>
								<p class="font-bold">Rp<?php echo ($item['sum'] * $item['price']) ?></p>
							</div>
						</div>
					</div>
				<?php endfor ?>
				<div class="border-b p-5 flex justify-end text-gray90">
					<div class="">
						<div class="flex items-center mb-5">
							Total Belanja: <span class="ml-2 font-bold text-xl text-primary">Rp134.850</span>
						</div>
						<div class="flex justify-end">
							<button class="px-8 py-2.5 text-white	 bg-primary text-sm rounded-md mr-3">
								Beli Lagi
							</button>
							<div x-data="{ open: false }" class="relative">
								<button @click="open = !open" class="px-3 py-3 text-primary bg-blue-100 text-sm rounded-md">
									<img class="svg text-primary fill-current" src="../../assets/image/icon/three-dots.svg">
								</button>
								<!-- @click="open = false"  -->
								<ul x-show="open" class="absolute w-max mt-1 right-0 font-normal z-40 bg-white rounded overflow-hidden shadow">
									<li @click="open = false" data-id="modal-pesan-semua" class="jg-modal-btn cursor-pointer text-gray90 hover:bg-blue-50 text-xs py-3 px-3">
										Rincian Pembelian
									</li>
									<li @click="open = false" class="cursor-pointer text-gray90 hover:bg-blue-50 text-xs py-3 px-3">
										<a href="">Tanya Penjual</a>
									</li>
									<li @click="open = false" class="cursor-pointer text-gray90 hover:bg-blue-50 text-xs py-3 px-3">
										<a href="">Bantuan</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- eo:section 1 -->
		</div>
	</div>

</section>

<?php include $root . '/footer.php'; ?>