
<div id="modal-id" class="jg-modal">
	<div class="m-container">
		<span class="jg-modal-close absolute top-5 right-5 text-2xl cursor-pointer">&times;</span>
		<div class="m-content">
			<h4 class="mb-5 font-bold text-base text-center">Title</h4>
			<button data-id="modal-id" class="btn btn-primary">btn</button>
		</div>
	</div>
</div>

<!-- class="jg-modal-btn" data-id="modal-prod-success" -->
<!-- page/product.php -->
<div id="modal-prod-success" class="jg-modal">
	<div class="m-container">
			<div class="m-content">
				<img class="mb-4 mx-auto" src="<?php echo $root ?>/assets/image/cart-success.svg">
		    <h3 class="font-bold mb-5 w-56 mx-auto text-center text-gray90">Produk Berhasil Dimasukkan ke Keranjang</h3>
		    <div class="flex w-full justify-center">
		  		<a href="<?php echo $root ?>/page/cart.php" class="px-5 py-2.5 text-primary bg-blue-100 text-sm rounded-md mr-3 font-normal">
						Cek Keranjang
					</a>
					<button data-id="modal-prod-success" class="jg-modal-close-force flex px-5 py-2.5 text-white bg-primary text-sm rounded-md font-normal items-center">
						Lanjutkan Belanja
					</button>
		    </div>
		  </div>
	</div>
</div>

<!-- class="jg-modal-btn" data-id="modal-cart-akun" -->
<!-- page/cart.php -->
<div id="modal-cart-akun" class="jg-modal">
	<div class="m-container">
		<span class="jg-modal-close absolute top-5 right-5 text-2xl cursor-pointer">&times;</span>
		<div class="m-content">
			<h4 class="mb-1 font-bold text-xl">Ganti Akun</h4>
			<p class="mb-8 text-gray70 text-sm">Pilih akun untuk proses pembelian</p>
			<div class="flex justify-between items-center mb-5">
				<div class="flex items-center">
	   			<img class="mr-2 w-10 h-10" src="<?php echo $root ?>/assets/image/static/photo.png">
	   			<span>Nama Akun Pengguna</span>
	   		</div>
	   		<img class="mr-5 svg fill-current text-primary" src="<?php echo $root ?>/assets/image/icon/check.svg">
			</div>
			<div class="flex justify-between items-center">
				<div class="flex items-center justify-between">
	   			<img class="mr-2 w-10 h-10" src="<?php echo $root ?>/assets/image/static/store.png">
	   			<span>Nama Akun Toko</span>
	   		</div>
	   		<button data-id="modal-cart-akun" class="jg-modal-close-force flex px-5 py-2.5 text-white bg-primary text-sm rounded-md font-normal items-center">
					Pilih
				</button>
			</div>
		</div>
	</div>
</div>

<!-- class="jg-modal-btn" data-id="modal-store-info" -->
<!-- page/store-info.php -->
<div id="modal-store-info" class="jg-modal">
	<div class="m-container" style="max-width: 560px;">
		<span class="jg-modal-close absolute top-5 right-5 text-2xl cursor-pointer">&times;</span>
		<div class="m-content">
			<h4 class="mb-5 font-bold text-xl text-center">Tambah FAQ</h4>
			<div class="mb-4">
				<label for="pertanyaan" class="mb-3 block">Pertanyaan</label>
				<textarea class="border rounded-md w-full" rows="6"></textarea>
			</div>
			<div class="mb-5">
				<label for="jawaban" class="mb-3 block">Jawaban</label>
				<textarea class="border rounded-md w-full" rows="6"></textarea>
			</div>
			<button data-id="modal-store-info" class="jg-modal-close-force flex px-5 py-2.5 text-white bg-primary text-sm rounded-md font-normal items-center justify-center w-full">
				Tambahkan FAQ
			</button>
		</div>
	</div>
</div>

<!-- class="jg-modal-btn" data-id="modal-pesan-semua" -->
<!-- page/dashboard-user/pesan-semua.php -->
<div id="modal-pesan-semua" class="jg-modal">
	<div class="m-container" style="max-width: 560px;">
		<span class="jg-modal-close absolute top-5 right-5 text-2xl cursor-pointer">&times;</span>
		<div class="m-content text-gray90 text-sm">
			<h2 class="mb-5 font-bold text-xl text-center">Rincian Pembelian</h2>
			<div class="flex justify-between font-bold text-sm mb-1">
				<h4>Rincian Pembelian</h4>
				<h4>Tanggal Pembelian</h4>
			</div>
			<div class="flex justify-between text-xs text-gray70 mb-5">
				<p>INV/20220426/MPL/2271494117</p>
				<p>05 Mei 2022, 15:48 WIB</p>
			</div>
			<div class="collapsible-section active rounded border mb-5">
				<div class="collapsible-btn p-5 flex font-bold justify-between items-center border-b hover:bg-blue-50">
					<h4>Detail Pengiriman</h4>
					<img class="chevron svg flex-none w-5 h-5" src="<?php echo $root ?>/assets/image/icon/chevron-top.svg">
				</div>
				<div class="collapsible-content" style="display: none;">
					<div class="p-5 flex border-b">
						<div class="w-5/12">
							<div class="mb-5">
								<h4 class="font-bold text-sm mb-1">Kurir</h4>
								<p class="text-xs text-gray70">AnterAja - Regular</p>
							</div>
							<div class="">
								<h4 class="font-bold text-sm mb-1">Nomor Resi</h4>
								<p class="text-xs text-gray70">GK-11-610168900</p>
							</div>
						</div>
						<div class="w-7/12 ml-6">
							<div class="">
								<h4 class="font-bold text-sm mb-1">Alamat</h4>
								<p class="text-xs text-gray70">Jl. H. R. Rasuna Said, Kuningan, Karet Kuningan, Kecamatan Setiabudi, Kota Jakarta Selatan</p>
							</div>
						</div>
					</div>
					<div class="p-5">
						<?php $histories = [
							['date' => '27 Jun 2022, 10:23 WIB','title' => 'Pesanan telah dikirim.','desc' => 'Pesanan Anda dalam proses pengiriman oleh kurir.'],
							['date' => '24 Jun 2022, 17:09 WIB','title' => 'Menunggu Pick Up.','desc' => false],
							['date' => '24 Jun 2022, 17:01 WIB','title' => 'Pembayaran sedang diproses oleh penjual.','desc' => false],
							['date' => '24 Jun 2022, 16:59 WIB','title' => 'Pembayaran sudah diverifikasi.','desc' => 'Pembayaran telah diterima Tokopedia dan pesanan Anda sudah diteruskan ke penjual.']
						] ?>
						<?php foreach ($histories as $key => $history): ?>
							<?php $border = '' ?>
							<?php $borderb = '' ?>
							<?php if ($key != (count($histories) - 1)): ?>
								<?php $border = 'border-r border-gray30 border-dashed pb-5' ?>
								<?php $borderb = 'pb-5' ?>
							<?php endif ?>
							<div class="flex">
								<div class="w-5/12 flex justify-between <?php echo $border ?>">
									<h4 class="text-sm text-gray70"><?php echo $history['date'] ?></h4>
								</div>
								<div class="w-7/12 ml-6 relative <?php echo $borderb ?>">
									<div class="absolute top-0 flex items-center justify-center w-5 h-5 bg-primary rounded-full border-4 border-blue-100" style="left:-34px;"></div>
									<h4 class="font-bold text-sm mb-1"><?php echo $history['title'] ?></h4>
									<?php if ($history['desc']): ?>
										<p class="text-xs text-gray70"><?php echo $history['desc'] ?></p>
									<?php endif ?>
								</div>
							</div>
						<?php endforeach ?>
					</div>
				</div>
			</div>
			<div class="pb-5 mb-5 border-b">
				<h4 class="font-bold mb-3">Detail Produk</h4>
				<?php for ($i=0; $i < 1; $i++): ?>
					<?php $item = $cart1[$i] ?>
					<div class="flex text-gray90 mb">
						<div class="grow w-full flex">
							<div class="flex-none flex">
								<img class="w-thumb h-thumb mr-4" src="../../assets/image/static/product/<?php echo $item['img'] ?>">
							</div>
							<div class="grow flex flex-col justify-between text-sm">
								<p><?php echo $item['title'] ?></p>
								<p class="text-gray70 text-xs">Variasi : <?php echo $item['varian'] ?></p>
								<p class="text-gray70 text-xs"><?php echo $item['sum'] ?> barang x Rp<?php echo $item['price'] ?></p>
							</div>
						</div>
						<div class="flex-none">
							<div class="flex flex-col justify-between items-end text-sm">
								<p class="mb-4">Total</p>
								<p class="font-bold mb-4">Rp<?php echo ($item['sum'] * $item['price']) ?></p>
								<button class="w-full px-2.5 py-1 text-primary bg-blue-100 text-xs rounded-md">
									Beli Lagi
								</button>
							</div>
						</div>
					</div>
				<?php endfor ?>
			</div>
			<div class="mb-5 text-sm text-gray90">
				<h4 class="mb-3 font-bold">Rincian Pembayaran</h4>
				<div class="flex mb-3 justify-between">
					<span>Metode Pembayaran</span>
					<span>BCA Virtual Account</span>
				</div>
				<div class="flex mb-3 justify-between">
					<span>Total Harga</span>
					<span>Rp55.000</span>
				</div>
				<div class="flex mb-3 justify-between">
					<span>Ongkos Kirim</span>
					<span>Rp20.000</span>
				</div>
				<div class="flex mb-3 justify-between">
					<span>Asuransi Pengiriman</span>
					<span>Rp0</span>
				</div>
				<div class="flex justify-between font-bold">
					<span>Total Tagihan</span>
					<span>Rp75.000</span>
				</div>
			</div>
			<div class="flex w-full justify-center">
	  		<button class="w-full px-5 py-2.5 text-primary bg-blue-100 text-sm rounded-md mr-3">
					Chat Penjual
				</button>
				<button class="w-full px-5 py-2.5 text-white bg-primary text-sm rounded-md">
					Beri Ulasan
				</button>
	    </div>
		</div>
	</div>
</div>

	<!-- class="jg-modal-btn" data-id="modal-finance-penarikan" -->
	<!-- page/dashboard-seller/finance-penarikan.php & finance-pemasukan.php -->
	<div id="modal-finance-penarikan" class="jg-modal">
		<div class="m-container" style="max-width: 320px;">
			<span class="jg-modal-close absolute top-5 right-5 text-2xl cursor-pointer">&times;</span>
			<div class="m-content text-gray90 text-xs">
				<h4 class="mb-5 font-bold text-base text-center">Tarik Dana</h4>
				<div class="border mb-5">
					<div class="p-5 border-b">
						<p class="mb-1">Jumlah Saldo Saat Ini</p>
						<p class="text-primary text-base font-bold">Rp 20.000.000</p>
					</div>
					<div class="p-5 border-b">
						<p class="mb-3">Jumlah Penarikan Dana</p>
						<div class="form-template mb-2">
							<input class="form-sm" type="text" name="">
						</div>
						<div class="flex">
							<input class="mr-2" id="tarik-saldo" type="checkbox" name="">
							<label for="tarik-saldo">Tarik saldo saat ini</label>
						</div>
					</div>
					<div class="p-5">
						<p class="mb-5">Tarik Saldo ke rekening</p>
						<div class="flex justify-between mb-5">
							<img class="h-5" src="../../assets/image/bank/bca.png">
							<p>**** 3201</p>
						</div>
						<button class="btn-sm btn-secondary w-full">Ganti Rekening</button>
					</div>
				</div>
				<button data-id="modal-password1" data-close="modal-finance-penarikan" class="jg-modal-btn jg-modal-close-force btn btn-primary w-full">
					Tarik Dana
				</button>
			</div>
		</div>
	</div>

	<div id="modal-password1" class="jg-modal">
		<div class="m-container" style="max-width: 366px;">
			<img data-close="modal-password1" data-id="modal-finance-penarikan" class="absolute top-5 left-5 cursor-pointer jg-modal-btn jg-modal-close-force" src="../../assets/image/icon/arrow-left.svg">
			<div class="m-content text-gray90 text-xs">
				<h4 class="mb-5 font-bold text-base text-center">Masukkan Password</h4>
				<div class="form-template w-full mb-5">
					<input class="form" type="password" name="">
					<button class="form-after">
						<img class="svg fill-current text-gray70" src="../../assets/image/icon/eye-close.svg">
					</button>
				</div>
				<button class="btn btn-primary w-full jg-modal-btn jg-modal-close-force" data-id="modal-finance-rincian" data-close="modal-password1">
					Lanjutkan
				</button>
			</div>
		</div>
	</div>

	<!-- class="jg-modal-btn" data-id="modal-finance-rincian" -->
	<!-- page/dashboard-seller/finance-penarikan.php & finance-pemasukan.php -->
	<div id="modal-finance-rincian" class="jg-modal">
		<div class="m-container" style="max-width: 370px;">
			<div class="m-content text-gray90 text-xs">
				<h4 class="mb-5 font-bold text-base text-center">Rincian Penarikan</h4>
				<div class="border mb-5">
					<div class="p-5 border-b flex flex-col items-center">
						<p class="mb-1 text-xs">Jumlah Saldo Penarikan</p>
						<p class="text-primary text-base font-bold">Rp 20.000.000</p>
					</div>
					<div class="p-5">
						<div class="flex justify-between text-xs mb-3">
							<p class="">Tarik Dana Ke</p>
							<div class="flex justify-between">
								<img class="w-8 mr-2" src="../../assets/image/bank/bca.png">
								<p>Bank BCA | **** 3201</p>
							</div>
						</div>
						<div class="flex justify-between text-xs mb-3">
							<p>Biaya Penarikan Dana</p>
							<p>Rp 0</p>
						</div>
						<div class="flex justify-between text-xs mb-3">
							<p>Admin Penarikan</p>
							<p>William</p>
						</div>
						<div class="flex justify-between text-xs mb-3">
							<p>Tanggal Penarikan</p>
							<p>25 Mei 2022 14:55</p>
						</div>
					</div>
				</div>
				<button data-close="modal-finance-rincian" class="jg-modal-close-force btn btn-secondary w-full">
					Kembali ke Keuangan Toko
				</button>
			</div>
		</div>
	</div>

<!-- class="jg-modal-btn" data-id="modal-finance-rekening-tambah" -->
<!-- page/dashboard-seller/finance-rekening.php -->
<div id="modal-finance-rekening-tambah" class="jg-modal">
	<div class="m-container" style="max-width: 560px;">
		<span class="jg-modal-close absolute top-5 right-5 text-2xl cursor-pointer">&times;</span>
		<div class="m-content text-gray90 text-sm">
			<h4 class="mb-5 font-bold text-xl text-center">Rincian Penarikan</h4>
			<div class="text-xs mb-4">
				<label class="mb-3 inline-block">Nama (harus sama dengan Rekening Bank)</label>
				<div class="form-template text-xs">
					<input class="form-sm" type="text" name="" placeholder="Masukkan nama">
				</div>
			</div>
			<div class="text-xs mb-4">
				<label class="mb-3 inline-block">Bank</label>
				<div class="form-template text-xs">
					<select class="form-sm">
						<option>Pilih Bank</option>
						<option>BCA</option>
						<option>BNI</option>
					</select>
					<img class="svg form-after" src="../../assets/image/icon/chevron-bottom.svg">
				</div>
			</div>
			<div class="text-xs mb-4">
				<label class="mb-3 inline-block">Nomor Rekening</label>
				<div class="form-template text-xs">
					<input class="form-sm" type="text" name="" placeholder="Masukkan nomor rekening">
				</div>
			</div>
			<div class="text-xs mb-4">
				<label class="mb-3 inline-block">Cabang Bank</label>
				<div class="form-template text-xs">
					<input class="form-sm" type="text" name="" placeholder="Masukkan cabang Bank">
				</div>
			</div>
			<div class="text-xs mb-4">
				<label class="mb-3 inline-block">Kota/Kabupaten</label>
				<div class="form-template text-xs">
					<input class="form-sm" type="text" name="" placeholder="Masukkan kota/kabupaten Bank">
				</div>
			</div>
			<button data-id="modal-password2" data-close="modal-finance-rekening-tambah" class="jg-modal-btn jg-modal-close-force btn btn-primary w-full">
				Simpan
			</button>
		</div>
	</div>
</div>

<!-- class="jg-modal-btn" data-id="modal-finance-rekening-detail" -->
<!-- page/dashboard-seller/finance-rekening.php -->
<div id="modal-finance-rekening-detail" class="jg-modal">
	<div class="m-container" style="max-width: 380px;">
		<span class="jg-modal-close absolute top-5 right-5 text-2xl cursor-pointer">&times;</span>
		<div class="m-content text-gray90 text-xs">
			<h4 class="mb-5 font-bold text-base text-center">Detail Rekening Bank</h4>
			<div class="border mb-5">
				<div class="flex justify-center text-xs border-b p-5">
						<img class="w-8 mr-2" src="../../assets/image/bank/bca.png">
						<p>Bank BCA | **** 3201</p>
				</div>
				<div class="p-5">
					<div class="flex justify-between text-xs mb-3">
						<p>Atas Nama</p>
						<p>William</p>
					</div>
					<div class="flex justify-between text-xs mb-3">
						<p>Cabang Bank</p>
						<p>Jakarta Pusat</p>
					</div>
					<div class="flex justify-between text-xs">
						<p>Kota/Kabupaten</p>
						<p>Jakarta Pusat</p>
					</div>
				</div>
			</div>
			<div class="flex mb-5">
				<input class="mr-2" id="" type="checkbox" name="">
				<label for="">Atur Sebagai Rekening Utama</label>
			</div>
			<button data-close="modal-finance-rekening-detail" data-id="modal-password2" class="jg-modal-close-force jg-modal-btn btn btn-secondary w-full">
				Hapus Rekening
			</button>
		</div>
	</div>
</div>

<div id="modal-password2" class="jg-modal">
	<div class="m-container" style="max-width: 366px;">
		<img data-close="modal-password2" class="absolute top-5 left-5  jg-modal-close-force" src="../../assets/image/icon/arrow-left.svg">
		<div class="m-content text-gray90 text-xs">
			<h4 class="mb-5 font-bold text-base text-center">Masukkan Password</h4>
			<div class="form-template w-full mb-5">
				<input class="form" type="password" name="aa">
				<button class="form-after">
					<img class="svg fill-current text-red-500" src="../../assets/image/icon/eye-close.svg">
				</button>
			</div>
			<button class="btn btn-primary w-full jg-modal-close-force" data-close="modal-password2">
				Lanjutkan
			</button>
		</div>
	</div>
</div>
