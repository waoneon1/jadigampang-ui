<?php $root = '../..' ?>
<?php include $root . '/header-seller.php'; ?>
<?php $active_tab = '' ?> 
<?php $active_sidebar = 'finance' ?> 
<?php $active_sidebar_nav = 'rekening' ?> 

<section class="w-full">

	<div class="flex text-gray90">
		<div class="part1 w-56 flex-none text-xs">
			<?php include '../../parts/seller-sidebar.php'; ?>
		</div>
		<div class="part2 grow w-full p-5 text-sm">
			<!-- section 1 -->
			<div class="bg-white rounded shadow-jgmain mb-5">
				<div class="border-b p-5">
					<h2 class="font-bold text-base">Rekening Bank</h2>
				</div>
				<div class="p-5">
					<button class="btn btn-primary jg-modal-btn" data-id="modal-finance-rekening-tambah">Tambah Rekening Bank</button>
				</div>
				<div class="border-b">
					<table class="w-full">
						<tr class="text-gray90 font-bold bg-gray10">
							<th class="p-5" align="left">Nama Bank</th>
							<th class="p-5" align="left">Nomor Rekening</th>
							<th class="p-5" align="left">Atas Nama</th>
							<th class="p-5" align="left">Aksi</th>
							<th class="p-5 w-5/12" align="left"></th>
						</tr>
						<tr class="text-gray70 <?php echo $key%2 != 0 ? 'bg-gray10' : '' ?>">
							<td class="px-5 py-2.5">BCA</td>
							<td class="px-5 py-2.5">**** 3201</td>
							<td class="px-5 py-2.5">William</td>
							<td class="px-5 py-2.5">
								<div x-data="{ open: false }" class="relative flex-none">
						 			<button @click="open = !open" >
						 				<img class="svg fill-current" src="../../assets/image/icon/three-dots.svg">
						 			</button>
						 			<ul x-show="open" class="absolute w-max mt-1 right-0 font-normal z-40 bg-white rounded overflow-hidden shadow">
										<li @click="open = false" class="cursor-pointer text-gray90 hover:bg-blue-50 text-xs py-3 px-3">
											<button class="jg-modal-btn" data-id="modal-finance-rekening-detail">Lihat Detail</button>
										</li>
										<li @click="open = false" class="cursor-pointer text-gray90 hover:bg-blue-50 text-xs py-3 px-3">
											<button class="jg-modal-btn" data-id="modal-password2">Hapus</button>
										</li>
									</ul>
						 		</div>
							</td>
							<td class="px-5 py-2.5"><span class="badge-utama">Utama</span></td>
						</tr>
						<tr class="text-gray70 <?php echo $key%2 != 0 ? 'bg-gray10' : '' ?>">
							<td class="px-5 py-2.5">BNI</td>
							<td class="px-5 py-2.5">**** 7971</td>
							<td class="px-5 py-2.5">William</td>
							<td class="px-5 py-2.5">
								<img class="svg fill-current" src="../../assets/image/icon/three-dots.svg">
							</td>
							<td class="px-5 py-2.5"></td>
						</tr>
					</table>
				</div>
			</div>

			<!-- eo:section 1 -->
		</div>
	</div>

</section>

<?php include $root . '/footer.php'; ?>