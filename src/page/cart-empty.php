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
							<div class="products shadow-jgmain hover:shadow-lg rounded-md overflow-hidden">
								<a href="./product.php">
									<div class="relative">
										<img class="mb-3" src="../assets/image/static/product/<?php echo $item['img'] ?>">
										<?php if ($item['discount']): ?>
											<span class="absolute right-2 top-0 bg-cover text-xs text-white px-1 pt-1 pb-3" style="background-image: url(../assets/image/sale.svg)">
												<?php echo $item['discount'] ?>%<br>OFF
											</span>
										<?php endif ?>
										<?php if ($item['terlaris']): ?>
											<span class="absolute left-0 top-2 bg-primary py-1 pl-1 pr-2 rounded-r text-xs text-white">Terlaris</span>
										<?php endif ?>
									</div>
									<div class="px-3 text-xs">
										<h4 class="mb-1 text-gray90"><?php echo $item['title'] ?></h4>
										<div class="mb-3 font-bold text-gray90 text-sm flex">
											Rp<?php echo $item['price'] ?>
										</div>
										<div class="flex mb-3 text-gray60">
											<div class="flex border-r border-gray60 pr-2">
												<svg width="16" height="14" viewBox="0 0 16 14" fill="none">
													<path d="M7.58354 1.02916C7.80729 0.596973 8.42543 0.596972 8.64919 1.02916L10.44 4.48808C10.5295 4.66108 10.6975 4.77982 10.8905 4.80655L14.8458 5.35443C15.3468 5.42383 15.5424 6.04399 15.1719 6.38829L12.3473 9.01292C12.1976 9.15198 12.129 9.35764 12.1652 9.55871L12.8369 13.2924C12.9245 13.7788 12.4194 14.1565 11.9776 13.9351L8.38519 12.1347C8.216 12.0499 8.01672 12.0499 7.84754 12.1347L4.25512 13.9351C3.81332 14.1565 3.30827 13.7788 3.39578 13.2924L4.06756 9.55871C4.10374 9.35764 4.03512 9.15198 3.88547 9.01292L1.06086 6.38829C0.690314 6.04399 0.885919 5.42383 1.38695 5.35443L5.34226 4.80655C5.53522 4.77982 5.70319 4.66108 5.79276 4.48808L7.58354 1.02916Z" fill="#F2C94C"/>
												</svg>
												<span class="ml-1"><?php echo $item['rating'] ?></span>
											</div>
											<div class="pl-2">Terjual <?php echo $item['count'] ?></div>
										</div>
										<div class="mb-3 text-gray60 relative">
											<div class="block mb-1"><?php echo $item['city'] ?></div>
											<div><?php echo $item['dist'] ?></div>
											<div class="absolute font-bold right-0 bottom-0 text-gray70">. . .</div>
										</div>
									</div>
								</a>
							</div>
						<?php endfor ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include $root . '/footer.php'; ?>