<?php $root = '..' ?>
<?php include $root . '/header.php'; ?>
<?php include '../assets/data/cart1.php'; ?>
<?php include '../assets/data/product1.php'; ?>

<section class="container md:flex mx-auto">
	<div class="px-5 md:px-0 text-gray90 w-full">
		<h1 class="font-bold text-xl mb-10">Check Out</h1>
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

<section class="container md:flex mx-auto text-sm">
	<div class="px-5 md:px-0 text-gray90 w-full">
		<div class="bg-white mb-5 rounded shadow-jgmain items-center">
			<div class="border-b p-5">
				<p class="font-bold">Alamat Pengiriman</p>
			</div>
			<div class="border-b p-5 flex items-center">
				<div class="w-full text-gray90">
					<p class="font-bold mb-1">Nama Penerima (Judul Alamat)</p>
					<p class="mb-1">(+62) 812-1234-5678</p>
					<p class="text-xs">Jl. Dr. Ide Agung Gede Agung Mega Kuningan, Setia...</p>
				</div>
				<div class="w-full text-right">
					<a class="font-bold text-gray70 mr-5" href="">Utama</a>
					<button class="px-5 py-2.5 text-primary bg-blue-100 rounded-md mr-3 font-normal">
						Ubah
					</button>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="container mx-auto relative text-sm">

	<table class="body w-full mb-5 shadow-jgmain" border="0">
		<tr class="border-b font-bold">
			<td class="p-0 w-1/2">
				<div class="bg-white p-5 rounded-l font-bold">
					<p class="mb-2">Pesanan 1</p>
					<p>Sighra Jayabrana Sukses</p>
				</div>
			</td>
			<td class="bg-white p-5 text-right" width="12%">Harga Satuan</td>
			<td class="bg-white p-5 text-center" width="14%">Kuantitas</td>
			<td class="bg-white p-5 text-right" width="12%">Total Harga</td>
			<td class="bg-white p-5 text-center" width="12%">Proteksi</td>
		</tr>
		
		<?php for ($i=0; $i < 3; $i++): ?>
			<?php $item = $cart1[$i] ?>
			<tr class="border-b">
				<td class="p-0 w-1/2">
					<div class="bg-white p-5 flex">
						<div class="flex-none flex">
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
				<td class="p-5 bg-white text-right" width="12%">Rp<?php echo $item['price'] ?></td>
				<td class="py-5 px-5 bg-white text-center" width="14%">50</td>
				<td class="p-5 bg-white text-right" width="12%">Rp55.000</td>
				<td class="p-5 bg-white text-center" width="12%">
					<input class="" type="checkbox">
				</td>
			</tr>
		<?php endfor ?>

		<tr class="border-b">
			<td class="p-5 w-1/2 bg-white">
				<span class="mr-8">Pesan: </span>
				<span>Pesan dari pembeli</span>
			</td>
			<td class="p-5 bg-white" width="12%"></td>
			<td class="p-5 bg-white font-bold text-sm" width="14%"></td>
			<td class="p-5 bg-white text-primary font-bold" width="12%"></td>
			<td class="p-5 bg-white" width="12%"></td>
		</tr>
		<tr class="border-b">
			<td class="p-5 w-1/2 bg-white" colspan="3">
				<div class="flex">
					<span class="mr-20 flex-none">Opsi Pengiriman:</span>
					<?php include '../parts/dropdown-kurir.php'; ?>
				</div>
			</td>
			<td class="p-5 bg-white text-right" width="12%">Rp23.000</td>
			<td class="p-5 bg-white text-center" width="12%"></td>
		</tr>
		<tr class="border-b">
			<td class="p-5 w-1/2 bg-white"></td>
			<td class="p-5 bg-white" width="12%"></td>
			<td class="p-5 bg-white font-bold text-sm" width="14%">Sub-total Harga</td>
			<td class="p-5 bg-white text-primary font-bold text-right" width="12%">Rp74.250</td>
			<td class="p-5 bg-white" width="12%"></td>
		</tr>
	</table>

	<table class="body w-full mb-5 shadow-jgmain" border="0">
		<tr class="border-b font-bold">
			<td class="p-0 w-1/2">
				<div class="bg-white p-5 rounded-l font-bold">
					<p class="mb-2">Pesanan 2</p>
					<p>Terminal Packaging</p>
				</div>
			</td>
			<td class="bg-white p-5 text-right" width="12%">Harga Satuan</td>
			<td class="bg-white p-5 text-center" width="14%">Kuantitas</td>
			<td class="bg-white p-5 text-right" width="12%">Total Harga</td>
			<td class="bg-white p-5 text-center" width="12%">Proteksi</td>
		</tr>
		
		<?php for ($i=0; $i < 3; $i++): ?>
			<?php $item = $cart1[$i] ?>
			<tr class="border-b">
				<td class="p-0 w-1/2">
					<div class="bg-white p-5 flex">
						<div class="flex-none flex">
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
				<td class="p-5 bg-white text-right" width="12%">Rp<?php echo $item['price'] ?></td>
				<td class="py-5 px-5 bg-white text-center" width="14%">50</td>
				<td class="p-5 bg-white text-right" width="12%">Rp55.000</td>
				<td class="p-5 bg-white text-center" width="12%">
					<input class="" type="checkbox">
				</td>
			</tr>
		<?php endfor ?>

		<tr class="border-b">
			<td class="p-5 w-1/2 bg-white">
				<span class="mr-8">Pesan: </span>
				<span>Pesan dari pembeli</span>
			</td>
			<td class="p-5 bg-white" width="12%"></td>
			<td class="p-5 bg-white font-bold text-sm" width="14%"></td>
			<td class="p-5 bg-white text-primary font-bold" width="12%"></td>
			<td class="p-5 bg-white" width="12%"></td>
		</tr>
		<tr class="border-b">
			<td class="p-5 w-1/2 bg-white" colspan="3">
				<div class="flex">
					<span class="mr-20 flex-none">Opsi Pengiriman:</span>
					<?php include '../parts/dropdown-kurir.php'; ?>
				</div>
			</td>
			<td class="p-5 bg-white text-right" width="12%">Rp23.000</td>
			<td class="p-5 bg-white text-center" width="12%"></td>
		</tr>
		<tr class="border-b">
			<td class="p-5 w-1/2 bg-white"></td>
			<td class="p-5 bg-white" width="12%"></td>
			<td class="p-5 bg-white font-bold text-sm" width="14%">Sub-total Harga</td>
			<td class="p-5 bg-white text-primary font-bold text-right" width="12%">Rp74.250</td>
			<td class="p-5 bg-white" width="12%"></td>
		</tr>
	</table>

	<table class="footer w-full mb-5 shadow-jgmain" border="0">
		<tr class="border-b">
			<td class="bg-white px-5 py-8 rounded-l font-bold w-1/2">
					<p class="mr-8">Voucher Jadigampang</p>
			</td>
			<td class="p-5 bg-white" width="12%"></td>
			<td class="p-5 bg-white font-bold text-sm" width="14%"></td>
			<td class="p-5 bg-white font-bold text-xl text-primary" width="12%"></td>
			<td class="p-5 bg-white rounded-r text-primary" width="12%">
				<a href="">Pilih Voucher</a>
			</td>
		</tr>
	</table>

	<div class="w-full mb-5 bg-white shadow-jgmain rounded">
		<div class="border-b flex items-center p-5">
			<h4 class="w-2/12 mr-8 font-bold">Metode Pembayaran</h4>
			<ul class="w-10/12 flex">
				<li><button class="px-5 py-2 mr-3 text-primary bg-blue-100 border border-primary text-sm rounded-full mr-3 font-normal">Transfer Bank</button></li>
				<li><button class="px-5 py-2 mr-3 text-gray70 border border-gray70 hover:bg-blue-100 hover:text-primary hover:border-primary text-sm rounded-full mr-3 font-normal">Kartu Kredit/Debit</button></li>
				<li><button class="px-5 py-2 mr-3 text-gray70 border border-gray70 hover:bg-blue-100 hover:text-primary hover:border-primary text-sm rounded-full mr-3 font-normal">Cicilan Kartu Kredit</button></li>
				<li><button class="px-5 py-2 mr-3 text-gray70 border border-gray70 hover:bg-blue-100 hover:text-primary hover:border-primary text-sm rounded-full mr-3 font-normal">BCA OneKlik</button></li>
				<li><button class="px-5 py-2 text-gray70 border border-gray70 hover:bg-blue-100 hover:text-primary hover:border-primary text-sm rounded-full mr-3 font-normal">Transfer Virtual Account</button></li>
			</ul>
		</div>
		<div class="border-b flex items-start p-5">
			<h4 class="w-2/12 mr-8 font-bold">Pilih Bank</h4>
			<ul class="w-10/12">
				<li class="flex mb-3">
					<input type="radio" name="bank" id="bca" class="mr-4 flex-none">
					<img src="../assets/image/bank/bca.png" class="mr-5 flex-none w-20 h-10">
					<label for="bca" class="text-gray90 text-sm flex-initial">
						<p class="mb-1">Bank bca (Dicek Otomatis)</p>
						<p class="text-gray70 text-xs">Hanya menerima dari bank bca</p>
					</label>
				</li>
				<li class="flex mb-3">
					<input type="radio" name="bank" id="mandiri" class="mr-4 flex-none">
					<img src="../assets/image/bank/mandiri.png" class="mr-5 flex-none w-20 h-10">
					<label for="mandiri" class="text-gray90 text-sm flex-initial">
						<p class="mb-1">Bank mandiri (Dicek Otomatis)</p>
						<p class="text-gray70 text-xs">Hanya menerima dari bank mandiri</p>
					</label>
				</li>
				<li class="flex mb-3">
					<input type="radio" name="bank" id="bni" class="mr-4 flex-none">
					<img src="../assets/image/bank/bni.png" class="mr-5 flex-none w-20 h-10">
					<label for="bni" class="text-gray90 text-sm flex-initial">
						<p class="mb-1">Bank bni (Dicek Otomatis)</p>
						<p class="text-gray70 text-xs">Hanya menerima dari bank bni</p>
					</label>
				</li>
				<li class="flex mb-3">
					<input type="radio" name="bank" id="bri" class="mr-4 flex-none">
					<img src="../assets/image/bank/bri.png" class="mr-5 flex-none w-20 h-10">
					<label for="bri" class="text-gray90 text-sm flex-initial">
						<p class="mb-1">Bank bri (Dicek Otomatis)</p>
						<p class="text-gray70 text-xs">Hanya menerima dari bank bri</p>
					</label>
				</li>
			</ul>
		</div>
	</div>

	<div class="w-full mb-5 bg-white shadow-jgmain rounded text-sm text-gray90">
		<div class="border-b flex items-center p-5 justify-end">
			<div class="w-4/12">
				<div class="flex justify-between mb-4">
					<div>Subtotal Harga Produk</div>
					<div class="font-bold">Rp129.250</div>
				</div>
				<div class="flex justify-between mb-4">
					<div>Total Ongkos Kirim</div>
					<div class="font-bold">Rp200.000</div>
				</div>
				<div class="flex justify-between mb-4">
					<div>Biaya Proteksi Produk (1 Produk)</div>
					<div class="font-bold">Rp600</div>
				</div>
				<div class="flex justify-between">
					<div>Total Pembayaran</div>
					<div class="font-bold text-xl text-primary">Rp329.850</div>
				</div>
			</div>
		</div>
		<div class="border-b flex items-center justify-between p-5">
			<p class="mr-8 ">Dengan melanjutkan, saya setuju dengan <span class="text-primary">Syarat & Ketentuan</span> yang berlaku</p>
			<button class="px-5 py-2.5 text-white bg-primary text-sm rounded-md font-normal">
				Bayar Sekarang
			</button>
		</div>
	</div>

</section>


<?php include $root . '/footer.php'; ?>