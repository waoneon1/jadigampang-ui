<?php $root = '../..' ?>
<?php include $root . '/header-seller.php'; ?>
<?php $active_tab = 'penarikan' ?> 
<?php $active_sidebar = 'finance' ?> 
<?php $active_sidebar_nav = 'toko' ?> 

<section class="w-full">

	<div class="flex text-gray90 text-sm">
		<div class="part1 w-56 flex-none text-xs">
			<?php include '../../parts/seller-sidebar.php'; ?>
		</div>
		<div class="part2 grow w-full p-5 text-sm">
			<!-- section 1 -->
			<div class="bg-white rounded shadow-jgmain mb-5">
				<div class="border-b p-5">
					<h2 class="font-bold text-base">Informasi Saldo</h2>
				</div>
				<div class="p-5 flex">
					<div class="grow flex items-center">
						<h2 class="font-bold text-primary mr-5 text-2.5xl">RP 20.000.000</h2>
						<button class="jg-modal-btn btn btn-primary" data-id="modal-finance-penarikan">
							Tarik Dana
						</button>
					</div>
					<div class="flex-none border-l pl-5">
						<h4 class="font-bold mb-3">Rekening Bank</h4>
						<div class="flex items-center">
							<img class="w-16 mr-5" src="../../assets/image/bank/bca.png">
							<span class="mr-5">**** 3201</span>
							<button class="btn-sm btn-secondary">
								Ganti Rekening
							</button>
						</div>
					</div>
				</div>
			</div>
			<div class="bg-white rounded shadow-jgmain mb-5">
				<div class="border-b p-5">
					<h2 class="font-bold text-base">Keuangan Toko</h2>
				</div>
				<!-- tabs -->
				<?php include '../../parts/seller-tabs.php'; ?>
				<div class="p-5">
					<h4 class="font-bold text-sm mb-5">Filter</h4>
					<div class="flex">
						<div class="form-template mr-5 w-36">
							<select class="form">
								<option>Pilih Bulan</option>
								<option>Januari</option>
								<option>Februari</option>
							</select>
							<img class="svg form-after" src="../../assets/image/icon/chevron-bottom.svg">
						</div>
						<div class="form-template mr-5 w-36">
							<select class="form">
								<option>Pilih Admin</option>
								<option>Januari</option>
								<option>Februari</option>
							</select>
							<img class="svg form-after" src="../../assets/image/icon/chevron-bottom.svg">
						</div>
						<button class="btn btn-primary">
							Terapkan
						</button>
					</div>
				</div>
				<div class="border-b">
					<?php $penarikan = [
						["tgl" => "27 Mei 2022", "nominal" => "- Rp 2.000.000", "admin" => "William"],
						["tgl" => "25 Mei 2022", "nominal" => "- Rp 500.000", "admin" => "William"],
						["tgl" => "17 Mei 2022", "nominal" => "- Rp 1.000.000", "admin" => "William"],
						["tgl" => "15 Mei 2022", "nominal" => "- Rp 200.000", "admin" => "William"],
						["tgl" => "27 Mei 2022", "nominal" => "- Rp 2.000.000", "admin" => "William"],
						["tgl" => "25 Mei 2022", "nominal" => "- Rp 500.000", "admin" => "William"],
						["tgl" => "17 Mei 2022", "nominal" => "- Rp 1.000.000", "admin" => "William"],
						["tgl" => "15 Mei 2022", "nominal" => "- Rp 200.000", "admin" => "William"],
						["tgl" => "17 Mei 2022", "nominal" => "- Rp 1.000.000", "admin" => "William"],
						["tgl" => "15 Mei 2022", "nominal" => "- Rp 200.000", "admin" => "William"],
					] ?>
					<table class="w-full">
						<tr class="text-gray90 font-bold bg-gray10">
							<th class="p-5" align="left">Tanggal</th>
							<th class="p-5" align="left">Nominal</th>
							<th class="p-5" align="left">Admin</th>
							<th class="p-5 w-6/12"></th>
						</tr>
						<?php foreach ($penarikan as $key => $item): ?>
						<tr class="text-gray70 <?php echo $key%2 != 0 ? 'bg-gray10' : '' ?>">
							<td class="px-5 py-2.5"><?php echo $item['tgl'] ?></td>
							<td class="px-5 py-2.5 text-alert"><?php echo $item['nominal'] ?></td>
							<td class="px-5 py-2.5"><?php echo $item['admin'] ?></td>
							<td class="px-5 py-2.5"></td>
						</tr>
						<?php endforeach ?>
					</table>
				</div>
				<!-- pagination -->
				<div class="p-5 flex justify-between items-center mb-12">
					<div class="text-gray70 text-xs">
					
					</div>
					<div class="text-right flex">
						<span class="text-sm text-primary w-8 h-8 flex justify-center items-center mr-1 rounded-full bg-blue-100 font-bold">1</span>	
						<span class="text-sm text-gray70 w-8 h-8 flex justify-center items-center mr-1 rounded-full">2</span>	
						<span class="text-sm text-gray70 w-8 h-8 flex justify-center items-center mr-1 rounded-full">3</span>	
						<span class="text-sm text-gray70 w-8 h-8 flex justify-center items-center mr-1 rounded-full">4</span>	
						<span class="text-sm text-gray70 w-8 h-8 flex justify-center items-center mr-1 rounded-full">5</span>	
						<span class="text-sm text-gray70 w-8 h-8 flex justify-center items-center mr-1 rounded-full">6</span>	
						<span class="text-sm text-gray70 w-8 h-8 flex justify-center items-center mr-1 rounded-full">7</span>	
						<span class="text-sm text-gray70 w-8 h-8 flex justify-center items-center mr-1 rounded-full">..</span>	
						<span class="text-sm text-gray70 w-8 h-8 flex justify-center items-center mr-1 rounded-full">100</span>	
					</div>
				</div>

			</div>

			<!-- eo:section 1 -->
		</div>
	</div>

</section>

<?php include $root . '/footer.php'; ?>