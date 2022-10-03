<!-- Durasi -->
<div x-data="{ durasi: false }" @click="durasi = ! durasi" class="relative bg-blue-100 py-1 rounded text-xs text-primary w-full mx-3 flex items-center justify-center cursor-pointer">
	<div>Durasi</div>
	<ul x-show="durasi" class="absolute top-6 w-full mt-3 rounded bg-white text-gray90 shadow-jgmain z-20">
		<li class="p-3 hover:bg-blue-100 flex">
			<div class="w-1/2 pr-5">
				<h4 class="font-bold text-sm mb-1">Instan</h4>
				<p>Estimasi tiba hari ini</p>
			</div>
			<div class="w-1/2 flex items-center">
				<p>Rp50.000 - Rp100.000</p>
			</div>
		</li>
		<li class="p-3 hover:bg-blue-100 flex">
			<div class="w-1/2 pr-5">
				<h4 class="font-bold text-sm mb-1">Same Day</h4>
				<p>Estimasi tiba hari ini</p>
			</div>
			<div class="w-1/2 flex items-center">
				<p>Rp50.000 - Rp100.000</p>
			</div>
		</li>
		<li class="p-3 hover:bg-blue-100 flex">
			<div class="w-1/2 pr-5">
				<h4 class="font-bold text-sm mb-1">Next Day</h4>
				<p>Estimasi tiba besok - 7 Mei</p>
			</div>
			<div class="w-1/2 flex items-center">
				<p>Rp50.000 - Rp100.000</p>
			</div>
		</li>
		<li class="p-3 hover:bg-blue-100 flex">
			<div class="w-1/2 pr-5">
				<h4 class="font-bold text-sm mb-1">Reguler</h4>
				<p>Estimasi tiba besok - 8 Mei</p>
			</div>
			<div class="w-1/2 flex items-center">
				<p>Rp50.000 - Rp100.000</p>
			</div>
		</li>
	</ul>
</div>
<!-- Kurir Pilihan -->
<div x-data="{ kurir: false }" @click="kurir = ! kurir" class="relative bg-blue-100 py-1 rounded text-xs text-primary w-full mx-3 flex items-center justify-center cursor-pointer"">
	<div>Kurir Pilihan</div>
	<ul x-show="kurir" class="absolute top-6 w-full mt-3 rounded bg-white text-gray90 shadow-jgmain z-20">
		<li class="p-3 hover:bg-blue-100 flex">
			<div class="w-1/2 pr-5">
				<h4 class="font-bold text-sm mb-1">AnterAja</h4>
				<p>Estimasi tiba hari ini</p>
			</div>
			<div class="w-1/2 flex items-center">
				<p>Rp50.000</p>
			</div>
		</li>
		<li class="p-3 hover:bg-blue-100 flex">
			<div class="w-1/2 pr-5">
				<h4 class="font-bold text-sm mb-1">TIKI</h4>
				<p>Estimasi tiba hari ini</p>
			</div>
			<div class="w-1/2 flex items-center">
				<p>Rp50.000</p>
			</div>
		</li>
		<li class="p-3 hover:bg-blue-100 flex">
			<div class="w-1/2 pr-5">
				<h4 class="font-bold text-sm mb-1">J&T</h4>
				<p>Estimasi tiba besok - 7 Mei</p>
			</div>
			<div class="w-1/2 flex items-center">
				<p>Rp50.000</p>
			</div>
		</li>
		<li class="p-3 hover:bg-blue-100 flex">
			<div class="w-1/2 pr-5">
				<h4 class="font-bold text-sm mb-1">Reguler</h4>
				<p>Estimasi tiba besok - 8 Mei</p>
			</div>
			<div class="w-1/2 flex items-center">
				<p>Rp50.000 - Rp100.000</p>
			</div>
		</li>
	</ul>
</div>