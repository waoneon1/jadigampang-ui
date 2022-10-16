<?php $root = '../..' ?>
<?php include $root . '/header-seller.php'; ?>
<?php $active_tab = 'index' ?> 
<?php $active_sidebar = 'promo' ?> 
<?php $active_sidebar_nav = 'index' ?> 

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
					<h2 class="font-bold text-base">Promosi & Iklan</h2>
				</div>
				<!-- tabs -->
				<?php include '../../parts/seller-tabs.php'; ?>

				<div class="border-b p-5 flex text-gray90 text-sm">
					<div class="w-full grow flex">
						<div class="flex items-center">
							<div class="flex-none flex">
								<img class="w-thumb h-thumb mr-4" src="../../assets/image/static/product/item1.png">
							</div>
							<div class="grow">
								<p class="mb-2">SPESIAL : Gratis Ongkir</p>
								<p class="mb-2 text-gray70 text-xs">Ayo pakai voucher gratis ongkir</p>
								<p class="text-gray70 text-xs">06-05-2022 13:56</p>
							</div>
						</div>
					</div>
					<div class="flex-none flex items-center justify-end">
						<button class="px-3 py-3 text-primary bg-blue-100 text-sm rounded-md">
							Tampilkan Rincian
						</button>
					</div>
				</div>

				<div class="border-b p-5 flex text-gray90 text-sm">
					<div class="w-full grow flex">
						<div class="flex items-center">
							<div class="flex-none flex">
								<img class="w-thumb h-thumb mr-4" src="../../assets/image/static/product/item2.png">
							</div>
							<div class="grow">
								<p class="mb-2">SPESIAL: Gratis Ongkir</p>
								<p class="mb-2 text-gray70 text-xs">Ayo pakai voucher gratis ongkir</p>
								<p class="text-gray70 text-xs">06-05-2022 12:11</p>
							</div>
						</div>
					</div>
					<div class="flex-none flex items-center justify-end">
						<button class="px-3 py-3 text-primary bg-blue-100 text-sm rounded-md">
							Tampilkan Rincian
						</button>
					</div>
				</div>
			</div>

			<!-- eo:section 1 -->
		</div>
	</div>

</section>

<?php include $root . '/footer.php'; ?>