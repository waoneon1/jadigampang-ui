<div class="products shadow-jgmain hover:shadow-lg mr-4 mb-5 rounded-md overflow-hidden" style="width:170px">
	<a href="<?php echo $root ?>/page/product.php">
		<div class="relative">
			<img class="mb-3" src="<?php echo $root ?>/assets/image/static/product/<?php echo $item['img'] ?>">
			<?php if ($item['discount']): ?>
				<span class="absolute right-2 top-0 bg-cover text-xs text-white px-1 pt-1 pb-3" style="background-image: url(<?php echo $root ?>/assets/image/sale.svg)">
					<?php echo $item['discount'] ?>%<br>OFF
				</span>
			<?php endif ?>
			<?php if ($item['terlaris']): ?>
				<span class="absolute left-0 top-2 bg-primary py-1 pl-1 pr-2 rounded-r text-xs text-white">Terlaris</span>
			<?php endif ?>
		</div>
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
				<div class="absolute font-bold right-0 bottom-0 text-gray70">. . .</div>
			</div>
		</div>
	</a>
</div>