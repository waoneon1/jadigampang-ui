<?php $root = '..' ?>
<?php include $root . '/header.php'; ?>
<?php include '../assets/data/product1.php'; ?>

<section class="px-5 md:px-0 text-gray90 w-full mb-20">
	<div class="container md:flex mx-auto">
		
		<div class="w-full flex justify-center">
			<div>
				<img src="../assets/image/chart-empty.svg" class="mr-4">
				<div class="text-xl text-jgtext font-bold mt-6 text-center">Keranjang Belanjamu Kosong</div>

				<p class="return-to-shop mt-10 text-center">
					<a class="px-5 py-2.5 text-white bg-primary border border-primary text-sm rounded mr-3 font-normal" href="../index.php">
						Mulai Belanja				
					</a>
				</p>
			</div>
		</div>

	</div>
</section>

<section class="mb-5 px-8">
	<div class="container md:flex mx-auto mb-16">
		<div class="px-5 py-5 bg-white rounded shadow-jgmain w-full">
			<div class="product-list">
				<div class="block md:flex items-end">
					<h2 class="mb-0 font-bold pr-3 text-xl">Kamu Mungkin Butuh</h2>
					<a href="./page/recommend.php" class="inline-block text-primary text-xs hover:text-blue-400 leading-loose">Lihat semua</a>
				</div>
				<div class="pt-5">
					<!-- product -->
					<div class="grid gap-4 grid-cols-6">
						<?php for ($i=4; $i < 10; $i++): ?>
							<?php $item = $product1[$i] ?>
							<?php include '../parts/product-list.php'; ?>
						<?php endfor ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include $root . '/footer.php'; ?>