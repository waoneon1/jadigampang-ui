<div class="border-b p-5 w-full">
 	<ul class="text-sm text-gray90 flex justify-between">
 		<li class="mr-10 hover:text-primary <?php echo $active_tab == '' ? 'text-primary font-bold' : '' ?>">
 			<a href="./profile-biodata.php">Biodata Diri</a>
 		</li>
 		<li class="mr-10 hover:text-primary <?php echo $active_tab == 'alamat' ? 'text-primary font-bold' : '' ?>">
 			<a href="./profile-alamat-empty.php">Daftar Alamat</a>
 		</li>
 		<li class="mr-10 hover:text-primary <?php echo $active_tab == 'pembayaran' ? 'text-primary font-bold' : '' ?>">
 			<a href="./profile-pembayaran.php">Pembayaran & Bank</a>
 		</li>
 		<li class="mr-10 hover:text-primary <?php echo $active_tab == 'notif' ? 'text-primary font-bold' : '' ?>">
 			<a href="./profile-notif.php">Pengaturan Notifikasi</a>
 		</li>
 		<li class="mr-5 hover:text-primary <?php echo $active_tab == 'security' ? 'text-primary font-bold' : '' ?>">
 			<a href="./profile-security.php">Keamanan & Login</a>
 		</li>
 	</ul>
</div>