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
					<?php include '../parts/product-list.php'; ?>
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
					<?php include '../parts/product-list.php'; ?>
				<?php endfor ?>
			</div>
		</div>
	</div>

</section>

<?php include $root . '/footer.php'; ?>