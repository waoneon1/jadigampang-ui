<!-- Diskusi -->
<div class="table1 text-sm text-gray90 mb-4">
	<div class="bg-gray20 p-3 rounded font-bold mb-4">Diskusi</div>
	<?php $penilaian = ['BK', 'IZ', 'DF'] ?>
	<?php foreach ($penilaian as $key => $value): ?>
		<div class="flex pb-4 mb-4 ml-4">
			<div class="w-1/12 flex items-start">
				<div class="flex-non bg-red-500 flex items-center justify-center w-12 h-12 mr-4 font-bold rounded-full text-white"><?php echo $value ?></div>
			</div>
			<div class="w-11/12">
				<div class="w-full flex justify-between items-center mb-3">
					<div>Nama Akun Pengguna</div>
					<span class="font-bold text-xl">. . .</span>
				</div>
				<p class="text-gray90 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tempor fermentum sem, id hendrerit leo pulvinar eget. Fusce arcu magna, consectetur non metus maximus, molestie accumsan odio. Quisque in arcu arcu. Cras sed rhoncus quam. Vivamus nec tristique dui, ac imperdiet arcu. Pellentesque sodales blandit odio. Duis congue nulla sit amet purus venenatis tempus. Ut lacinia tellus sed mollis aliquam.</p>
				<div class="text-xs text-primary">
					<span class="mr-5">Suka</span>
					<span class="mr-5">Balas</span>
					<span class="mr-5 text-gray70">2 hari</span>
				</div>
			</div>
		</div>
		<div class="flex pb-4 mb-4 pl-20">
			<div class="w-1/12 flex items-start">
				<div class="flex-non bg-red-500 flex items-center justify-center w-12 h-12 mr-4 font-bold rounded-full text-white">RP</div>
			</div>
			<div class="w-11/12">
				<div class="w-full flex justify-between items-center mb-3">
					<div>Nama Akun Pengguna</div>
					<span class="font-bold text-xl">. . .</span>
				</div>
				<p class="text-gray90 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tempor fermentum sem, id hendrerit leo pulvinar eget. Fusce arcu magna, consectetur non metus maximus, molestie accumsan odio. Quisque in arcu arcu. Cras sed rhoncus quam. Vivamus nec tristique dui, ac imperdiet arcu. Pellentesque sodales blandit odio. Duis congue nulla sit amet purus venenatis tempus. Ut lacinia tellus sed mollis aliquam.</p>
				<div class="text-xs text-primary">
					<span class="mr-5">Suka</span>
					<span class="mr-5">Balas</span>
					<span class="mr-5 text-gray70">2 hari</span>
				</div>
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