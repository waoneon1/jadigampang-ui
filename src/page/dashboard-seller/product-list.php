<?php $root = '../..' ?>
<?php include $root . '/header-seller.php'; ?>
<?php $active_tab = 'all' ?> 
<?php $active_sidebar = 'product' ?> 
<?php $active_sidebar_nav = 'list' ?> 

<section class="w-full">

	<div class="flex text-gray90">
		<div class="part1 w-56 flex-none text-xs">
			<?php include '../../parts/seller-sidebar.php'; ?>
		</div>
		<div class="part2 grow w-full p-5 text-sm">
			<!-- section 1 -->
			<div class="bg-white rounded shadow-jgmain mb-5">
				<div class="border-b p-5">
					<h2 class="font-bold text-base">Daftar Produk</h2>
				</div>
				<!-- tabs -->
				<?php include '../../parts/seller-tabs.php'; ?>
				<div class="p-5 border-b flex items-center">
					
					<div class="form-template grow flex px-1 py-1 bg-gray20 mr-4 h-full">
		        <input type="search" class="form-search flex-initial bg-gray20 w-full py-2" placeholder="Cari alamat atau nama penerima">
		        <a href="" class="form-btn-search">
		        	<span class="mr-1">Cari</span>
		          <img class="svg fill-current w-3.5 h-3.5" src="<?php echo $root ?>/assets/image/icon/search.svg">
		        </a>
		        <input type="hidden" name="post_type" value="product">
		      </div>

		      <div class="form-template flex-none w-64 mr-5">
	      		<select class="form">
							<option>Cari Kategori</option>
							<option>cup1</option>
							<option>cup2</option>
							<option>cup</option>
						</select>
						<img class="svg form-after" src="../../assets/image/icon/chevron-bottom.svg">
		      </div>
		      <div class="form-template flex-none w-64 mr-5">
	      		<select class="form">
							<option>Cari Sub-kategori</option>
							<option>cup1</option>
							<option>cup2</option>
							<option>cup</option>
						</select>
						<img class="svg form-after" src="../../assets/image/icon/chevron-bottom.svg">
		      </div>
		      <div class="flex-none">
		      	<button class="btn btn-primary">
							Tambah Produk
						</button>
		      </div>
				</div>

				<div class="border-b flex items-center">
					<?php include '../../parts/table-product.php'; ?>
				</div>
			</div>
			<!-- eo:section 1 -->
		</div>
	</div>

</section>

<?php include $root . '/footer.php'; ?>