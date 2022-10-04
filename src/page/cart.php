<?php $root = '..' ?>
<?php include $root . '/header.php'; ?>
<?php include '../assets/data/cart1.php'; ?>
<?php include '../assets/data/product1.php'; ?>

<section class="container md:flex mx-auto">
	<div class="px-5 md:px-0 text-gray90 w-full">
		<h1 class="font-bold text-xl mb-10">Keranjang</h1>
		<div class="flex bg-white mb-5 p-5 rounded shadow-jgmain items-center">
			<img class="flex-none pr-2" src="../assets/image/static/photo.png">
			<p class="flex-none text-sm">Nama Akun Pengguna</p>
			<div class="flex-initial w-full text-right">
				<button class="px-5 py-2.5 text-primary bg-blue-100 text-sm rounded-md mr-3 font-normal">
					Ganti Akun
				</button>
			</div>
		</div>
	</div>
</section>

<section class="container mx-auto relative text-sm">

	<table class="header w-full mb-5 font-bold shadow-jgmain" border="0">
		<tr>
			<td class="p-0 w-1/2">
				<div class="bg-white p-5 rounded-l flex items-center">
					<input class="mr-2" id="product" type="checkbox"><label for="product">Produk</label>
				</div>
			</td>
			<td class="p-0" width="12%">
				<div class="bg-white p-5">Harga Satuan</div>
			</td>
			<td class="p-0">
				<div class="bg-white p-5">Kuantitas</div>
			</td>
			<td class="p-0" width="12%">
				<div class="bg-white p-5">Total Harga</div>
			</td>
			<td class="p-0" width="12%">
				<div class="bg-white p-5 rounded-r">Aksi</div>
			</td>
		</tr>
	</table>

	<table class="body w-full mb-5 shadow-jgmain" border="0">
		<tr class="border-b">
			<td class="p-0 w-1/2">
				<div class="bg-white p-5 rounded-l font-bold">
					<input class="mr-2" id="prod-head" type="checkbox">
					<label for="prod-head">Terminal Packaging</label>
				</div>
			</td>
			<td class="p-5 bg-white" width="12%"></td>
			<td class="py-5 px-2 bg-white" width="14%"></td>
			<td class="p-5 bg-white" width="12%"></td>
			<td class="p-5 bg-white rounded-r" width="12%">
				<a href="#">
					<img class="svg fill-current text-gray70 hover:text-red-600" src="../assets/image/icon/delete-themes.svg">
				</a>
			</td>
		</tr>
		
		<?php for ($i=0; $i < 3; $i++): ?>
			<?php $item = $cart1[$i] ?>
			<tr x-data="{ total:<?php echo $item['price'] ?>, count: 10 }" class="border-b">
				<td class="p-0 w-1/2">
					<div class="bg-white p-5 flex">
						<div class="flex-none flex">
							<input class="mr-4" type="checkbox">
							<img class="w-thumb h-thumb mr-4" src="../assets/image/static/product/<?php echo $item['img'] ?>">
						</div>
						<div class="flex-initial flex flex-col justify-between pr-5">
							<p><?php echo $item['title'] ?></p>
							<div>
								<button class="px-5 py-2.5 text-primary bg-blue-100 border border-primary text-sm rounded-full mr-3 font-normal"><?php echo $item['varian'] ?></button>
							</div>
						</div>
					</div>
				</td>
				<td class="p-5 bg-white" width="12%">Rp<?php echo $item['price'] ?></td>
				<td class="py-5 px-2 bg-white" width="14%">
					<div class="text-center">
						<span class="text-xs text-gray70">Pembelian kelipatan 25</span>
						<div class="rounded border border-gray50 py-1 text-gray70 flex items-center justify-center">
							<span @click="count == 0 ? 0 : count--" class="text-center text-xl text-primary cursor-pointer">-</span>
							<input type="hidden" name="count">
							<span x-text="count" class="px-2 w-12 text-center">0</span>
							<span @click="count++" class="text-center text-xl text-primary cursor-pointer">+</span>
						</div>
						<span class="text-xs text-gray70">Tersisa <?php echo $item['stock'] ?></span>
					</div>
				</td>
				<td class="p-5 bg-white" width="12%">
					RP<span x-text="(count * total)"></span>
				</td>
				<td class="p-5 bg-white " width="12%">
					<a href="#">
						<img class="svg fill-current text-gray70 hover:text-red-600" src="../assets/image/icon/delete-themes.svg">
					</a>
				</td>
			</tr>
		<?php endfor ?>

		<tr class="border-b">
			<td class="p-5 w-1/2 bg-white"></td>
			<td class="p-5 bg-white" width="12%"></td>
			<td class="p-5 bg-white font-bold text-sm" width="14%">Sub-total Harga</td>
			<td class="p-5 bg-white text-primary font-bold" width="12%">Rp74.250</td>
			<td class="p-5 bg-white" width="12%"></td>
		</tr>
	</table>

	<table class="body w-full mb-5 shadow-jgmain" border="0">
		<tr class="border-b">
			<td class="p-0 w-1/2">
				<div class="bg-white p-5 rounded-l font-bold">
					<input class="mr-2" id="prod-head2" type="checkbox">
					<label for="prod-head2">Sighra Jayabrana Sukses</label>
				</div>
			</td>
			<td class="p-5 bg-white" width="12%"></td>
			<td class="py-5 px-2 bg-white" width="14%"></td>
			<td class="p-5 bg-white" width="12%"></td>
			<td class="p-5 bg-white rounded-r" width="12%">
				<a href="#">
					<img class="svg fill-current text-gray70 hover:text-red-600" src="../assets/image/icon/delete-themes.svg">
				</a>
			</td>
		</tr>
		
		<?php for ($i=2; $i < 5; $i++): ?>
			<?php $item = $cart1[$i] ?>
			<?php $bg = $item['stock'] ? 'bg-white' : 'bg-alert/20' ?>
			<tr x-data="{ total:<?php echo $item['price'] ?>, count: 10 }" class="border-b">
				<td class="p-0 w-1/2">
					<div class="<?php echo $bg ?> p-5 flex">
						<div class="flex-none flex">
							<input class="mr-4" type="checkbox">
							<img class="w-thumb h-thumb mr-4" src="../assets/image/static/product/<?php echo $item['img'] ?>">
						</div>
						<div class="flex-initial flex flex-col justify-between pr-5">
							<p><?php echo $item['title'] ?></p>
							<div>
								<button class="px-5 py-2.5 text-primary bg-blue-100 border border-primary text-sm rounded-full mr-3 font-normal"><?php echo $item['varian'] ?></button>
							</div>
						</div>
					</div>
				</td>
				<td class="p-5 <?php echo $bg ?>" width="12%">Rp<?php echo $item['price'] ?></td>
				<td class="py-5 px-2 <?php echo $bg ?>" width="14%">
					<div class="text-center">
						<span class="text-xs text-gray70">Pembelian kelipatan 25</span>
						<div class="rounded border border-gray50 py-1 text-gray70 flex items-center justify-center">
							<span @click="count == 0 ? 0 : count--" class="text-center text-xl text-primary cursor-pointer">-</span>
							<input type="hidden" name="count">
							<span x-text="count" class="px-2 w-12 text-center">0</span>
							<span @click="count++" class="text-center text-xl text-primary cursor-pointer">+</span>
						</div>
						<span class="text-xs text-gray70">Tersisa <?php echo $item['stock'] ?></span>
					</div>
				</td>
				<td class="p-5 <?php echo $bg ?>" width="12%">
					RP<span x-text="(count * total)"></span>
				</td>
				<td class="p-5 <?php echo $bg ?> " width="12%">
					<a href="#">
						<img class="svg fill-current text-gray70 hover:text-red-600" src="../assets/image/icon/delete-themes.svg">
					</a>
				</td>
			</tr>
		<?php endfor ?>

		<tr class="border-b">
			<td class="p-5 w-1/2 bg-white"></td>
			<td class="p-5 bg-white" width="12%"></td>
			<td class="p-5 bg-white font-bold text-sm" width="14%">Sub-total Harga</td>
			<td class="p-5 bg-white text-primary font-bold" width="12%">Rp74.250</td>
			<td class="p-5 bg-white" width="12%"></td>
		</tr>
	</table>

	<table class="footer w-full mb-5 shadow-jgmain" border="0">
		<tr class="border-b">
			<td class="bg-white p-5 rounded-l font-bold w-1/2">
				<div class="flex">
					<input class="mr-2" type="checkbox">
					<label class="mr-8">Pilih Semua (4)</label>
					<span class="mr-10 text-primary font-normal">Hapus</span>
					<span class="mr-10 text-primary font-normal">Tambah ke Favorit</span>
				</div>
			</td>
			<td class="p-5 bg-white" width="12%"></td>
			<td class="p-5 bg-white font-bold text-sm" width="14%">Total (2 Produk)</td>
			<td class="p-5 bg-white font-bold text-xl text-primary" width="12%">Rp74.250</td>
			<td class="p-5 bg-white rounded-r" width="12%">
				<a href="./checkout.php" class="w-full inline-block text-center py-2.5 text-white bg-primary border border-primary text-sm rounded mr-3 font-normal">Check Out</a>
			</td>
		</tr>
		<tr class="border-b">
			<td class="bg-white p-5 rounded-l w-1/2">
				<div class="flex">
					<input class="mr-3" type="checkbox">
					<p class="mr-3">Gratis Ongkir s/d Rp15.000 dengan min. belanja Rp0</p>
					<p class="text-primary">Pelajari lebih lanjut</p>
				</div>
			</td>
			<td class="p-5 bg-white"></td>
			<td class="p-5 bg-white font-bold text-sm"></td>
			<td class="p-5 bg-white text-primary font-bold"></td>
			<td class="p-5 bg-white"></td>
		</tr>
	</table>

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