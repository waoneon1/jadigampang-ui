
<!-- js-sort-number -->
<!-- default-sort -->
<!-- js-sort-date -->
<?php include $root . '/assets/data/cart1.php'; ?>

<?php 
	function status($s) {
		if ($s == 1) return '<span class="badge bg-success">Aktif</span>';
		elseif ($s == 2) return '<span class="badge bg-gray50">Habis</span>';
		elseif ($s == 3) return '<span class="badge bg-orange-400">Diarspikan</span>';
		elseif ($s == 4) return '<span class="badge bg-alert">Bermasalah</span>';
	}

?>

<table class="table-jg table-sortable w-full" border="0" id="demo1">
  <thead>
    <tr>
      <th class="w-5/12" align="left">
      	<input class="mr-2 checkAll" type="checkbox" name="checkAll" />
      	Nama Produk
      </th>
      <th class="default-sort sortable" align="center">
      	<div class="items-center relative inline-block">
      		<span>SKU</span> 
      		<img class="sortable-arrow svg fill-current" src="<?php echo $root ?>/assets/image/icon/sort.svg">
      	</div>
      </th>
      <th class="default-sort sortable" align="center">
      	<div class="items-center relative inline-block">
      		<span>Penjualan</span> 
      		<img class="sortable-arrow svg fill-current" src="<?php echo $root ?>/assets/image/icon/sort.svg">
      	</div>
      </th>
      <th class="default-sort sortable" align="center">
      	<div class="items-center relative inline-block">
      		<span>Harga</span> 
      		<img class="sortable-arrow svg fill-current" src="<?php echo $root ?>/assets/image/icon/sort.svg">
      	</div>
      </th>
      <th class="default-sort sortable" align="center">
      	<div class="items-center relative inline-block">
      		<span>Stock</span> 
      		<img class="sortable-arrow svg fill-current" src="<?php echo $root ?>/assets/image/icon/sort.svg">
      	</div>
      </th>
      <th class="default-sort sortable" align="center">
      	<div class="items-center relative inline-block">
      		<span>Status</span> 
      		<img class="sortable-arrow svg fill-current" src="<?php echo $root ?>/assets/image/icon/sort.svg">
      	</div>
      </th>
      <th class="default-sort" align="center">Aksi</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($cart1 as $key => $item): ?>
    <tr>
      <td>
      	<div class="flex items-center pr-20">
    			<input class="mr-2" type="checkbox">
    			<img class="w-thumb h-thumb mr-4" src="<?php echo $root ?>/assets/image/static/product/<?php echo $item['img'] ?>">
    			<p><?php echo $item['title'] ?></p>
      	</div>
      </td>
      <td align="center"><?php echo $item['sku'] ?></td>
      <td align="center">
      	<div class="flex flex-col justify-center items-center">
      		<span class="mb-0.5"><?php echo $item['sale'] ?></span>
      		<?php if ($item['sale'] == 0): ?>
      			<span class="badge bg-gray50">Belum Ada</span>
      		<?php elseif ($item['sale'] > 300): ?>
      			<span class="badge bg-success">Baik</span>
      		<?php else: ?>
      			<span class="badge bg-alert	">Kurang</span>
      		<?php endif ?>
      	</div>
      </td>
      <td align="center">Rp<?php echo $item['price'] ?></td>
      <td align="center">
      	<div class="flex flex-col justify-center items-center">
	      	<span class="mb-0.5"><?php echo $item['stock'] ?></span>
	      	<?php if ($item['stock'] == 0): ?>
	      		<span class="badge bg-gray50">Habis</span>
	      	<?php elseif ($item['stock'] <= 50): ?>
	      		<span class="badge bg-alert">Sedikit</span>
	      	<?php endif ?>
	      </div>
      </td>
      <td align="center"><?php echo status($item['status']) ?></td>
      <td align="center">
  			<div x-data="{ open: false }" class="relative">
  	 			<button @click="open = !open" >
  	 				<img class="svg text-gray70 fill-current w-6 h-6" src="../../assets/image/icon/three-dots.svg">
  	 			</button>
  	 			<ul x-show="open" class="absolute text-left w-max mt-1 right-0 font-normal z-50 bg-white rounded overflow-hidden shadow">
  					<li @click="open = false" class="cursor-pointer text-gray90 hover:bg-blue-50 text-xs py-3 px-3">
  						<a>Edit</a>
  					</li>
  					<li @click="open = false" class="cursor-pointer text-gray90 hover:bg-blue-50 text-xs py-3 px-3">
  						<a>Hapus</a>
  					</li>
  					<li @click="open = false" class="cursor-pointer text-gray90 hover:bg-blue-50 text-xs py-3 px-3">
  						<a>Pengingat Stok</a>
  					</li>
  					<li @click="open = false" class="cursor-pointer text-gray90 hover:bg-blue-50 text-xs py-3 px-3">
  						<a>Duplikat</a>
  					</li>
  					<li @click="open = false" class="cursor-pointer text-gray90 hover:bg-blue-50 text-xs py-3 px-3">
  						<a>Buat Promo</a>
  					</li>
  				</ul>
  	 		</div>
      </td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>
