<?php $root = '..' ?>
<?php include $root . '/header.php'; ?>
<?php $mode = isset($_GET['mode']) ? $_GET['mode'] : '' ?>
<?php include '../assets/data/product1.php'; ?>

<section class="container mx-auto">
	
	<?php $active_tab = 'promosi' ?>
	<?php include $root . '/parts/store-header.php' ?>

	<?php if ($mode == 'seller'): ?>
		<button class="px-6 py-2.5 text-white bg-primary text-sm rounded-md font-normal mb-5">
			<span class="text-base mr-1 font-bold">+</span> Tambah Promosi
		</button>
	<?php endif ?>

	<div class="px-5 py-5 bg-white rounded shadow-jgmain w-full mb-5">
		<div class="product-list">
			<div class="mb-5">
				<h2 class="mb-0 font-bold pr-3 text-xl">Bundle 1</h2>
			</div>
			<div class="flex mb-5">
				<p class="line-through text-gray70 mr-2">Rp100.000</p>
				<p class="font-bold">Rp80.000</p>
			</div>
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
										<img class="svg fill-current text-warning" src="../assets/image/icon/star.svg">
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

	<div class="px-5 py-5 bg-white rounded shadow-jgmain w-full mb-5">
		<div class="product-list">
			<div class="mb-5">
				<h2 class="mb-0 font-bold pr-3 text-xl">Bundle 2</h2>
			</div>
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
										<img class="svg fill-current text-warning" src="../assets/image/icon/star.svg">
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

</section>

<?php include $root . '/footer.php'; ?>