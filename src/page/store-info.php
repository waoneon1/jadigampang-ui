<?php $root = '..' ?>
<?php include $root . '/header.php'; ?>
<?php $mode = isset($_GET['mode']) ? $_GET['mode'] : '' ?>

<section class="container mx-auto">
	
	<?php $active_tab = 'info' ?>
	<?php include $root . '/parts/store-header.php' ?>

	<div class="bg-white rounded shadow-jgmain w-full mb-10 text-sm">
		<?php $spec1Header 	= ['Nama Toko :','Kota:','Kode Pos:','Tahun Berdiri:','Produk Utama:','Jumlah Produk:','Total Produk Terjual:','Waktu Operasional:','Rata-rata Waktu Membelas Pesan:','Rating Toko:','Deskripsi Toko :'] ?>
		<?php $spec1Content = ['Sighra Jayabrana Sukses','Tangerang Selatan','15310','2010','Kemasan Minuman','20','20638','Senin - Jumat (08.30 - 17.00), Sabtu (08.30 - 15.00)','20 Menit','4.0','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tempor fermentum sem, id hendrerit leo pulvinar eget. Fusce arcu magna, consectetur non metus maximus, molestie accumsan odio. Quisque in arcu arcu. Cras sed rhoncus quam. Vivamus nec tristique dui, ac imperdiet arcu. Pellentesque sodales blandit odio. Duis congue nulla sit amet purus venenatis tempus. Ut lacinia tellus sed mollis aliquam.'] ?>
		<div class="text-gray90 border-b px-5 pt-5">
			<div class="w-full">
				<?php foreach ($spec1Header as $key => $header): ?>
					<div class="flex">
						<div class="w-3/12 text-gray70 pb-4"><?php echo $header ?></div>
						<div class="w-9/12 pb-4">
							<?php echo $spec1Content[$key] ?>
							<?php if ($mode == 'seller' ): ?>
								<?php if (in_array($key, [0,1,2,4,7,10])): ?>
									<a href="#" class="ml-2 text-primary">Ubah</a>
								<?php endif ?>
							<?php endif ?>
						</div>
					</div>
				<?php endforeach ?>
			</div>
		</div>
		<div class="p-5">
			<div class="flex">
				<div class="w-3/12 text-gray70">FAQ:</div>
				<div class="w-9/12">
					<div class="">
						<div class="mb-1">Q : <strong>How long I can get the feedback after we sent the enquiry?</strong></div>
						<div class="mb-3">A : We will reply you within 12 hours in working day.</div>
						<div class="mb-1">Q : <strong>How long I can get the feedback after we sent the enquiry?</strong></div>
						<div class="mb-3">A : We will reply you within 12 hours in working day.</div>
						<div class="mb-1">Q : <strong>How long I can get the feedback after we sent the enquiry?</strong></div>
						<div class="mb-3">A : We will reply you within 12 hours in working day.</div>
						<div class="mb-1">Q : <strong>How long I can get the feedback after we sent the enquiry?</strong></div>
						<div class="mb-3">A : We will reply you within 12 hours in working day.</div>
						<div class="mb-1">Q : <strong>How long I can get the feedback after we sent the enquiry?</strong></div>
						<div class="">A : We will reply you within 12 hours in working day.</div>
					</div>
					<?php if ($mode == 'seller'): ?>
						<button class="px-4 py-1 text-white bg-primary text-xs rounded-md font-normal mt-5">
							<span class="text-base mr-1 font-bold">+</span> Tambah FAQ
						</button>
					<?php endif ?>
				</div>
			</div>
		</div>
	</div>

</section>

<?php include $root . '/footer.php'; ?>