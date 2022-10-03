<?php $root = '..' ?>
<?php include $root . '/header.php'; ?>
<?php $mode = isset($_GET['mode']) ? $_GET['mode'] : '' ?>

<section class="container mx-auto">
	
	<?php $active_tab = 'feeds' ?>
	<?php include $root . '/parts/store-header.php' ?>

	<?php if ($mode == 'seller'): ?>
		<div class="bg-white rounded shadow-jgmain w-full mb-5 text-sm p-5">
			<div class="w-full flex items-center">
				<img class="flex-none svg fill-current text-gray70 mr-5" src="../assets/image/icon/attachment.svg">
				<img class="flex-none svg fill-current text-gray70 mr-5" src="../assets/image/icon/emoji.svg">
				<!-- <input type="text" class="grow w-full rounded bg-gray20 py-2 mr-4" placeholder="Apa yang tokomu ingin bagikan?"> -->
				<div class="w-full flex px-1 py-1 leading-normal w-full bg-gray20 rounded-lg shadow-none text-xs">
	        <input type="search" class="flex-initial bg-gray20 w-full py-1" placeholder="Cari produk di toko ini">
	        <a href="" class="text-white bg-primary rounded-md flex items-center justify-center px-4">
	        	<span class="mr-1">Bagikan</span>
	        </a>
	        <input type="hidden" name="post_type" value="product">
	      </div>
			</div>
		</div>
	<?php endif ?>

	<!-- comment 1 -->
	<div class="bg-white rounded shadow-jgmain w-full mb-5 text-sm">
		<div class="flex w-full px-5 py-5 border-b">
			<div class="w-full">
				<div class="flex items-center justify-between mb-5">
					<div class="flex items-center">
						<div class="flex-non bg-gray90 flex items-center justify-center w-12 h-12 mr-4 font-bold rounded-full text-white">
							<img src="../assets/image/static/store.png">
						</div>
						<div class="flex-non mr-8 text-xs">
							<div class="text-gray90 mb-1 text-sm">Sighra Jayabrana Sukses</div>
							<div class="text-gray70">5 Jam yang lalu</div>
						</div>
					</div>
					<div class="font-bold">. . .</div>
				</div>
				<p class="text-sm mb-5">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tempor fermentum sem, id hendrerit leo pulvinar eget. Fusce arcu magna, consectetur non metus maximus, molestie accumsan odio. Quisque in arcu arcu. Cras sed rhoncus quam. Vivamus nec tristique dui, ac imperdiet arcu. Pellentesque sodales blandit odio. Duis congue nulla sit amet purus venenatis tempus. Ut lacinia tellus sed mollis aliquam.
				</p>
				<div class="mb-5" style="margin-right: -1.25rem; margin-left: -1.25rem;">
					<img src="../assets/image/static/feed.png">
				</div>
				<!-- flag-comment -->
				<div class="flag-comment flex justify-between text-sm text-gray70">
					<span class="mr-4 flex items-center">
						<img class="svg fill-current text-tertiary mr-2" src="../assets/image/icon/heart.svg">
						<span>51</span>
					</span>
					<span class="flex items-center">
						<span class="mr-1">72</span>
						<span class="text-gray">Komentar</span>
					</span>
				</div>
			</div>
		</div>
		<div class="flex w-full px-5 py-5 border-b">
			<div class="flag-comment flex text-sm text-gray70">
				<span class="mr-5 flex items-center">
					<img class="svg fill-current mr-2" src="../assets/image/icon/heart.svg">
					<span>Like</span>
				</span>
				<span class="mr-5 flex items-center">
					<img class="svg fill-current mr-2" src="../assets/image/icon/comment.svg">
					<span>Comment</span>
				</span>
				<span class="mr-5 flex items-center">
					<img class="svg fill-current mr-2" src="../assets/image/icon/share.svg">
					<span>Share</span>
				</span>
			</div>
		</div>
		<div class="w-full px-5 py-5 border-b">
			<div class="flex w-full mb-5">
				<div class="flex-none bg-gray90 flex items-center justify-center w-12 h-12 mr-4 font-bold rounded-full text-white">
					<img src="../assets/image/static/photo.png">
				</div>
				<div class="w-full flex-initial flex items-center">
					<input type="text" class="w-full rounded bg-gray20 py-1" placeholder="Tulis komentar...">
				</div>
			</div>
			<div class="flex items-start mb-5">
				<div class="flex-none bg-gray90 flex items-center justify-center w-12 h-12 mr-4 font-bold rounded-full text-white">
					BE
				</div>
				<div class="mr-8">
					<div class="flex mb-3">
						<div class="text-gray90 text-sm mr-3">Bambang Erlambang</div>
						<div class="text-gray70 text-xs mt-1">5 Jam yang lalu</div>
					</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tempor fermentum sem, id hendrerit leo pulvinar eget. Fusce arcu magna, consectetur non metus maximus, molestie accumsan odio. Quisque in arcu arcu. Cras sed rhoncus quam. Vivamus nec tristique dui, ac imperdiet arcu. Pellentesque sodales blandit odio. Duis congue nulla sit amet purus venenatis tempus. Ut lacinia tellus sed mollis aliquam.</p>
				</div>
			</div>
			<div class="w-full flex items-center justify-center">
				<a href="" class="text-sm text-primary">Lihat 10 komentar lainnya</a>
			</div>		
		</div>
	</div>

	<!-- comment 2 -->
	<div class="bg-white rounded shadow-jgmain w-full mb-10 text-sm">
		<div class="flex w-full px-5 py-5 border-b">
			<div class="w-full">
				<div class="flex items-center justify-between mb-5">
					<div class="flex items-center">
						<div class="flex-non bg-gray90 flex items-center justify-center w-12 h-12 mr-4 font-bold rounded-full text-white">
							<img src="../assets/image/static/store.png">
						</div>
						<div class="flex-non mr-8 text-xs">
							<div class="text-gray90 mb-1 text-sm">Sighra Jayabrana Sukses</div>
							<div class="text-gray70">5 Jam yang lalu</div>
						</div>
					</div>
					<div class="font-bold">. . .</div>
				</div>
				<p class="text-sm mb-5">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tempor fermentum sem, id hendrerit leo pulvinar eget. Fusce arcu magna, consectetur non metus maximus, molestie accumsan odio. Quisque in arcu arcu. Cras sed rhoncus quam. Vivamus nec tristique dui, ac imperdiet arcu. Pellentesque sodales blandit odio. Duis congue nulla sit amet purus venenatis tempus. Ut lacinia tellus sed mollis aliquam.
				</p>
				<!-- flag-comment -->
				<div class="flag-comment flex justify-between text-sm text-gray70">
					<span class="mr-4 flex items-center">
						<img class="svg fill-current text-tertiary mr-2" src="../assets/image/icon/heart.svg">
						<span>51</span>
					</span>
					<span class="flex items-center">
						<span class="mr-1">72</span>
						<span class="text-gray">Komentar</span>
					</span>
				</div>
			</div>
		</div>
		<div class="flex w-full px-5 py-5 border-b">
			<div class="flag-comment flex text-sm text-gray70">
				<span class="mr-5 flex items-center">
					<img class="svg fill-current mr-2" src="../assets/image/icon/heart.svg">
					<span>Like</span>
				</span>
				<span class="mr-5 flex items-center">
					<img class="svg fill-current mr-2" src="../assets/image/icon/comment.svg">
					<span>Comment</span>
				</span>
				<span class="mr-5 flex items-center">
					<img class="svg fill-current mr-2" src="../assets/image/icon/share.svg">
					<span>Share</span>
				</span>
			</div>
		</div>
		<div class="w-full px-5 py-5 border-b">
			<div class="flex w-full mb-5">
				<div class="flex-none bg-gray90 flex items-center justify-center w-12 h-12 mr-4 font-bold rounded-full text-white">
					<img src="../assets/image/static/photo.png">
				</div>
				<div class="w-full flex-initial flex items-center">
					<input type="text" class="w-full rounded bg-gray20 py-1" placeholder="Tulis komentar...">
				</div>
			</div>
			<div class="flex items-start mb-5">
				<div class="flex-none bg-gray90 flex items-center justify-center w-12 h-12 mr-4 font-bold rounded-full text-white">
					BE
				</div>
				<div class="mr-8">
					<div class="flex mb-3">
						<div class="text-gray90 text-sm mr-3">Bambang Erlambang</div>
						<div class="text-gray70 text-xs mt-1">5 Jam yang lalu</div>
					</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tempor fermentum sem, id hendrerit leo pulvinar eget. Fusce arcu magna, consectetur non metus maximus, molestie accumsan odio. Quisque in arcu arcu. Cras sed rhoncus quam. Vivamus nec tristique dui, ac imperdiet arcu. Pellentesque sodales blandit odio. Duis congue nulla sit amet purus venenatis tempus. Ut lacinia tellus sed mollis aliquam.</p>
				</div>
			</div>
			<div class="w-full flex items-center justify-center">
				<a href="" class="text-sm text-primary">Lihat 10 komentar lainnya</a>
			</div>		
		</div>
	</div>

	<!-- pagination -->
	<div class="flex justify-center items-center mb-10">
		<div class="text-center flex">
			<span class="text-sm text-primary w-8 h-8 flex justify-center items-center mr-1 rounded-full bg-blue-100 font-bold">1</span>	
			<span class="text-sm text-gray70 w-8 h-8 flex justify-center items-center mr-1 rounded-full">2</span>	
			<span class="text-sm text-gray70 w-8 h-8 flex justify-center items-center mr-1 rounded-full">3</span>	
			<span class="text-sm text-gray70 w-8 h-8 flex justify-center items-center mr-1 rounded-full">4</span>	
			<span class="text-sm text-gray70 w-8 h-8 flex justify-center items-center mr-1 rounded-full">5</span>	
			<span class="text-sm text-gray70 w-8 h-8 flex justify-center items-center mr-1 rounded-full">6</span>	
		</div>
	</div>
	
</section>

<?php include $root . '/footer.php'; ?>