<?php $root = '..' ?>
<?php include $root . '/header.php'; ?>
<?php $mode = isset($_GET['mode']) ? $_GET['mode'] : '' ?>

<section class="container mx-auto">

	<?php $active_tab = 'ulasan' ?>
	<?php include $root . '/parts/store-header.php' ?>

	<div class="bg-white rounded shadow-jgmain w-full mb-10 text-sm">
		<?php foreach ([1,2,3] as $key => $value): ?>
			<div class="flex w-full px-5 py-5 border-b">
				<div class="mr-10"><img src="../assets/image/static/product-ulasan.png"></div>
				<div class="w-full">
					<div class="flex items-center mb-5">
						<div class="flex-non bg-gray90 flex items-center justify-center w-12 h-12 mr-4 font-bold rounded-full text-white">
							<img src="../assets/image/static/photo.png">
						</div>
						<div class="flex-non mr-8 text-xs">
							<div class="text-gray90 mb-1 text-sm">Buyer ID <span class="ml-1 text-primary">Pembeli</span></div>
							<div class="text-gray70">2022-01-15</div>
						</div>
					</div>
					<div class="flex justify-between">
						<div class="jg-rating flex gap-1 mb-5 text-gray30 text-xs">
							<img class="svg fill-current text-warning" src="../assets/image/icon/star.svg">
							<img class="svg fill-current text-warning" src="../assets/image/icon/star.svg">
							<img class="svg fill-current text-warning" src="../assets/image/icon/star.svg">
							<img class="svg fill-current text-warning" src="../assets/image/icon/star.svg">
							<img class="svg fill-current" src="../assets/image/icon/star.svg">
						</div>
						<!-- flag-like -->
						<div class="flag-like flex text-xs text-gray70">
							<span class="mr-4 flex items-start">
								<img class="svg fill-current text-tertiary mr-2" src="../assets/image/icon/heart.svg">
								<span>51</span>
							</span>
							<span class="flex items-start">
								<img class="svg fill-current mr-2" src="../assets/image/icon/flag.svg">
								<span>Laporkan</span>
							</span>
						</div>
					</div>
					<p class="text-sm mb-5">
						Barang sampai dengan aman kemasan rapi, produk sesuai dengan permintaan, mantab pokoknya, terimakasih seller.
					</p>
					<div class="w-24 h-24 mb-5">
						<img src="../assets/image/static/product-ulasan.png">
					</div>
					<div class="bg-blue-100 w-full p-5 mb-5">
						<div class="flex items-start">
							<div class="flex-non bg-gray90 flex items-center justify-center w-12 h-12 mr-4 font-bold rounded-full text-white">
								<img src="../assets/image/static/store.png">
							</div>
							<div class="flex-non text-sm w-full">
								<div class="flex justify-between">
									<div class="text-gray90 mb-1">Sighra Jayabrana Sukses <span class="ml-1 text-primary">Penjual</span></div>
									<!-- flag-like -->
									<div class="flag-like flex text-xs text-gray70">
										<span class="mr-4 flex items-start">
											<img class="svg fill-current text-tertiary mr-2" src="../assets/image/icon/heart.svg">
											<span>51</span>
										</span>
										<span class="flex items-start">
											<img class="svg fill-current mr-2" src="../assets/image/icon/flag.svg">
											<span>Laporkan</span>
										</span>
									</div>
								</div>
								<div class="text-gray70 mb-3 text-xs">2022-01-15</div>
								<p>Terimakasih untuk ulasannya 🙏</p>
							</div>
						</div>
					</div>
					<?php if ($mode == 'seller'): ?>
						<div class="w-full flex items-center">
							<img class="flex-none svg fill-current text-gray70 mr-5" src="../assets/image/icon/attachment.svg">
							<img class="flex-none svg fill-current text-gray70 mr-5" src="../assets/image/icon/emoji.svg">
							<input type="text" class="grow w-full rounded bg-gray20 py-2 mr-4" placeholder="Balas komentar...">
							<div class="flex-none flex items-center justify-center bg-blue-100 w-9 h-9 rounded">
								<img class="svg fill-current text-primary" src="../assets/image/icon/send.svg">
							</div>
						</div>
					<?php endif ?>
				</div>
			</div>
		<?php endforeach ?>
	</div>

	<!-- pagination -->
	<div class="flex justify-center items-center mb-10">
		<div class="text-center flex">
			<span class="text-sm text-primary w-8 h-8 flex justify-center items-center mr-1 rounded-full bg-blue-100 font-bold">1</span>	
			<span class="text-sm text-gray70 w-8 h-8 flex justify-center items-center mr-1 rounded-full">2</span>	
			<span class="text-sm text-gray70 w-8 h-8 flex justify-center items-center mr-1 rounded-full">3</span>	
			<span class="text-sm text-gray70 w-8 h-8 flex justify-center items-center mr-1 rounded-full">4</span>	
			<span class="text-sm text-gray70 w-8 h-8 flex justify-center items-center mr-1 rounded-full">5</span>	
			<span class="text-sm text-gray70 w-8 h-8 flex justify-center items-center mr-1 rounded-full">6</span>	
		</div>
	</div>

</section>

<?php include $root . '/footer.php'; ?>