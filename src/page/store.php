<?php $root = '..' ?>
<?php include $root . '/header.php'; ?>
<?php $mode = isset($_GET['mode']) ? $_GET['mode'] : '' ?>

<section class="container mx-auto">

	<?php $active_tab = '' ?>
	<?php include $root . '/parts/store-header.php' ?>

	<div class="flex flex-col items-center justify-center py-5 mb-20">
		<img class="mb-5" src="../assets/image/store-no.svg">
		<p class="text-gray70">Toko ini belum memiliki postingan</p>
	</div>

</section>

<?php include $root . '/footer.php'; ?>