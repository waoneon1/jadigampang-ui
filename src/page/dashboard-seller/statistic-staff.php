<?php $root = '../..' ?>
<?php include $root . '/header-seller.php'; ?>
<?php $active_tab = 'staff' ?> 
<?php $active_sidebar = 'statistic' ?> 
<?php $active_sidebar_nav = 'staff' ?> 

<section class="w-full">

	<div class="flex text-gray90 text-sm">
		<div class="part1 w-56 flex-none text-xs">
			<?php include '../../parts/seller-sidebar.php'; ?>
		</div>
		<div class="part2 grow w-full p-5 text-sm">
			<!-- section 1 -->
			<div class="bg-white rounded shadow-jgmain mb-10">
				<div class="border-b p-5">
					<h2 class="font-bold text-base">Statistik Toko</h2>
				</div>
				<!-- tabs -->
				<?php include '../../parts/seller-tabs.php'; ?>
				<div class="p-5">
					<div class="flex">
						<div class="flex w-1/2">
							<div class="form-template mr-5 w-full">
								<select class="form">
									<option>7 Hari Sebelumnya</option>
									<option>2 Minggu Sebelumnya</option>
									<option>1 Bulan Sebelumnya</option>
								</select>
								<img class="svg form-after" src="../../assets/image/icon/chevron-bottom.svg">
							</div>
							<div class="form-template mr-5 w-full">
								<select class="form">
									<option>30/05/2022 - 01/06/2022 (GMT +07)</option>
									<option>30/05/2022 - 01/06/2022 (GMT +07)</option>
									<option>30/05/2022 - 01/06/2022 (GMT +07)</option>
								</select>
								<img class="svg form-after" src="../../assets/image/icon/chevron-bottom.svg">
							</div>
						</div>
						<div class="flex w-1/2 text-white">
							<button class="ml-auto mr-5 btn btn-primary">
								Download
								<img class="ml-1 svg fill-current" src="../../assets/image/icon/download.svg">
							</button>
							<button class="btn-sm btn-primary w-10 h-10">
								<img class="svg fill-current" src="../../assets/image/icon/question.svg">
							</button>
						</div>
					</div>
				</div>
				<?php $tiles = [
					['title' => 'Penjualan', 'amount' => '200.000', 'desc' => 'Dibanding 7 hari sebelumnya', 'percentage' => 30 ],
					['title' => 'Pengeluaran', 'amount' => '100.000', 'desc' => 'Dibanding 7 hari sebelumnya', 'percentage' => -30 ],
					['title' => 'Pendapatan bersih', 'amount' => '200.000', 'desc' => 'Dibanding 7 hari sebelumnya', 'percentage' => 60 ],
					['title' => 'Produk Dilihat', 'amount' => '300', 'desc' => 'Dibanding 7 hari sebelumnya', 'percentage' => 30 ],
				] ?>
				<div class="collapsible-section relative border-b px-5 pb-5 text-gray90 text-sm">
					<div class="grid grid-cols-4 gap-x-3">
						<?php foreach ($tiles as $key => $tile): ?>
							<div class="bg-white rounded shadow-jgmain p-5">
								<h4 class="font-bold mb-5 flex items-center">
									<?php echo $tile['title']  ?>
									<img class="svg fill-current ml-0.5 text-gray70" src="../../assets/image/icon/warning-line.svg">
								</h4>
								<div class="flex items-center justify-between">
									<div>
										<div class="font-bold text-2.5xl"><?php echo $tile['amount'] ?></div>
										<p class="text-gray70 text-xs"><?php echo $tile['desc'] ?></p>
									</div>
									<?php if ($tile['percentage'] < 0): ?>
										<span class="font-bold text-alert"><?php echo $tile['percentage'] ?>%</span>
									<?php else: ?>
										<span class="font-bold text-success">+<?php echo $tile['percentage'] ?>%</span>
									<?php endif ?>
								</div>
							</div>
						<?php endforeach ?>
					</div>
					<div class="collapsible-btn absolute right-0 -bottom-7 flex items-center">
						<button class="btn-sm btn-inverted1">
							<span class="collapsible-open text-sm grow">Tutup</span>
							<span class="collapsible-close text-sm grow">Lihat Semua</span>
							<img class="chevron svg fill-current" src="../../assets/image/icon/chevron-top.svg">
						</button>
					</div>
					<div class="collapsible-content grid grid-cols-4 gap-x-3 mt-3">
						<?php foreach ($tiles as $key => $tile): ?>
							<div class="bg-white rounded shadow-jgmain p-5">
								<h4 class="font-bold mb-5 flex items-center">
									<?php echo $tile['title']  ?>
									<img class="svg fill-current ml-0.5 text-gray70" src="../../assets/image/icon/warning-line.svg">
								</h4>
								<div class="flex items-center justify-between">
									<div>
										<div class="font-bold text-2.5xl"><?php echo $tile['amount'] ?></div>
										<p class="text-gray70 text-xs"><?php echo $tile['desc'] ?></p>
									</div>
									<?php if ($tile['percentage'] < 0): ?>
										<span class="font-bold text-alert"><?php echo $tile['percentage'] ?>%</span>
									<?php else: ?>
										<span class="font-bold text-success">+<?php echo $tile['percentage'] ?>%</span>
									<?php endif ?>
								</div>
							</div>
						<?php endforeach ?>
					</div>
				</div>
			</div>
			<div class="bg-white rounded shadow-jgmain mb-5">
				<div class="border-b p-5 mb-5">
					<h2 class="font-bold text-sm">Grafik Penjualan</h2>
				</div>
				<figure class="highcharts-figure p-5">
				  <div id="chart-penjualan"></div>
				</figure>
			</div>
			<div class="bg-white rounded shadow-jgmain">
				<div class="border-b p-5">
					<h2 class="font-bold text-sm">Informasi Detail</h2>
				</div>
				<div class="flex p-5">
					<div class="w-5/12">
						<figure class="border rounded">
							<div id="chart-info-detail"></div>
						</figure>
					</div>
					<div class="w-7/12 pl-10">
						<div class="h-1/2 flex border-b">
							<?php $tiles = [
								['title' => 'Total Pembeli', 'amount' => '300.000', 'desc' => 'vs Minggu sebelumnya', 'percentage' => 30 ],
								['title' => 'Pembeli Baru', 'amount' => '300.000', 'desc' => 'vs Minggu sebelumnya', 'percentage' => -30 ],
								['title' => 'Pembeli yang Ada', 'amount' => '300.000', 'desc' => 'vs Minggu sebelumnya', 'percentage' => 60 ],
							] ?>
							<?php foreach ($tiles as $key => $tile): ?>
								<div class="mr-8">
									<h4 class="font-bold mb-2 flex items-center">
										<?php echo $tile['title']  ?>
										<img class="svg fill-current ml-0.5 text-gray70" src="../../assets/image/icon/warning-line.svg">
									</h4>
									<div class="flex items-center justify-between">
										<div>
											<div class="font-bold text-2.5xl"><?php echo $tile['amount'] ?></div>
											<p class="text-gray70 text-xs"><?php echo $tile['desc'] ?></p>
										</div>
										<?php if ($tile['percentage'] < 0): ?>
											<span class="font-bold text-alert"><?php echo $tile['percentage'] ?>%</span>
										<?php else: ?>
											<span class="font-bold text-success">+<?php echo $tile['percentage'] ?>%</span>
										<?php endif ?>
									</div>
								</div>
							<?php endforeach ?>
						</div>
						<div class="h-1/2 flex items-end">
							<?php $tiles = [
								['title' => 'Potensi Pembeli', 'amount' => '300.000', 'desc' => 'vs Minggu sebelumnya', 'percentage' => 30 ],
								['title' => 'Tingkat Pembelian Berulang', 'amount' => '300.000', 'desc' => 'vs Minggu sebelumnya', 'percentage' => 30 ],
							] ?>
							<?php foreach ($tiles as $key => $tile): ?>
								<div class="mr-8">
									<h4 class="font-bold mb-2 flex items-center">
										<?php echo $tile['title']  ?>
										<img class="svg fill-current ml-0.5 text-gray70" src="../../assets/image/icon/warning-line.svg">
									</h4>
									<div class="flex items-center justify-between">
										<div>
											<div class="font-bold text-2.5xl"><?php echo $tile['amount'] ?></div>
											<p class="text-gray70 text-xs"><?php echo $tile['desc'] ?></p>
										</div>
										<?php if ($tile['percentage'] < 0): ?>
											<span class="font-bold text-alert"><?php echo $tile['percentage'] ?>%</span>
										<?php else: ?>
											<span class="font-bold text-success">+<?php echo $tile['percentage'] ?>%</span>
										<?php endif ?>
									</div>
								</div>
							<?php endforeach ?>
						</div>
					</div>
				</div>
			</div>


			<!-- eo:section 1 -->
		</div>
	</div>

</section>

<!-- Areasline Chart -->
<script type="text/javascript">
	jQuery(document).ready(function ($) { 
		Highcharts.chart('chart-penjualan', {
		  chart: {
		    type: 'areaspline'
		  },
		  height: (3 / 4 * 100) + '%',
		  title: {
		    text: ''
		  },
		  // subtitle: {
		  //   align: 'center',
		  //   text: 'Source: <a href="https://www.ssb.no/jord-skog-jakt-og-fiskeri/jakt" target="_blank">SSB</a>'
		  // },
		  legend: {
		   	itemDistance: 50
		  },
		  xAxis: {
         title: {
		      text: ''
		    }
		  },
		  yAxis: {
		    title: {
		      text: ''
		    }
		  },
		  tooltip: {
		    shared: true,
		    headerFormat: '<b>Hunting season starting autumn {point.x}</b><br>'
		  },
		  credits: {
		    enabled: false
		  },
		  plotOptions: {
		    series: {
		      pointStart: 0,

		    },
		    areaspline: {
		      fillOpacity: 0.5
		    }
		  },
		  series: [{
		    name: 'Penjualan Per-Pesanan',
		    data:
		      [
		        100000,
		        60000,
		        150000,
		        220000,
		        50000,
		        250000,
		        150000
		      ],
		    pointStart: 1,
        pointInterval: 5
		  }, {
		    name: 'Penjualan Per-Minggu',
		    data:
		      [
		        30000,
		        140000,
		        50000,
		        170000,
		        200000,
		        100000,
		        110000
		      ],
		    pointStart: 1,
        pointInterval: 5
		  }]
		});
	});
</script>

<!-- Donute Pie Chart -->
<script type="text/javascript">
	jQuery(document).ready(function ($) { 
		Highcharts.chart('chart-info-detail', {
		//Highcharts.chart('chart-penjualan', {
		    chart: {
		        plotBackgroundColor: null,
		        plotBorderWidth: null,
		        plotShadow: false,
		        type: 'pie',
		        height: 240,
		        marginRight: 200
		    },
		    legend: {
		        align: 'right',
		        verticalAlign: 'top',
		        layout: 'vertical',
		        x: -40,
		        y: 60,
		        enabled: true,
		        itemMarginBottom: 30
		    },
		    title: false,
		    tooltip: {
		        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
		    },
		    accessibility: {
		        point: {
		            valueSuffix: '%'
		        }
		    },
		    plotOptions: {
		        pie: {
		            allowPointSelect: true,
		            cursor: 'pointer',
		            dataLabels: {
		                enabled: false,
		            }
		        }
		    },
		    series: [{
		        name: 'Brands',
		        colorByPoint: true,
		        innerSize: '60%',
		        showInLegend: true,
		        data: [{
		            name: 'Pembeli yang Ada',
		            y: 50,
		        }, {
		            name: 'Pembeli Baru',
		            y: 50
		        }]
		    }]
		});

	});
</script>

<?php include $root . '/footer.php'; ?>