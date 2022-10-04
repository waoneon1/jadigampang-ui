<div class="products shadow-jgmain bg-white hover:shadow-lg rounded-md ">
	<a href="<?php echo $permalink ? $permalink : './product.php' ?>" class="inline-block w-full">
		<div class="relative">
			<img class="mb-3 w-full" src="../assets/image/static/product/<?php echo $item['img'] ?>">
			<?php if ($item['discount']): ?>
				<span class="absolute right-2 top-0 bg-cover text-xs text-white px-1 pt-1 pb-3" style="background-image: url(../assets/image/sale.svg)">
					<?php echo $item['discount'] ?>%<br>OFF
				</span>
			<?php endif ?>
			<?php if ($item['terlaris']): ?>
				<span class="absolute left-0 top-2 bg-primary py-1 pl-1 pr-2 rounded-r text-xs text-white">Terlaris</span>
			<?php endif ?>
		</div>
	</a>
	<div class="px-3 text-xs">
		<h4 class="mb-1 text-gray90"><?php echo $item['title'] ?></h4>
		<div class="mb-3 font-bold text-gray90 text-sm flex">
			Rp<?php echo $item['price'] ?>
		</div>
		<div class="flex mb-3 text-gray60">
			<div class="flex border-r border-gray60 pr-2">
				<img class="svg fill-current text-warning" src="<?php echo $root ?>/assets/image/icon/star.svg">
				<span class="ml-1"><?php echo $item['rating'] ?></span>
			</div>
			<div class="pl-2">Terjual <?php echo $item['count'] ?></div>
		</div>
		<div class="mb-3 text-gray60 relative">
			<div class="block mb-1"><?php echo $item['city'] ?></div>
			<div><?php echo $item['dist'] ?></div>
			<div x-data="{ open: false }" class="absolute font-bold right-0 bottom-0 text-gray70">
				<button @click="open = !open">. . .</button>
				<ul x-show="open" class="absolute font-normal z-40 bg-white w-44 rounded overflow-hidden shadow">
					<li @click="open = false" class="cursor-pointer text-gray90 hover:bg-blue-50 text-xs py-2 px-3">Tambah ke Keranjang</li>
					<li @click="open = false" class="cursor-pointer text-gray90 hover:bg-blue-50 text-xs py-2 px-3">Tambah ke Wishlist</li>
					<li @click="open = false" class="cursor-pointer text-gray90 hover:bg-blue-50 text-xs py-2 px-3">Bandingkan Produk</li>
				</ul>
			</div>
		</div>
	</div>
</div>