<!-- Penilaian -->
<div class="table1 text-sm text-gray90 mb-4">
	<div class="bg-gray20 p-3 rounded font-bold mb-4">Penilaian Produk</div>
	<?php $penilaian = ['AA', 'BC', 'RD'] ?>
	<?php foreach ($penilaian as $key => $value): ?>
		<div class="flex border-b pb-4 mb-4 ml-4">
			<div class="w-3/12 flex items-center">
				<div class="flex-non bg-gray90 flex items-center justify-center w-12 h-12 mr-4 font-bold rounded-full text-white"><?php echo $value ?></div>
				<div class="flex-non mr-8 text-xs">
					<div class="text-gray90">Buyer ID</div>
					<div class="text-gray70">2022-01-15</div>
				</div>
			</div>
			<div class="w-9/12">
				<div class="jg-rating inline-block mb-2 text-gray30 text-xs">
					<span class="text-yellow-300">★ </span>
					<span class="text-yellow-300">★ </span>
					<span class="text-yellow-300">★ </span>
					<span class="text-yellow-300">★ </span>
					<span class="text-gr-300">★ </span>
				</div>
				<p class="text-gray90">Barang sampai dengan aman kemasan rapi,,, produk sesuai dengan permintaan, mantab pokoknya, terimakasih seller.</p>
			</div>
		</div>
	<?php endforeach ?>
	<!-- pagination -->
	<div class="flex justify-between items-center my-4">
		<div class="text-gray70 text-xs"></div>
		<div class="text-right flex">
			<span class="text-sm text-primary w-8 h-8 flex justify-center items-center mr-1 rounded-full bg-blue-100 font-bold">1</span>	
			<span class="text-sm text-gray70 w-8 h-8 flex justify-center items-center mr-1 rounded-full">2</span>	
			<span class="text-sm text-gray70 w-8 h-8 flex justify-center items-center mr-1 rounded-full">3</span>	
			<span class="text-sm text-gray70 w-8 h-8 flex justify-center items-center mr-1 rounded-full">4</span>	
		</div>
	</div>
</div>

